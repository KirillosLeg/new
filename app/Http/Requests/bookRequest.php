<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class bookRequest extends Request
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

        'title'         => 'required|max:150',
        'author'        => 'required|max:100',
        'year'          => 'numeric',
        'description'   => 'required|max:2000',
        'image'         => 'image|mimes:jpeg,jpg,png,gif|max:500'
        ];
    }
}
