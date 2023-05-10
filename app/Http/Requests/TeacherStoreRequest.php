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
            'icon' => 'required|max:2048',
            'tgram' => 'required|max:20',
            'fbook' => 'required|max:20',
            'insta' => 'required|max:20',
            'surname' => 'required|min:3|max:15',
            'name' => 'required|min:3|max:15',
            'subject' => 'required|min:5|max:15',
        ];
    }

    public function messages()
    {
        return[
            'icon.required' => 'Rasm joylanishi shart',
            'icon.max' => 'Rasm hajmi 2mb dan oshmasligi kerak',
            'tgram.max' => 'Oyna toldirilishi shart',
        ];
    }
}
