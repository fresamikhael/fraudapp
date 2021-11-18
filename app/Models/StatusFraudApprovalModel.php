<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusFraudApprovalModel extends Model
{
    use HasFactory;
    protected $table = 'status_approval_fraud';

    protected $guarded = [];

    public function status(){
        return $this->belongsTo(FraudModel::class,'no_kasus','no_kasus');
    }

    public function reason(){
        return $this->hasOne(ReasonRejectModel::class,'no_kasus','no_kasus');
    }
}
