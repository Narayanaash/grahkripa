<?php

namespace App\Models\Conflict;

use Illuminate\Database\Eloquent\Model;

class Conflict extends Model
{
    protected $table = 'gallery';

    protected $fillable = [
        'image','date'
    ];
}