<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingRegistration extends Model
{
   protected $fillable = ['StudentName','StudentID','SMajor','TrainingOrganization','SupervisorName','SupervisorJob','SupervisorInfo','TraineHoure','TraineDate','TraineeTaske'];
}

