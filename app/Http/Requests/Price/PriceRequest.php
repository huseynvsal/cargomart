<?php

namespace App\Http\Requests\Price;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
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
            'price' => ['required','integer','min:0.1','max:10000'],
            'weight' => ['required','string','max:200'],
            'type' => ['required','string','min:5'],
            'country' => ['required','string','max:6']
        ];
    }

    public function messages()
    {
        return [
            'price.required'  => 'Qiymət daxil edilməyib!',
            'price.integer'  => 'Qiymət rəqəm olmalıdır!',
            'price.min'  => 'Qiymət çox kiçikdir! (0.1-10000)',
            'price.max'  => 'Qiymət çox böyükdür! (0.1-10000)',

            'weight.required'  => 'Çəki daxil edilməyib!',
            'weight.string'  => 'Çəki düzgün deyil!',
            'weight.max'  => 'Çəki çox uzundur! (Max: 200)',

            'type.required'  => 'Məhsul növü daxil edilməyib!',
            'type.string'  => 'Məhsul növü düzgün deyil!',
            'type.min'  => 'Məhsul növü daxil edilməyib!',

            'country.required'  => 'Ölkə daxil edilməyib!',
            'country.string'  => 'Ölkə düzgün deyil!',
            'country.max'  => 'Ölkə daxil edilməyib!',
        ];

    }
}
