<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'      => 'required',
            'email'   => 'required',
            'city_id'   => 'required',
            'address'   => '',
            'cashback'   => '',
            'password'   => '',
            'bonus' => '',
            'active_bonus' => ''
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name'      => 'Имя',
            'email'   => 'Электронная почта',
            'city_id'   => 'Город',
            'address'   => 'Адрес',
            'cashback'   => 'Кешбек',
            'password'   => 'Пароль',
        ];
    }
}
