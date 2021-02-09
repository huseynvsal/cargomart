<?php

namespace App\Http\Requests\Price;

use Illuminate\Foundation\Http\FormRequest;

class EditPriceRequest extends FormRequest
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
            'new_price' => ['required','integer','min:0.1','max:10000'],
            'new_weight' => ['required','string','max:200'],
            'new_type' => ['string'],
            'new_country' => ['string']
        ];
    }

    public function messages()
    {
        return [
            'new_price.required'  => 'Qiymət daxil edilməyib!',
            'new_price.integer'  => 'Qiymət rəqəm olmalıdır!',
            'new_price.min'  => 'Qiymət çox kiçikdir! (0.1-10000)',
            'new_price.max'  => 'Qiymət çox böyükdür! (0.1-10000)',

            'new_weight.required'  => 'Çəki daxil edilməyib!',
            'new_weight.string'  => 'Çəki düzgün deyil!',
            'new_weight.max'  => 'Çəki çox uzundur! (Max: 200)',

            'new_type.string'  => 'Məhsul növü düzgün deyil!',

            'new_country.string'  => 'Ölkə düzgün deyil!',
        ];

    }
}
