<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class finalReport extends Model
{
    protected $fillable = ['TraineeName','TraineeID','TraineeDepartment','Traineemajor','TraineePhone','TraineeEmail','SupervisorName','SupervisorDepartment','SupervisorPhone','SupervisorEmail','q1','q2','q3','q4','q5','OrganizationName','OrganizationD','OrganizationPhone','OrganizationFax','OrganizationEmail','OrganizationSignature','SignatureDate'];
}
