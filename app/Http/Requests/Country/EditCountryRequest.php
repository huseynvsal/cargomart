<?php

namespace App\Http\Requests\Country;

use Illuminate\Foundation\Http\FormRequest;

class EditCountryRequest extends FormRequest
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
            'new_country' => ['required','string','min:1','max:200'],
            'new_flag' => ['file','max:10000'],
        ];
    }

    public function messages()
    {
        return [
            'new_country.required'  => 'Ölkə daxil edilməyib!',
            'new_country.string'  => 'Ölkə yanlışdır!',
            'new_country.min'  => 'Ölkə çox qısadır! (1-200)',
            'new_country.max'  => 'Ölkə çox uzundur! (1-200)',

            'new_flag.file'  => 'Bayraq şəkli yanlışdır!',
            'new_flag.max'  => 'Bayraq şəkli çox böyükdür! (Max: 10mb)',
        ];

    }
}
