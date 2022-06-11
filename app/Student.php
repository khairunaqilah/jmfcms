<?php

namespace App;
use App\Subject;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = "students";

    protected $fillable = [
        'name', 'email','nric','dob','school','gender','race','guardian_id','admin_id'
    ]; 
    public function subjects(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
