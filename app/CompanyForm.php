<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyForm extends Model
{

    protected $fillable = [ 'city', 'description', 'contact', 'create', 'history','company_id','c_id','phone','img'
];

    public function company()
    {
        return $this->belongsTo('App\Company','c_id');}

}
