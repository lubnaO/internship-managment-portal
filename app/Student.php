<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        's_firstName', 's_lastName', 's_email', 's_phone','s_major','id_user'
    ];
}
