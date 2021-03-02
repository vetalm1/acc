<?php


namespace App\services;


use App\Models\Facility;

class FacilitiesService
{

    public function getAllFacilities()
    {
        $facility = Facility::all();
        return $facility;
    }

    public function storeFacility($formData)
    {
       $facility = Facility::create($formData);

//        ( $facility )
//            ? $status = 'Объект ('.$facility->address.'), добавлен'
//            : $status = 'Ошибка добавления';

        return $facility;
    }

    public function updateFacility($formData, $facility)
    {
        $facility->update($formData);
        return $facility;
    }
}