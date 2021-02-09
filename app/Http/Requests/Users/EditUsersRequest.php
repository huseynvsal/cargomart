<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class EditUsersRequest extends FormRequest
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
            'name' => ['required','string','min:1','max:150'],
            'surname' => ['required','string','min:1','max:150'],
            'email' => ['required','string','min:1','max:300'],
            'password' => ['string'],
            'series' => ['required','string','max:6'],
            'number' => ['required','string','min:8','max:8'],
            'fin' => ['required','string','min:7','max:7'],
            'phone' => ['required','string','min:10','max:10'],
            'city' => ['required','string'],
            'address' => ['required','string','min:1','max:300'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'Ad daxil edilməyib!',
            'name.string'  => 'Ad yanlışdır!',
            'name.min'  => 'Ad çox qısadır! (1-150)',
            'name.max'  => 'Ad çox uzundur! (1-150)',

            'surname.required'  => 'Soy ad daxil edilməyib!',
            'surname.string'  => 'Soy ad yanlışdır!',
            'surname.min'  => 'Soy ad çox qısadır! (1-150)',
            'surname.max'  => 'Soy ad çox uzundur! (1-150)',

            'email.required'  => 'Email daxil edilməyib!',
            'email.string'  => 'Email yanlışdır!',
            'email.min'  => 'Email çox qısadır! (1-300)',
            'email.max'  => 'Email çox uzundur! (1-300)',

            'password.string'  => 'Şifrə yanlışdır!',
            'password.min'  => 'Şifrə çox qısadır! (Min: 8)',

            'series.required'  => 'Seriya daxil edilməyib!',
            'series.string'  => 'Seriya yanlışdır!',

            'number.required'  => 'Seriya nömrəsi daxil edilməyib!',
            'number.string'  => 'Seriya nömrəsi yanlışdır!',
            'number.min'  => 'Seriya nömrəsi 8 rəqəmdən ibarət olmalıdır!',
            'number.max'  => 'Seriya nömrəsi 8 rəqəmdən ibarət olmalıdır!',

            'fin.required'  => 'Fin kod daxil edilməyib!',
            'fin.string'  => 'Fin kod yanlışdır!',
            'fin.min'  => 'Fin kod 7 elementdən ibarət olmalıdır!',
            'fin.max'  => 'Fin kod 7 elementdən ibarət olmalıdır!',

            'phone.required'  => 'Telefon nömrəsi daxil edilməyib!',
            'phone.string'  => 'Telefon nömrəsi yanlışdır!',
            'phone.min'  => 'Telefon nömrəsi 10 elementdən ibarət olmalıdır!',
            'phone.max'  => 'Telefon nömrəsi 10 elementdən ibarət olmalıdır!',

            'city.required'  => 'Şəhər daxil edilməyib!',
            'city.string'  => 'Şəhər yanlışdır!',

            'address.required'  => 'Ünvan daxil edilməyib!',
            'address.string'  => 'Ünvan yanlışdır!',
            'address.min'  => 'Ünvan çox qısadır! (1-300)',
            'address.max'  => 'Ünvan çox uzundur! (1-300)',
        ];
    }
}
