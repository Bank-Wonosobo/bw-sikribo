<?php

namespace App\Http\Requests\Slik;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlikReq extends FormRequest
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
            'permohonan_slik_id' => ['required'],
        ];
    }
}
