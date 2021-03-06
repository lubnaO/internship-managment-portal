<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Announcament;
use App\User;
use App\Applicant;
use App\CV;
use App\UniversitySupervisor;
use App\record;


class Student extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'email', 'phone','major','id_user','Company_id','applicant_id'
    ];
    


    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
    public function Company()
    {
        return $this->belongsTo('App\Company','c_id');
    }
    public function UniversitySupervisor()
    {
        return $this->belongsTo('App\UniversitySupervisor','u_id');
    }
    public function Applicant()
    {
        return $this->hasMany('App\Applicant','stu_id');
}
    public function cv()
    {
        return $this->hasOne('App\CV','student_id');
    }
    public function TrainingRegistration()
    {
        return $this->hasOne('App\TrainingRegistration','s_id');
    }
    public function Announcament()
    {
        return $this->hasMany('App\Announcament');
    }
    public function records()
    {
        return $this->hasMany('App\record','student_id');
}

public function status()
{
    return $this->hasMany('App\status','stu_id');
}
public function garde()
{
    return $this->hasMany('App\garde','stu_id');
}

}