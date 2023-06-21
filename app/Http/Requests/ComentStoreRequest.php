<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentStoreRequest extends FormRequest
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
            /* 'icon' => 'required|max:3072',
            'content' => 'required|min:10|max:100',
            'img' => 'required|max:3072',
            'surname' => 'required|min:4|max:30',
            'name' => 'required|min:3|max:30',
            'job' => 'required|min:5|max:30', */
        ];
    }
}