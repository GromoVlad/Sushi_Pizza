<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SizeProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'size' => 'required',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
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
