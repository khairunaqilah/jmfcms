<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = "students";

    protected $fillable = [
        'name', 'price'
    ]; 
}
