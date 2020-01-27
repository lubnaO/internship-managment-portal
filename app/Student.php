<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        's_firstName', 's_lastName', 's_email', 's_phone','s_major','id_user'
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
}
