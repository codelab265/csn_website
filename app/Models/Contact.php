<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'message',
    ];
}