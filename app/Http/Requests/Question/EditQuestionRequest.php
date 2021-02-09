<?php

namespace App\Http\Requests\Question;

use Illuminate\Foundation\Http\FormRequest;

class EditQuestionRequest extends FormRequest
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
            'new_question' => ['required','string','min:1','max:500'],
            'new_answer' => ['required','string','min:1','max:3000']
        ];
    }

    public function messages()
    {
        return [
            'new_question.required'  => 'Sual daxil edilməyib!',
            'new_question.string'  => 'Sual yanlışdır!',
            'new_question.min'  => 'Sual çox qısadır! (1-500)',
            'new_question.max'  => 'Sual çox uzundur! (1-500)',

            'new_answer.required'  => 'Cavab daxil edilməyib!',
            'new_answer.string'  => 'Cavab yanlışdır!',
            'new_answer.min'  => 'Cavab çox qısadır! (1-3000)',
            'new_answer.max'  => 'Cavab çox uzundur! (1-3000)',
        ];
    }
}
