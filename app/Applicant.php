<?php

namespace App;
use App\Announcament;
use App\Student;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'annou_id', 'stu_id'
    ];
    public function Announcaments()
    {
        return $this->belongsTo('App\Announcament','annou_id');
    }
    public function student()
    {
        return $this->hasMany('App\Student','stu_id');
}}
