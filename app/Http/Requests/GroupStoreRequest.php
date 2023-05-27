<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupStoreRequest extends FormRequest
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
            'image' => 'required|max:3072|mimes:png,jpg',
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:10|max:100',
            'age' => 'required|max:5',
            'seat' => 'required|max:5',
            'time' => 'required|max:15',
            'payment' => 'required|max:15',
        ];
    }

    public function messages()
    {
        return[
            'image.required' => 'Rasm joylanishi shart !',
            'image.max' => 'Rasm hajmi 3 mb dan oshmasligi kerak !',
            'image.mimes' => 'Rasm png yoki jpg bolishi kerak !',
        ];
    }
}
