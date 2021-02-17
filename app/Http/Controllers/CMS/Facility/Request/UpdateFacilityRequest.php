<?php


namespace App\Http\Controllers\CMS\Facility\Request;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class UpdateFacilityRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'address' => 'required|max:30',
            'town' => 'required|max:30',
            'user_id' => 'required',
            'status' => 'required|boolean',
        ];
    }

    public function getFormData()
    {
        $data = $this->request->all();

        $data = Arr::except($data, ['_token',]);
        return $data;
    }

}