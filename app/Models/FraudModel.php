<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FraudModel extends Model
{
    use HasFactory;

    protected $table = 'new_fraud';
    // protected $fillable = ['no_kasus','tanggal',
    // 'jenis_kasus',
    // 'faktor_penyebab',
    // 'pelaku',
    // 'departemen',
    // 'total_kerugian',
    // 'tanggal_kejadian',
    // 'tempat_Kejadian',
    // 'kronologis_lengkap',
    // 'klasifikasi_kasus',
    // 'saksi_1',
    // 'departemen_saksi_1',
    // 'saksi_2',
    // 'departemen_saksi_2',
    // 'bukti_dokumen_surat',
    // 'keterangan_pelaku',
    // 'keterangann_saksi',
    // 'lain-lain',
    // 'dokumentasi_barang_bukti',
    // 'dokumentasi_investigasi',
    // 'bukti_lainya'
    // ];
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

     public function status(){
        return $this->hasOne(StatusFraudApprovalModel::class,'no_kasus','no_kasus');
    }
}
