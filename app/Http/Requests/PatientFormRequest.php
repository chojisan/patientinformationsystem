<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientFormRequest extends FormRequest
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
            'master_patient_perm_id' => 'nullable',
            'pat_temp_id' => 'nullable',
            'pat_image' => 'nullable',
            'prefix_code' => 'required',
            'pat_fname' => 'required',
            'pat_lname' => 'required',
            'pat_mname' => 'required',
            'suffix_code' => 'required',
            'sex_code' => 'required',
            'pat_birthDate' => 'required',
            'pat_birthplace' => 'nullable',
            'civil_stat_code' => 'nullable',
            'maiden_lastname' => 'nullable',
            'educattainment' => 'nullable',
            'occupation_code' => 'nullable',
        ];
    }
}
