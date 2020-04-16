<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    protected $fillable = [
        't_id', 'signature'
    ];

    public function TrainingRegistration()
 {
     return $this->belongsTo('App\TrainingRegistration','t_id');
 }
}
