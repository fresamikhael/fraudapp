<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OutstandingRequest extends FormRequest
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
            'tanggal' => 'required',
            'rekap_data' => 'file|mimes:pdf',
            'bukti_dokumen' =>'file|mimes:pdf',
            'perjanjian'=>'file|mimes:pdf',
            'bukti_penagihan'=>'file|mimes:pdf',
            'disposisi'=>'file|mimes:pdf',
            'dokumen_lainnya'=>'file|mimes:pdf',
        ];
    }
}
