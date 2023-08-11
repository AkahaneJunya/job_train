<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewcomerUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],

            'entering_date' => ['required'],
        ];
    }
}
