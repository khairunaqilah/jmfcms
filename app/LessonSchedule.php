<?php

namespace App;
use App\Group;
use App\User;

use Illuminate\Database\Eloquent\Model;

class LessonSchedule extends Model
{
    public $table = "lessonschedules";

    protected $fillable = [
        'activity','date','time_from','time_to','remarks', 'status','group_id','teacher_id'
    ];
    public function groups()
    {
        return $this->belongsTo(Group::class,'group_id');
    } 
   
}
