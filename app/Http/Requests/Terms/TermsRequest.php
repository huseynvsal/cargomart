<?php

namespace App\Http\Requests\Terms;

use Illuminate\Foundation\Http\FormRequest;

class TermsRequest extends FormRequest
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
            'mycontent' => ['required','string','min:200','max:10000']
        ];
    }

    public function messages()
    {
        return [
            'mycontent.required'  => 'Mətn daxil edilməyib!',
            'mycontent.string'  => 'Mətn yanlışdır!',
            'mycontent.min'  => 'Mətn çox qısadır! (200-10000)',
            'mycontent.max'  => 'Mətn çox uzundur! (200-100000)',
        ];

    }
}
