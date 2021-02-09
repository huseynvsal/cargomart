<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class EditOrderRequest extends FormRequest
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
            'storage' => ['required','string'],
            'website' => ['required','string'],
            'track' => ['required','string'],
            'category' => ['required','string'],
            'count' => ['required','integer','min: 1','max:300'],
            'price' => ['required','integer','min:0.1','max:125000'],
            'currency' => ['required','string'],
            'information' => ['required','string','min:10','max:1000']
        ];
    }

    public function messages()
    {
        return [
            'storage.required'  => 'Anbar daxil edilməyib!',
            'storage.string'  => 'Anbar yanlışdır!',

            'website.required'  => 'Link daxil edilməyib!',
            'website.string'  => 'Link yanlışdır!',

            'track.required'  => 'Trek nömrə daxil edilməyib!',
            'track.string'  => 'Trek nömrə yanlışdır!',

            'category.required'  => 'Şifrə daxil edilməyib!',
            'category.string'  => 'Şifrə yanlışdır!',

            'count.required'  => 'Məhsul sayı daxil edilməyib!',
            'count.string'  => 'Məhsul sayı yanlışdır!',
            'count.min'  => 'Məhsul sayı çox kiçikdir! (1-300)',
            'count.max'  => 'Məhsul sayı çox böyükdür! (1-300)',

            'price.required'  => 'Qiymət daxil edilməyib!',
            'price.string'  => 'Qiymət yanlışdır!',
            'price.min'  => 'Qiymət çox kiçikdir!',
            'price.max'  => 'Qiymət çox böyükdür!',

            'currency.required'  => 'Fin kod daxil edilməyib!',
            'currency.string'  => 'Fin kod yanlışdır!',

            'information.required'  => 'Qeyd daxil edilməyib!',
            'information.string'  => 'Qeyd yanlışdır!',
            'information.min'  => 'Qeyd çox qısadır! (10-1000)',
            'information.max'  => 'Qeyd çox uzundur! (10-1000)'
        ];
    }
}
