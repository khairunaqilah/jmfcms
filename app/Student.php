<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = "students";

    protected $fillable = [
        'name', 'email','nric','dob','school','gender','race','guardian_id','admin_id'
    ]; 
}
