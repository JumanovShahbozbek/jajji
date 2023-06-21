<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
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
            /* 'image' => 'required|max:3072',
            'tgram' => 'required|max:20',
            'fbook' => 'required|max:20',
            'insta' => 'required|max:20',            
            'name' => 'required|min:2|max:40',
            'job' => 'required|min:2|max:25', */
        ];
    }

    public function messages()
    {
        return[
            /* 'image.required' => 'Rasm joylanishi shart',
            'image.max' => 'Rasm hajmi 3 mb dan oshmasligi kerak',
            'tgram.max' => 'Oyna toldirilishi shart', */
        ];
    }    
}
