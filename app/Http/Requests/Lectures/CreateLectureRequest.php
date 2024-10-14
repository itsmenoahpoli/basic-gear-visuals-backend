<?php

namespace App\Http\Requests\Lectures;

use Illuminate\Foundation\Http\FormRequest;

class CreateLectureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'subject_id'    => 'required|int',
            'title'         => 'required|string',
            'description'   => 'required|string',
            'file'          => 'nullable|file'
        ];
    }
}
