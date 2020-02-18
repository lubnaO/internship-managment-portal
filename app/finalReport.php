<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finalReport extends Model
{
    protected $fillable = ['TrineeName','TraineeID', 'TraineeDeprtment','Traineemajor','TraineePhone','TraineeEmail', 'SupervisorName','SupervisorDepartment','SupervisorPhone','SupervisorEmail',
     'OrganizationName','OrganizationD','OrganizationPhone','OrganizationFax','OrganizationEmail','OrganizationSignature','SignatureDate','q1','q2','q3','q4'];
}
