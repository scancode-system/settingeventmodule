<?php

namespace Modules\SettingEvent\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PastEventRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'title' => 'required|string|max:255',
            'total' => 'required|numeric|min:0|max:999999999|regex:/^\d+(\.\d{1,2})?$/'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
