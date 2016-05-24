<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OffreRequest extends Request
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
            'rue'        => 'required',
            'ville'          => 'required',
            'codepostal'           => 'required',
            'pays'       => 'required',
            'prix'         => 'required',
            'description'   => 'required'
        ];
    }
}
