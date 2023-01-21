<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionUploadRequest extends FormRequest
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
            'institution' => 'string|required',
            'user_id' => 'string|required',
            'courseTitle' => 'string|required',
            'courseCode' => 'string|required',
            'examName' => 'string|required',
            'question.*' => 'required|distinct|mimes:jpeg,png,jpg,svg,pdf,doc|max:50120',
            'solution.*' => 'nullable|distinct|mimes:jpeg,png,jpg,svg,pdf,doc|max:50120'
        ];
    }
}
