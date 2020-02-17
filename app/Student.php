<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Announcament;
use App\User;

class Student extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'email', 'phone','major','id_user','Company_id'
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
        return $this->belongsTo('App\Applicant','stu_id');
}
public function cv()
    {
        return $this->hasOne('App\CV');
    }
    public function Announcament()
    {
        return $this->hasMany('App\Announcament');
    }
}