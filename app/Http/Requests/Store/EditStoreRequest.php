<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

class EditStoreRequest extends FormRequest
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
            'new_link' => ['required','string','min:1','max:1000'],
            'new_image' => ['file','max:10000'],
        ];
    }

    public function messages()
    {
        return [
            'new_link.required'  => 'Veb sayt linki daxil edilməyib!',
            'new_link.string'  => 'Veb sayt linki yanlışdır!',
            'new_link.min'  => 'Veb sayt linki çox qısadır! (1-1000)',
            'new_link.max'  => 'Veb sayt linki çox uzundur! (1-1000)',

            'new_image.file'  => 'Logo yanlışdır!',
            'new_image.max'  => 'Logo çox böyükdür! (Max: 10mb)',
        ];
    }
}
