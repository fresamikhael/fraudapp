<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermitRequest extends FormRequest
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
            'tipe_perizinan' => 'required',
            'lokasi' => 'required',
            'spesifikasi' => 'required',
            'alasan' => 'required',
            'disposisi'=>'file|mimes:pdf',
            'dokumen1'=>'file|mimes:pdf',
            'dokumen2'=>'file|mimes:pdf',
            'dokumen3'=>'file|mimes:pdf',
        ];
    }
}
