<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'link' => ['required','string','min:1','max:1000'],
            'image' => ['required','file','max:10000'],
        ];
    }

    public function messages()
    {
        return [
            'link.required'  => 'Veb sayt linki daxil edilməyib!',
            'link.string'  => 'Veb sayt linki yanlışdır!',
            'link.min'  => 'Veb sayt linki çox qısadır! (1-1000)',
            'link.max'  => 'Veb sayt linki çox uzundur! (1-1000)',

            'image.required'  => 'Logo daxil edilməyib!',
            'image.file'  => 'Logo yanlışdır!',
            'image.max'  => 'Logo çox böyükdür! (Max: 10mb)',
        ];
    }
}
