<?php

namespace App;
use App\Subject;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $table = "groups";

    protected $fillable = [
        'name','subject_id','teacher_id'
    ];
    public function subjects()
    {
        return $this->belongsToMany(Subject::class,'id');
    } //<- utk db saya remove ni
}
