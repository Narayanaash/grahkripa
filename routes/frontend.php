<?php

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    // return what you want
});

Route::get('/time', function () {
    echo now();
    // return what you want
});

Route::get('/', function () {
    return view('website.web.index');
})->name('website.web.index');

Route::get('/Contact', function () {
    return view('website.web.contact');
})->name('website.web.contact');

Route::get('/Kundali', function () {
    return view('website.web.kundali');
})->name('website.web.kundali');

Route::get('/Vastu_shastra', function () {
    return view('website.web.vastu_shastra');
})->name('website.web.vastu_shastra');

Route::get('/Hastrekha_shastra_list', function () {
    return view('website.web.hastrekha_shastra_list');
})->name('website.web.hastrekha_shastra_list');


Route::get('/Panchang_list', function () {
    return view('website.web.panchang_list');
})->name('website.web.panchang_list');

Route::get('/Vedashram_list', function () {
    return view('website.web.vedashram_list');
})->name('website.web.vedashram_list');

Route::get('/Vaidik_pujan_list', function () {
    return view('website.web.vaidik_pujan_list');
})->name('website.web.vaidik_pujan_list');

Route::get('/Pay', function () {
    return view('website.web.pay');
})->name('website.web.pay');

Route::get('/Janm_kundali', function () {
    return view('website.web.janm_kundali');
})->name('website.web.janm_kundali');

Route::get('/Kundali_dosh', function () {
    return view('website.web.kundali_dosh');
})->name('website.web.kundali_dosh');

Route::get('/Kundali_milan', function () {
    return view('website.web.kundali_milan');
})->name('website.web.kundali_milan');

Route::get('/Ratna', function () {
    return view('website.web.ratna');
})->name('website.web.ratna');

Route::get('/Hastrekha_shastra', function () {
    return view('website.web.hastrekha_shastra');
})->name('website.web.hastrekha_shastra');

Route::get('/Panchang', function () {
    return view('website.web.panchang');
})->name('website.web.panchang');

Route::get('/Muhurat', function () {
    return view('website.web.muhurat');
})->name('website.web.muhurat');

Route::get('/Vedashram', function () {
    return view('website.web.vedashram');
})->name('website.web.vedashram');

Route::get('/Vedik_nitya_krama', function () {
    return view('website.web.vedik_nitya_krama');
})->name('website.web.vedik_nitya_krama');

Route::get('/Vaidik_pujan', function () {
    return view('website.web.vaidik_pujan');
})->name('website.web.vaidik_pujan');

Route::get('/Yagya', function () {
    return view('website.web.yagya');
})->name('website.web.yagya');

Route::get('/Desclaimer', function () {
    return view('website.web.disclaimer');
})->name('website.web.disclaimer');

Route::get('/T&C', function () {
    return view('website.web.terms-and-conditions');
})->name('website.web.terms-and-conditions');

Route::get('/Privacy-policy', function () {
    return view('website.web.privacy-policy');
})->name('website.web.privacy-policy');

Route::get('/Refund-policy', function () {
    return view('website.web.refund-policy');
})->name('website.web.refund-policy');


Route::namespace('Website')->group(function () {

     Route::namespace('Conflicts')->group(function () {
        Route::get('/Gallery', 'GalleryController@index')->name('website.web.gallery');
    });
     Route::namespace('Mail')->group(function () {
        Route::post('/sendMail', 'MailController@newMail')->name('website.contact.email');
    });
     Route::namespace('Payment')->group(function () {
        Route::post('/Pyament_post', 'PaymentPostController@store')->name('payment_post');
    });
});