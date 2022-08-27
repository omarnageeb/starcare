<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class sliderRequest extends FormRequest
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
            'description_en' => 'required|max:100|',
            'description_ar' => 'required|max:100|',
        ];
    }

    public function messages()
    {
        return [
            'photo.required' => __('messages. image is required'),
            'description_en.required' => __('messages. description is required'),
            'description_ar.required' => __('messages. description is required'),
            'description_en.max:100' => __('messages. description is max 100 length'),
            'description_ar.max:100' => __('messages. description is max 100 length'),
        ];
    }
}
