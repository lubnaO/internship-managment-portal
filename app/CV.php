<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model

{   

    protected $fillable = ['id','Name','address','date','email','formal','courses','skills'];

    public function Student()
    {
        return $this->belongsTo('App\Student');
}
}

