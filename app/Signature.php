<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model


{    
    protected $fillable = ['id','T_id','Signature'];

    public function TrainingRegistration()
 {
     return $this->belongsTo('App\TrainingRegistration','T_id');
 }
}
