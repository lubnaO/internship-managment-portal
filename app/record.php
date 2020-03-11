<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    protected $fillable = [
        'student_id', 'announ_id', 'massege','tasks'
    ];

    public function Announcament()
    {
        return $this->belongsTo('App\Announcament','announ_id');
    }
    public function student()
    {
        return $this->belongsTo('App\Student','student_id');
}
}
