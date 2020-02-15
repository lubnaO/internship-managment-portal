<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    public function Announcaments()
    {
        return $this->belongsTo('App\Announcament');
    }
    public function student()
    {
        return $this->hasOne('App\Student');
}}
