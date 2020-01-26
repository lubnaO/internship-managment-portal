<?php

namespace App;
use App\Announcament;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function announcaments()
    {
        return $this->hasMany('App\Announcament','AC_id');
    }
    public function students()
    {
        return $this->hasMany('App\Student','c_id');
    }
}
