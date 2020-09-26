<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения!',
            'min' => 'Поле должно иметь минимум :min символов',
            'confirmed' => 'Подтверждение пароля не совпадает.',
        ];
    }

}
