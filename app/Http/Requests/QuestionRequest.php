<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
         if (isset($this->id)) {
            return[
                'section_name' => 'required',
                'name'         => 'required|unique:questions,name,'.$this->id,
            ];
        }
        return [
            'section_name' => 'required',
            'name'         => 'required|unique:questions',
        ];
    }
}
