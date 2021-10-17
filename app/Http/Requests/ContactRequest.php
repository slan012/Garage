<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string',
            'adress' => 'required|string',
            'zipcode' => 'required|digits:5',
            'city' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'required|email'
        ];
    }
}
