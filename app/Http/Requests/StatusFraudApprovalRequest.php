<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusFraudApprovalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'status_no_kasus'=>'in:APPROVE',
        'status_tanggal'=> 'in:APPROVE',
        'status_jenis_kasus'=> 'in:APPROVE',
        'status_faktor_penyebab'=> 'in:APPROVE',
        'status_pelaku'=> 'in:APPROVE',
        'status_departemen'=> 'in:APPROVE',
        'status_total_kerugian'=> 'in:APPROVE',
        'status_tanggal_kejadian'=> 'in:APPROVE',
        'status_tempat_Kejadian'=> 'in:APPROVE',
        'status_kronologis_lengkap'=> 'in:APPROVE',
      
        'status_bukti_dokumen_surat'=> 'in:APPROVE',
        'status_keterangan_pelaku'=> 'in:APPROVE',
        'status_keterangan_saksi'=> 'in:APPROVE',
        'status_lain_lain'=> 'in:APPROVE',
        'status_dokumentasi_barang_bukti'=> 'in:APPROVE',
        'status_dokumentasi_investigasi'=> 'in:APPROVE',
        'status_bukti_lainya'=> 'in:APPROVE',
        
        
        ];
    }
}
