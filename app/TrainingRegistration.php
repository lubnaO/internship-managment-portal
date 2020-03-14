<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingRegistration extends Model
{

 protected $fillable = ['id','StudentName','StudentID','SMajor','TrainingOrganization','SupervisorInfo','TraineeTaske','TraineDate','TraineHoure','SupervisorName','SupervisorJob','s_id'];
    
 public function Student()
 {
     return $this->belongsTo('App\Student','s_id');
 }
 

}


