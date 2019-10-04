<?php

namespace App\Http\Requests\ContactForm;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
              'name' => ['required', new \App\Rules\MinimumWords(2)],
              'email' => ['required', 'email','regex:/(.*)go\.id|ac\.id|or\.id$/i'],
              'message' => ['required', 'min:20'],
              'kategori' => ['required'],
        ];
    }
}
