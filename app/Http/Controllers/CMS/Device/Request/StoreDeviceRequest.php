<?php


namespace App\Http\Controllers\CMS\Device\Request;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class StoreDeviceRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'number' => 'required|max:30',
            'type' => 'required|max:15',
            'location' => 'required|max:250',
            'status' => 'required|boolean',
            'ratio' => 'required',
            'note' => 'max:250',
            'acc_type' => 'required|max:10',
        ];
    }

    public function getFormData()
    {
        $data = $this->request->all();

        $data = Arr::except($data, ['_token',]);
        return $data;
    }

}