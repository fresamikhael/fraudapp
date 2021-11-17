<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutstandingModel extends Model
{
    use HasFactory;

    protected $table = 'outstanding';

    protected $fillable = [
        'user_id',
        'no_kasus',
        'tanggal',
        'nama_perusahaan',
        'unit',
        'no_perjanjian',
        'total_outstanding',
        'dari_tanggal',
        'sampai_tanggal',
        'kronologi',
        'rekap_data',
        'bukti_dokumen',
        'perjanjian',
        'bukti_penagihan',
        'disposisi',
        'dokumen_lainnya',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
