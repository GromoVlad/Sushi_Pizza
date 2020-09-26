<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'phone' => 'required|min:11|max:100',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения!',
            'min' => 'Поле должно иметь минимум :min символов',
            'max' => 'Поле должно иметь максимум :max символов',
            'email' => 'Необходимо ввести e-mail адрес',
        ];
    }
}
