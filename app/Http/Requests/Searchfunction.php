<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Searchfunction extends FormRequest
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
            //
            'startdate'=>'required|date',
            'returndate'=>'required|date',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
            'startdate.before:end_date'=>'please input a validate Start Date',
            'startdate.required'=>'Start Date is Required',
            'returndate.required'=>'Return Date is Required',
            'returndate.after:start_date'=>'please input a validate Return Date',
            'vtype.s'=>'Select a Vehicletype',
        ];
    }
}
