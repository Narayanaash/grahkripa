<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_image          = DB::table('gallery')->count();
        $total_payment        = DB::table('payments')->count();

        return view('admin.dashboard', ['total_image' => $total_image, 'total_payment' => $total_payment ]);
    }
}