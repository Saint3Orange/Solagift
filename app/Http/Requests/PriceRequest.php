<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
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
            'name' => 'required|min:4|max:50',
            'city' => 'required|min:4|max:50',
            'namecom' => 'required|min:4|max:50',
            'position' => 'required|max:16',
            'email' => 'required|email|min:9|max:60',
            'phone' => 'required|min:1|max:20'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите ФИО',
            'city.required' => 'Введите город',
            'namecom.required' => 'Введите название компании',
            'position.required' => 'Введите должность',
            'email.required' => 'Введите email',
            'phone.required' => 'Введите телефон',
        ];
    }
}
