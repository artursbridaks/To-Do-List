<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateToDoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'text' => ['required', 'min:3']
        ];
    }
}
