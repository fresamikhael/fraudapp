<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtherRequest extends FormRequest
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
            'dokumen' => 'file|mimes:pdf',
            'bukti1' =>'file|mimes:pdf',
            'bukti2'=>'file|mimes:pdf',
            'bukti3'=>'file|mimes:pdf',
            'disposisi'=>'file|mimes:pdf',
            'dokumen_lainnya'=>'file|mimes:pdf',
        ];
    }
}
