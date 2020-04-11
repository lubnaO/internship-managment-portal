<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class CV extends Model

{   

    protected $fillable = ['id','address','date', 'formal','courses','skills','student_id','nationality'];

   public function student()
    {
        return $this->belongsTo('App\Student','student_id');
}
}

