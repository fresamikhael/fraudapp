<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermitModel extends Model
{
    use HasFactory;

    protected $table = 'permit';

    protected $fillable = [
        'id_permit',
        'tipe_perizinan',
        'lokasi',
        'spesifikasi',
        'alasan',
        'disposisi',
        'dokumen1',
        'dokumen2',
        'dokumen3',
    ];
}
