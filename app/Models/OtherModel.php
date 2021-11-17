<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherModel extends Model
{
    use HasFactory;

    protected $table = 'other';

    protected $fillable = [
        'user_id',
        'no_kasus',
        'tanggal',
        'nama_pihak',
        'unit',
        'no_dokumen',
        'nilai_kerugian',
        'kronologi',
        'dokumen',
        'bukti1',
        'bukti2',
        'bukti3',
        'disposisi',
        'dokumen_lainnya',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
