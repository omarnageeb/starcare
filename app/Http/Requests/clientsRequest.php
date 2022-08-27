<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class clientsRequest extends FormRequest
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

            'description_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'photo.required' => __('messages.image is required'),
            'description_ar.required' => __('messages.client description is required'),
            'description_en.required' => __('messages.client description is required'),
        ];
    }
}
