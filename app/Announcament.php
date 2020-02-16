<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\Student;
use App\Applicant;

class Announcament extends Model
{
    protected $fillable = ['id','name','description','A_start', 'A_end', 'city','title','Company_id','Applicant_id'];

    public function Company()
    {
        return $this->belongsTo('App\Company','Company_id');
    }
    public function applicants()
    {
        return $this->hasMany('App\applicant');
    }
    public function student()
    {
        return $this->hasMany('App\Student');
    }
}
