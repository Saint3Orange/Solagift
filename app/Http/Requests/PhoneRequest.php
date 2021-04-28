<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
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
            'namecom' => 'required|min:4|max:50',
            'phone' => 'required|min:1|max:20',
            'time' => 'required|min:1|max:20'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите ФИО',
            'namecom.required' => 'Введите название компании',
            'phone.required' => 'Введите телефон',
            'time.required' => 'Введите время обратного звонка'
        ];
    }
}
