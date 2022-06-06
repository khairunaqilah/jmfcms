<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subject;
use App\Guardian;

class Student extends Model
{
    public $table = "students";

    protected $fillable = [
        'name', 'email','nric', 'age','school','gender','race','subject_id','guardian_id'
    ]; 
    public function subjects(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function guardians(){
        return $this->belongsTo(Guardian::class, 'guardian_id');
    }
}
