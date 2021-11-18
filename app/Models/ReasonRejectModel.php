<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReasonRejectModel extends Model
{
    use HasFactory;

    protected $table = 'reason_reject';
    protected $fillable =['no_kasus','reason_keterangan_saksi','reason_bukti_dokumen_surat','reason_keterangan_pelaku',
    'reason_lain_lain','reason_barang_bukti','reason_kelengkapan_dokumen','reason_kronologis_lengkap'];
    protected $guareded = [];

     public function reason(){
        return $this->belongsTo(StatusFraudApprovalModel::class,'no_kasus','no_kasus');
    }
}
