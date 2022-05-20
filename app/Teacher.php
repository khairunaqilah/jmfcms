<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $table = "teachers";

    protected $fillable = [
       'user_id', 'qualifications'
    ]; 
}
