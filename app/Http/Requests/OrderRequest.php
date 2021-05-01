<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name'=> 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'hidden_item_name' => 'required',
            'hidden_item_quantity' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:order,0.5'
        ];
    }
}
