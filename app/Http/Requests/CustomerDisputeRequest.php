<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerDisputeRequest extends FormRequest
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
            'dokumen_surat'=>'required|file|mimes:pdf,doc,docx',
            'bukti_lainya'=>'required|file|mimes:pdf,doc,docx',
            'dokumen_form_klaim'=>'required|file|mimes:pdf,doc,docx',
            'barang_bukti'=>'required|file|mimes:pdf,doc,docx',
            'kelengkapan_dokumen'=>'required|file|mimes:pdf,doc,docx',
           'lain_lain'=>'required|file|mimes:pdf,doc,docx',
        ];
    }
}
