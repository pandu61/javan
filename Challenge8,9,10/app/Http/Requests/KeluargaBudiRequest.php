<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class KeluargaBudiRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'required|max:50',
            'jenis_kelamin' => [
                                    'required',
                                    Rule::in(['L', 'P']),
                                ],
            'generasi_ke' => 'required|numeric',
            'id_ortu' => 'numeric',

        ];
    }
}
