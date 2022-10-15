<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            "name" => 'required|unique:suppliers|max:50',
            'phone'=> 'required|unique:suppliers|max:14',
            'address'=> 'required|max:255'
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
            'name.required'=> 'Category name is required',
            'name.unique'=> 'Category name must be unique',
            'name.max'=> 'category name must be less than 50 characters',
        ];

    }
}
