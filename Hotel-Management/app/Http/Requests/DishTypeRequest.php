<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishTypeRequest extends FormRequest
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
          'label' => 'required|unique:dish_types'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
          'label.required' => 'The dish type label is required',
          'label.unique' => 'This dish type label has already been taken'
        ];
    }
}