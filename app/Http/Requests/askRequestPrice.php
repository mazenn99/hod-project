<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class askRequestPrice extends FormRequest
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
            'name' => 'required|string|max:200',
            'image' => 'required|mimes:jpg,png,jpeg,pdf',
            'number' => 'required|integer',
            'city'   => 'required|string|max:200',
            'phone'  => 'required|string|max:20',
            'job'    => 'required|string|max:100',
            'description' => 'nullable|string|max:1000'
        ];
    }
}
