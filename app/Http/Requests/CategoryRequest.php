<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:4|max:40',
            'name_db' => 'required|min:2|max:15|alpha|regex:/^[a-z]/',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения!',
            'min' => 'Поле должно иметь минимум :min символов',
            'max' => 'Поле должно иметь максимум :max символов',
            'alpha' => 'Поле должно содержать только латинские буквы',
            'regex' => 'Название БД можно указать только на латинице без заглавных букв',
        ];
    }
}
