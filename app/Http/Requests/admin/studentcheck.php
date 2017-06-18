<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class studentcheck extends FormRequest
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
            'std_id' => 'required|max:20',
            'l_name' => 'required|max:20',
            'f_name' => 'required|max:20',
            'm_name' => 'required|max:20',
            'email' => 'required|email',
            'contact' => 'required|max:20',
            'address' => 'required|max:100',
            'status' => 'required|max:30',
            'course' => 'required|max:30',
            'scholar_name' => 'required|max:30',
            'scholar_amount' => 'required|max:10',
            'insurance_name' => 'required|max:30',
            'insurance_amount' => 'required|max:10',
            'insurance_capacity' => 'required|max:3',
            'dob'=> 'required'
        ];
    }
}
