<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\Student;
use App\Applicant;
use App\record;

class Announcament extends Model
{
    protected $fillable = ['id','name','description','A_start', 'A_end', 'city','title','Company_id','Applicant_id'];

    public function Company()
    {
        return $this->belongsTo('App\Company','Company_id');
    }
    public function applicants()
    {
        return $this->hasMany('App\applicant','annou_id');
    }
    public function student()
    {
        return $this->hasMany('App\Student','stu_id');
    }
    public function records()
    {
        return $this->hasMany('App\record','announ_id');
}
}