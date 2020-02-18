<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingRegistration extends Model
{
    protected $fillable = ['id','StudentName','StudentID','SMajor',
    'TrainingOrganization','SupervisorInfo','SupervisorName','SupervisorJob','TraineeTaske','TraineHoure','TraineDate'];
    
}

