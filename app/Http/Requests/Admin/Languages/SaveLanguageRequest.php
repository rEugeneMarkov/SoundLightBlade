<?php

namespace App\Http\Requests\Admin\Languages;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SaveLanguageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $unique = Rule::unique('languages')
            ->ignore($this->route('language'));

        return [
            'id' => ['required', 'string', 'max:10', $unique],
            'name' => ['required', 'string', 'max:50'],
            'active' => ['nullable', 'boolean'],
            'default' => ['nullable', 'boolean'],
            'fallback' => ['nullable', 'boolean'],
            'date_format' => ['nullable', 'string'],
        ];
    }
}
