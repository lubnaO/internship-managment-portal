<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class announcamentsRequest extends FormRequest
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
            "name"=>"required|unique:announcaments" ,
            "A_start"=>"required|:announcaments" ,
            "A_end"=>"required|:announcaments" ,
            "description"=>"required|:announcaments" ,
            "city"=>"required|:announcaments" , 
            "title"=>"required|:announcaments",
            "Applicant_id"=>"announcaments"




        ];
    }
}
