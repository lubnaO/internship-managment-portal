<?php

namespace App;
use App\Announcament;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'address', 'email', 'phone','description','id_user'
    ];
    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }
    public function announcaments()
    {
        return $this->hasMany('App\Announcament');
    }
    public function students()
    {
        return $this->hasMany('App\Student');
    }
    public function companyform()
    {
        return $this->hasOne('App\CompanyForm','c_id');}
}
