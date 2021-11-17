<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FraudRequest extends FormRequest
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
            'no_kasus'=>'required',
            'bukti_dokumen_surat' => 'required|file|mimes:pdf,doc,docx',
            'keterangan_pelaku' =>'required|file|mimes:pdf,doc,docx',
            'keterangan_saksi'=>'required|file|mimes:pdf,doc,docx',
            'lain_lain'=>'required|file|mimes:pdf,doc,docx',
            'dokumentasi_barang_bukti'=>'required|file|mimes:pdf,doc,docx',
            'dokumentasi_investigasi'=>'required|file|mimes:pdf,doc,docx',
            'bukti_lainya'=>'required|file|mimes:pdf,doc,docx' 
        ];
    }
}
