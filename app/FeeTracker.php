<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeTracker extends Model
{
    public $table = "fee_trackers";

    protected $fillable=[
        'fee_month','payment_deadline','receipt','payment_status','guardian_id','admin_id'
    ];
    
}
