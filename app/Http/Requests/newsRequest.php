<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class newsRequest extends FormRequest
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
            'name_ar' => 'required|max:100|',
            'name_en' => 'required|max:100|',
            'details_ar' => 'required',
            'details_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'photo.unique' => __('messages.image is required'),
            'name_en.required' => __('messages.news name is required'),
            'name_ar.required' => __('messages.news name is required'),
            'details_en.required' => __('messages.solutions details is required'),
            'details_ar.required' => __('messages.solutions details is required'),
        ];
    }
}
