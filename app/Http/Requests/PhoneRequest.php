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
            'namecom' => 'required|min:1|max:256|regex:/[А-Яа-яЁёa-z]/u',
            'name' => 'required|min:1|max:256|regex:/[А-Яа-яЁёa-z]/u',
            'phone' => 'required|min:6|max:14|regex:/[0-9+]/u',
            'time' => 'required|min:2|max:160|regex:/[0-9]/u'
        ];
    }

    public function messages()
    {
        return [
            'namecom.required' => 'Введите название компании',
            'name.required' => 'Введите ФИО',
            'phone.required' => 'Введите телефон',
            'time.required' => 'Введите время обратного звонка'
        ];
    }
}
