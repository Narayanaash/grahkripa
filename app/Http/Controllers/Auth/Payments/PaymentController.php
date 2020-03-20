<?php

namespace App\Http\Controllers\Auth\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment\Payment;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use Response;
use DB;

class PaymentController extends Controller
{


    public function show()
    {
        return view('admin.auth.payments.all_payments');
    }

    public function getAllData(Request $request)
    {

        $anews = new Payment;

        $columns = array(
            0 => 'id',
            1 => 'name',
            2 => 'email',
            3 => 'phone',
            4 => 'file',
            5 => 'message',
            6 => 'date',
            7 => 'action',
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
                ->orWhere('payments.date', 'LIKE', "%{$search}%")
                ->orWhere('payments.name', 'LIKE', "%{$search}%")
                ->orWhere('payments.email', 'LIKE', "%{$search}%")
                ->orWhere('payments.phone', 'LIKE', "%{$search}%")
                ->orWhere('payments.message', 'LIKE', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();

            $totalFiltered = $anews
                ->orWhere('payments.date', 'LIKE', "%{$search}%")
                ->orWhere('payments.name', 'LIKE', "%{$search}%")
                ->orWhere('payments.email', 'LIKE', "%{$search}%")
                ->orWhere('payments.phone', 'LIKE', "%{$search}%")
                ->orWhere('payments.message', 'LIKE', "%{$search}%")
                ->count();
        }

        $data = array();

        if (!empty($news_data)) {

            $cnt = 1;

            foreach ($news_data as $single_data) {

                $action = "";
                $action = "<a class=\"btn btn-danger\" href=\"" . route('Payments_delete', ['newsId' => $single_data->id]) . "\">Delete</a>";

                $file                  = "";
                $file                  = "<a href='assets/payments/".$single_data->file."' target='_blank'><img src='assets/payments/thumbnails/".$single_data->file."' ></a>";

                $nestedData['id']       = $cnt;
                $nestedData['file']     = $file;
                $date                   = $single_data->date;
                $date                   = date('m/d/Y-h:i:s A', strtotime($date));
                $nestedData['date']     = $date;
                $nestedData['action']   = $action;
                $nestedData['name']     = $single_data->name;
                $nestedData['email']    = $single_data->email;
                $nestedData['phone']    = $single_data->phone;
                $nestedData['message']  = $single_data->message;

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

    public function delete($newsId)
    {

        $news = DB::table('payments')
            ->where('id', $newsId)
            ->get();

        File::delete(public_path("assets/payments/" . $news[0]->file));
        File::delete(public_path("assets/payments/thumbnails/" . $news[0]->file));

        DB::table('payments')
            ->where('id', $newsId)
            ->delete();

        return redirect()->back();
    }
}