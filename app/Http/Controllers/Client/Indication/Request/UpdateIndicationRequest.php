<?php

namespace App\Http\Controllers\Client\Indication\Request;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class UpdateIndicationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'indication' => 'required|max:10'
        ];
    }

    public function getFormData()
    {
        $data = $this->request->all();

        $data = Arr::except($data, ['_token',]);
        return $data;
    }

}