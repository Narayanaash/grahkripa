<?php

namespace App\Http\Controllers\Auth\Conflicts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Conflict\Conflict;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use Response;
use DB;

class PostController extends Controller
{
    public function newPost()
    {
        return view('admin.auth.conflicts.new_post');
    }

    public function addPost(Request $request)
    {
        $request->validate([
            'file'         => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $anews = new Conflict;
        if ($request->hasFile('file')) {
            $image        = $request->file('file');
            $file_name    = time() . ".jpg";

            $image_resize = Image::make($image->getRealPath());

            if (!File::exists(public_path() . "/assets"))
                File::makeDirectory(public_path() . "/assets");

            if (!File::exists(public_path() . "/assets/gallery"))
                File::makeDirectory(public_path() . "/assets/gallery");

            $image_resize->resize(1170, 600, function ($constraint) {
                $constraint->aspectRatio();
            });

            $image_resize->save(public_path("assets/gallery/" . $file_name));

            $image_resize->resize(150, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $image_resize->save(public_path("assets/gallery/thumbnails/" . $file_name));

            $anews->image = $file_name;
            $anews->date  = now();

            if ($anews->save())
                return redirect()->back()->with('msg', '<p class="text-success">Image uploaded successfully</p>');
            else
                return redirect()->back()->with('msg', '<p class="text-danger">Something wrong while uploading</p>');
        } else
            return redirect()->back()->with('msg', '<p class="text-danger">Please upload image!</p>');
    }

    public function allPost()
    {
        return view('admin.auth.conflicts.all_conflict');
    }

    public function allPostData(Request $request)
    {

        $anews = new Conflict;

        $columns = array(
            0 => 'id',
            2 => 'image',
            3 => 'date',
            4 => 'action',
        );

        $totalData = $anews->count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {

            $news_data = $anews
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
        } else {

            $search = $request->input('search.value');

            $news_data = $anews
                ->orWhere('gallery.date', 'LIKE', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = $anews
                ->orWhere('gallery.date', 'LIKE', "%{$search}%")
                ->count();
        }

        $data = array();

        if (!empty($news_data)) {

            $cnt = 1;

            foreach ($news_data as $single_data) {

                $action = "";
                $action = "<a class=\"btn btn-danger\" href=\"" . route('delete_conflicts_post', ['newsId' => $single_data->id]) . "\">Delete</a>";

                $image                  = "";
                $image                  = "<a href='assets/gallery/".$single_data->image."' target='_blank'><img src='assets/gallery/thumbnails/".$single_data->image."'></a>";

                $nestedData['id']       = $cnt;
                $nestedData['image']    = $image;
                $date                   = $single_data->date;; 
                $date                   = date('m/d/Y-h:i:s A', strtotime($date));
                $nestedData['date']     = $date;
                $nestedData['action']   = $action;

                $data[]                 = $nestedData;

                $cnt++;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
        );

        print json_encode($json_data);
    }

    public function deleteNews($newsId)
    {

        $news = DB::table('gallery')
            ->where('id', $newsId)
            ->get();

        File::delete(public_path("assets/gallery/" . $news[0]->image));
        File::delete(public_path("assets/gallery/thumbnails/" . $news[0]->image));

        DB::table('gallery')
            ->where('id', $newsId)
            ->delete();

        return redirect()->back();
    }
}