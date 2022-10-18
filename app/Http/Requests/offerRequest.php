<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class offerRequest extends FormRequest
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
            'name_ar'=>'required|max:50|unique:offers,name_ar',
            'name_en'=>'required|max:50|unique:offers,name_en',
            'details_ar'=>'required',
            'details_en'=>'required'
        ];
    }
    public function messages()
    {
        return $messages=[
            'name_ar.required'=>__('messages.name_ar required'),
            'name_en.required'=>__('messages.name_en required'),

            'name_ar.unique'=>__('messages.name_en unique'),
            'name_en.unique'=>__('messages.name_en unique'),
            'details_ar.required'=>__('messages.details_ar required'),
            'details_en.required'=>__('messages.details_en required'),

        ];
    }


}
