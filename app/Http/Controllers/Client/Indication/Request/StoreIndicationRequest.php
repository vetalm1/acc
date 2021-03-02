<?php


namespace App\Http\Controllers\Client\Indication\Request;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class StoreIndicationRequest extends FormRequest
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
//        $trimData = $this->request->only('indication','user_id', 'facility_id', 'device_id');

        $data = $this->request->all();

        $data = Arr::except($data, ['_token',]);
        return $data;
    }

}