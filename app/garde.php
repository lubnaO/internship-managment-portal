<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class garde extends Model
{
    protected $fillable = [
        'stu_id','massege'
    ];

    public function student()
    {
        return $this->belongsTo('App\Student','stu_id');
    }
}
