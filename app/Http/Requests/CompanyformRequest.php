<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyformRequest extends FormRequest
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
            'name'=>'required:company_forms',
            'city'=>'required:company_forms',
            'description'=>'required:company_forms',
            'contact'=>'required:company_forms',
            'history'=>'required:company_forms',
            'phone'=>'required:company_forms',
            'create'=>'required:company_forms',
            'img'=>'required:company_forms',
        ];
    }
}
