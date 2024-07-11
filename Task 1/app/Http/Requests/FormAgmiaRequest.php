<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAgmiaRequest extends FormRequest
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
            'username' => 'required|string|max:15',
            'email' => 'required|email',
            'rating' => 'required|numeric',
            'comment' => 'required|string',
        ];
    }
}
