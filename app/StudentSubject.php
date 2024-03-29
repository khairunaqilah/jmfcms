<?php

namespace App;
use App\Student;
use App\Subject;
use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    public $table ="students_subjects";

    protected $fillable =[ 'student_id','subject_id','group_id'

    ];

    public function subjects(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function students()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
    public function groups()
    {
        return $this->belongsTo(Group::class,'group_id');
    }
}
