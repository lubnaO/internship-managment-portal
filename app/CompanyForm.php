<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyForm extends Model
{

    protected $fillable = ['name', 'city', 'description', 'contact', 'create', 'history','image','company_id','c_id','phone','img'
];

    public function company()
    {
        return $this->belongsTo('App\Company','c_id');}

}
