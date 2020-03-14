<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyForm extends Model
{
    protected $fillable = ['name', 'city', 'description', 'contact', 'create', 'history','img','phone'];
}
