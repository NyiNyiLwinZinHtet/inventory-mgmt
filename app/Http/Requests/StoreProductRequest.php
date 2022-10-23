<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => 'required|unique:products|max:50',
            'price'=> 'required|gt:0 | lte:65535'
        ];
    }

     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return[
            'name.required'=> 'Product name is required',
            'name.unique'=> 'Product name must be unique',
            'name.max'=> 'Product name must be less than 50 characters',

            'price.required'=> 'Product price is required',
            'price.max'=> 'Product must be max',

            // 'price.required'=> 'Product price is required',
            // 'price.max'=> 'Product must be max',

            // 'price.required'=> 'Product price is required',
            // 'price.max'=> 'Product must be max',

            // 'photo.required'=> 'Product photo is required',

        ];

    }
}
