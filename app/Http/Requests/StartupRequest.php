<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StartupRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required','string'],
            'description' => ['required','string'],
            'direction_id' => ['required','integer'],
            'members' => ['required','integer'],
            'model_id' => ['required','integer'],
            'file' => ['required','file'],
            'sales' => ['required','string'],
            'link' => ['required','string'],
            'full_name' => ['required','string'],
            'role' => ['required','string'],
            'age' => ['required','integer'],
            'duration' => ['required','string'],
            'phone' => ['required','string'],
            'telegram' => ['required','string'],
            'email' => ['required','string'],
            'resources' => ['required','array'],
            'resource_description' => ['required','string'],
            'social_id' => ['required', 'integer']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

}
