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
            'name' => 'required|min:1|max:256|regex:/[А-Яа-яЁёa-z]/u',
            'city' => 'required|min:1|max:35|regex:/[А-Яа-яЁёa-z]/u',
            'namecom' => 'required|min:1|max:256|regex:/[А-Яа-яЁёa-z]/u',
            'position' => 'required|min:2|max:256|regex:/[А-Яа-яЁё]/u',
            'email' => 'required|email|min:9|max:256|regex:/[a-z]/u',
            'phone' => 'required|min:6|max:14|regex:/[0-9+]/u'
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
