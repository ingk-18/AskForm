<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowAskForm extends FormRequest
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
            'my_number' => 'required|digits:12',
            'my_number' => 'exists:ask_forms',
            'password' => 'exists:ask_forms'
        ];
    }
}
