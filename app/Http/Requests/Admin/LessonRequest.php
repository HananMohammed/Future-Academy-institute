<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
             "lesson" => "required|array|max:2",
             "lesson.*" => "required|string|max:255",
             "doctor_name" => "required|array|max:2",
             "doctor_name.*" => "required|string|max:255",
             "time" => "required",
        ];
    }
    /**
     * Get the validation error messages.
     *
     * @return array
     */
    public function messages()
    {
        return[
            'lesson.0.required' => 'The lesson-en field is required.',
            'lesson.1.required' => 'The lesson-ar field is required.',
            'lesson.0.string' => 'The lesson-en field must be of type string.',
            'lesson.1.string' => 'The lesson-ar field must be of type string.',
            'lesson.0.max' => 'The lesson-ar field max length is 255 .',
            'lesson.1.max' => 'The lesson-ar field max length is 255 .',
            'doctor_name.0.required' => 'The doctor name_en field is required.',
            'doctor_name.1.required' => 'The doctor name_ar field is required.',
            'doctor_name.0.string' => 'The doctor name_en  field must be of type string.',
            'doctor_name.1.string' => 'The doctor name_ar field must be of type string.',
            'doctor_name.0.max' => 'The doctor name_ar field max length is 255 .',
            'time.required' => 'The time field is required.',
            'time.date_format' => 'The time format not valid.',

            1        ];
    }
}
