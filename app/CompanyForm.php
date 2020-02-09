<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyForm extends Model
{
    protected $fillable = ['c-name', 'city', 'description', 'contact', 'create', 'history'];
}
