<?php

namespace App\Models\Payment;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'name','email','phone','message','file'
    ];
}