<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class aboutUsRequest extends FormRequest
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
            'photo' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
            'title_ar' => 'required',
            'description_ar' => 'required',
        ];
    }

    public function messages()
    {
        return [

            'description_ar.required' => __('messages.about us description is required'),
            'description_en.required' => __('messages.about us description is required'),
            'title_ar.required' => __('messages.about us title is required'),
            'title_en.required' => __('messages.about us title is required'),
        ];
    }
}
