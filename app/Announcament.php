<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Announcament extends Model
{
    protected $fillable = ['name','description'];

    public function Company()
    {
        return $this->belongsTo('App\Company');
    }
}
