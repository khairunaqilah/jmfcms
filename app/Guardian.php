<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    public $table = "guardians";

    protected $fillable = [
       'user_id', 'address'
    ]; 
}
