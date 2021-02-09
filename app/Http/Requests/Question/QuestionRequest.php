<?php

namespace App\Http\Requests\Question;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question' => ['required','string','min:1','max:500'],
            'answer' => ['required','string','min:1','max:3000']
        ];
    }

    public function messages()
    {
        return [
            'question.required'  => 'Sual daxil edilməyib!',
            'question.string'  => 'Sual yanlışdır!',
            'question.min'  => 'Sual çox qısadır! (1-500)',
            'question.max'  => 'Sual çox uzundur! (1-500)',

            'answer.required'  => 'Cavab daxil edilməyib!',
            'answer.string'  => 'Cavab yanlışdır!',
            'answer.min'  => 'Cavab çox qısadır! (1-3000)',
            'answer.max'  => 'Cavab çox uzundur! (1-3000)',
        ];
    }
}
