<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class servicesRequest extends FormRequest
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
            'title_en' => 'required|max:100',
            'details_en' => 'required|max:200',
            'title_ar' => 'required|max:100',
            'details_ar' => 'required|max:200',
        ];
    }

    public function messages()
    {
        return [

            'photo.required' => __('messages.image is required'),
            'details_en.required' => __('messages.services details is required'),
            'details_ar.required' => __('messages.services details is required'),
            'title_en.required' => __('messages.services title is required'),
            'title_ar.required' => __('messages.services title is required'),
        ];
    }
}
