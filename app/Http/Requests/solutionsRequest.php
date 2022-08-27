<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class solutionsRequest extends FormRequest
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
            'name_ar' => '',
            'name_en' => 'required|max:100|',
            'details_ar' => '',
            'details_en' => 'required',
            'photo' => 'required',
            'icon' => 'required',
        ];
    }

    public function messages()
    {
        return [

            'photo.required' => __('messages.solutions image is required'),
            'icon.required' => __('messages.solutions image is required'),
            'name_en.required' => __('messages.solutions title is required'),
            'name_en.unique' => __('messages.title is found'),
            'details_ar.required' => __('messages.solutions details is required'),
            'details_en.required' => __('messages.solutions details is required'),
        ];
    }
}
