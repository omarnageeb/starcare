<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class aboutClientsRequest extends FormRequest
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
            'title_ar' => 'required',
            'details_en' => 'required|max:150|',
            'details_ar' => 'required|max:150|',
        ];
    }

    public function messages()
    {
        return [

            'photo.required' => __('messages.image is required'),
            'details_ar.required' => __('messages.about us is required'),
            'details_en.required' => __('messages.about us details is required'),
        ];
    }
}
