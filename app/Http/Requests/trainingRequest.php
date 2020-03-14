<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class trainingRequest extends FormRequest
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
            'StudentName'=>'required:training_registrations',
            'StudentID'=>'required:training_registrations',
            'SMajor'=>'required:training_registrations',
            'TrainingOrganization'=>'required:training_registrations',
            'SupervisorInfo'=>'required:training_registrations',
            'TraineeTaske'=>'required:training_registrations',
            'TraineHoure'=>'required:training_registrations',
            'TraineDate'=>'required:training_registrations',
            'SupervisorName'=>'required:training_registrations',
            'SupervisorJob'=>'required:training_registrations',





        ];
    }
}
