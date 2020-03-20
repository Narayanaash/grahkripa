<?php

namespace App\Http\Controllers\Website\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment\Payment;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use Response;
use DB;

class PaymentPostController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'file'    => 'required|image|mimes:jpeg,png,jpg',
            'name'    => 'required',
            'phone'   => 'required|numeric|min:10',
            'message' => 'max:500',
        ]);

        $anews = new Payment;
        if ($request->hasFile('file')) {
            $image        = $request->file('file');
            $file_name    = time() . ".jpg";

            $image_resize = Image::make($image->getRealPath());

            if (!File::exists(public_path() . "/assets"))
                File::makeDirectory(public_path() . "/assets");

            if (!File::exists(public_path() . "/assets/payments"))
                File::makeDirectory(public_path() . "/assets/payments");

            $image_resize->resize(1170, 600, function ($constraint) {
                $constraint->aspectRatio();
            });

            $image_resize->save(public_path("assets/payments/" . $file_name));

            $image_resize->resize(150, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $image_resize->save(public_path("assets/payments/thumbnails/" . $file_name));

            $anews->file    = $file_name;
            $anews->name    = $request->input('name');
            $anews->email   = $request->input('email');
            $anews->phone   = $request->input('phone');
            $anews->message = $request->input('message');
            $anews->date    = now();

            if ($anews->save())
                return redirect()->back()->with('msg', '<b class="text-success">Submitted successfully</b>');
            else
                return redirect()->back()->with('msg', '<p class="text-danger">Something went wrong!</p>');
        } else
            return redirect()->back()->with('msg', '<p class="text-danger">Please upload receipt!</p>');
    }
}