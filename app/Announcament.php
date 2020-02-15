<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Announcament extends Model
{
    protected $fillable = ['name','description','A_start', 'A_end', 'city','title','Company_id'];

    public function Company()
    {
        return $this->belongsTo('App\Company');
    }
    public function applicants()
    {
        return $this->hasMany('App\applicant');
    }
}
