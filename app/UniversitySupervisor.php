<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversitySupervisor extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
    public function students()
    {
        
        return $this->hasMany('App\Student', 'u_id');
    }
}
