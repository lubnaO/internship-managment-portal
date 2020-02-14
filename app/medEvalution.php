<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medEvalution extends Model
{
    protected $fillable = ['StudentName','StudentID','TrainingOrganization','DepartmentName','Startdate',
    'Enddate','AccomplishedTasks','SkillsAcquired','KnowledgeUsed','KeyMeetings','Issues','Feedback'];

}
