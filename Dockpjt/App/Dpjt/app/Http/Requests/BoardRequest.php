<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (route('boards.store') || route('boards.update')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'message' => 'required|max:140',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title is required.',
            'message.required' => 'Contens is required.',
            'message.max' => 'The description may not be greater than 140 characters.'
        ];
    }
}
