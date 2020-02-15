<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    public function Student()
    {
        return $this->belongsTo('App\Student');
}
}
