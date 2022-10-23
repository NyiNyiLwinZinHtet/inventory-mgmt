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
            'name.required'=> 'Supplier name is required',
            'name.max'=> 'category name must be less than 50 characters',

            'phone.required'=> 'Supplier phone is required',
            'phone.max'=> 'Supplier Phone must be less than 14 characters',

            'address.required'=> 'Supplier address is required',
            'address.max'=> 'Supplier address must be less than 50 characters',
        ];

    }
}
