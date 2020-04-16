<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingRegistration extends Model
{

 protected $fillable = ['id','StudentName','StudentID','SMajor','TrainingOrganization','SupervisorInfo','TraineeTaske','TraineDate','TraineHoure','SupervisorName','SupervisorJob','s_id','signature'];
    
 public function Student()
 {
     return $this->belongsTo('App\Student','s_id');
 }
 public function Signature()
    {
<<<<<<< HEAD
        return $this->hasOne('App\Signature','T_id');
    }
=======
        return $this->hasOne('App\Signature','t_id');
    }
 
>>>>>>> 2d64b993e4a7fec497b0d8a5f0bd19961c0db053

}


