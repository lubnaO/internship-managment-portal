<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversitySupervisor extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'email', 'id_user'
    ];
    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
    public function students()
    {
        
        return $this->hasMany('App\Student', 'u_id');
    }
}
