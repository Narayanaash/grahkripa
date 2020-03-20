<?php

namespace App\Http\Controllers\Website\Conflicts;

use App\Http\Controllers\Controller;
use DB;

class GalleryController extends Controller
{

    public function index()
    {
        $all_gallery_image = DB::table('gallery')->orderby('id', 'DESC')->paginate(10);

        return view('website.web.gallery', ['all_gallery_image' => $all_gallery_image]);
    }
}