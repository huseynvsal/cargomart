<?php

namespace App\Http\Requests\Country;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
            'country' => ['required','string','min:1','max:200'],
            'flag' => ['required','file','max:10000'],
        ];
    }

    public function messages()
    {
        return [
            'country.required'  => 'Ölkə daxil edilməyib!',
            'country.string'  => 'Ölkə yanlışdır!',
            'country.min'  => 'Ölkə çox qısadır! (1-200)',
            'country.max'  => 'Ölkə çox uzundur! (1-200)',

            'flag.required'  => 'Bayraq şəkli daxil edilməyib!',
            'flag.file'  => 'Bayraq şəkli yanlışdır!',
            'flag.max'  => 'Bayraq şəkli çox böyükdür! (Max: 10mb)',
        ];

    }
}
