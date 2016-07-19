<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
            'name_p' => 'required',
            'price_p' => 'required',
            'stock_p' => 'required'
        ];
    }

    public function messages(){
        return [
            'name_p.required' => 'Please to name of product is empty',
            'price_p.required' => 'Please input price of this product',
        ];
    }
}
