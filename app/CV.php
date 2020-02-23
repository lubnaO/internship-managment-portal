<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class CV extends Model

{   

    protected $fillable = ['id','Name','address','date', 'email', 'formal','courses','skills','student_id'];

    public function student()
    {
        return $this->belongsTo('App\Student','student_id');
}
}

