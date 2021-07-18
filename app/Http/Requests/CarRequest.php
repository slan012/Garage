<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
        $rules =  [
            'image' => 'image|max:5000',
            'brand' => 'required|string|alpha_num',
            'model' => 'required|string|alpha_num',
            'registration' => 'required|string|alpha_num|size:7',
            'year' => 'required|string|digits:4',
            'energy' => 'required|string|in:Diesel,Essence,Hybride,Electrique,GPL',
            'mileage' => 'required|string|digits_between:1,7',
            'color' => 'string|alpha_num',
            'power' => 'string|digits_between:2,4',
            'engine' => 'string',
            'state' => 'required|string|in:N,O',
            'price' => 'required|numeric',
            'description' => 'required|string|min:5'
        ];
        
        if ($this->method() == 'POST') {
            $rules['image'] .= '|required';
        }

        return $rules;
    }
}
