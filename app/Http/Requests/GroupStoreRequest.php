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
            'icon' => 'required|max:2048|mimes:png,jpg',
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:15|max:100',
            'age' => 'required|max:15',
            'seat' => 'required|max:15',
            'time' => 'required|max:15',
            'payment' => 'required|max:15',
        ];
    }

    public function messages()
    {
        return[
            'icon.required' => 'Rasm joylanishi shart !',
            'icon.max' => 'Rasm hajmi 2 mb dan oshmasligi kerak !',
            'icon.mimes' => 'Rasm png yoki jpg bolishi kerak !',
        ];
    }
}
