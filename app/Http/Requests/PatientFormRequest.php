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
            'date_of_effectivity' => 'nullable',
            'occupation_sp' => 'nullable',
            'phic_employer_no' => 'nullable',
            'phic_employer_name' => 'nullable',
            'monthly_income' => 'nullable',
            'nationality' => 'nullable',
            'tax_id_num' => 'nullable',
            'religion_code' => 'nullable',
            'IndigenousGroup' => 'nullable',
            'ethnic_code' => 'nullable',
            'bloodtype_code' => 'nullable',
            'mot_fname' => 'nullable',
            'mot_lname' => 'nullable',
            'mot_mname' => 'nullable',
            'mot_birthdate' => 'nullable',
            'family_member_sp' => 'nullable',
            'country_code' => 'nullable',
            'pat_str' => 'nullable',
            'regcode' => 'required',
            'provcode' => 'required',
            'citycode' => 'required',
            'bgycode' => 'required',
            'zipcode' => 'nullable',
            'patient_address' => 'nullable',
            'pat_email' => 'nullable',
            'pat_mobile' => 'nullable',
            'pat_landline' => 'nullable',
            'family_member_code' => 'nullable',
            'nhts' => 'nullable',
            'fhNumber' => 'nullable',
            'hhnumber' => 'nullable',
            'cct_nhts' => 'nullable',
            'fsNumber' => 'required',
            'phic_member' => 'required',
            'pat_philhealth' => 'nullable',
            'philhealth_status_code' => 'nullable',
            'pDependentType_code' => 'nullable',
            'pMemberLname' => 'nullable',
            'pMemberFname' => 'nullable',
            'pMemberMname' => 'nullable',
            'pMemberBdate' => 'nullable',
            'pMemberSuffix' => 'nullable',
            'pMemberSex' => 'nullable',
            'type_of_membership' => 'nullable',
            'phil_sub_code' => 'nullable',
            'PCB_nhts' => 'required',
            'enlist_date' => 'nullable',
        ];
    }
}
