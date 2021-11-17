<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDisputeModel extends Model
{
       use HasFactory;

    protected $table = 'customer_dispute';

    protected $guarded = [];


     public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
