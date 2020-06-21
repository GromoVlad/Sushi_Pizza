<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToppingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:2|max:40',
            'price' => 'required|numeric|min:1',
            'weight' => 'required|numeric|min:1',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения!',
            'min' => 'Поле должно иметь минимум :min символов',
            'max' => 'Поле должно иметь максимум :max символов',
            'numeric' => 'Поле должно содержать только цифры',
        ];
    }
}
