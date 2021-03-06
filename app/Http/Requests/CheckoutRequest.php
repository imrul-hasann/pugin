<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
//        $emailValidation = auth()->user() ? 'required|email' : 'required|email|unique:customers';

        return [
            'shipping' => 'required',
            'payment_method' => 'required',
            'name' => 'required',
            'shipping_address' => 'required',
            'number' => 'required|regex:/\+?(88)?0?1[3456789][0-9]{8}\b/',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'You already have an account with this email address. Please <a href="/login">login</a> to continue.',
        ];
    }
}
