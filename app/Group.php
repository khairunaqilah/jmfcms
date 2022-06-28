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
        return $this->belongsTo(Subject::class,'subject_id');
    } 
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
