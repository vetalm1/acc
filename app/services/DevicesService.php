<?php


namespace App\services;


use App\Models\Device;
use App\Models\LastIndication;

class DevicesService
{

    public function getAllDevices()
    {
        $device = Device::all();

        return $device;
    }

    public function storeDevice($formData)
    {
        $createdDevice = Device::create($formData);

        $lastIndicationData = ['device_id' => $createdDevice->id];

        $createdLastIndication = LastIndication::create($lastIndicationData);

        ( $createdDevice && $createdLastIndication )
            ? $status = 'прибор № - '.$createdDevice->number.', добавлен'
            : $status = 'Ошибка добавления';

        return $status;
    }

    public function updateDevice($formData, $device)
    {
        $device->update($formData);

        return $device;
    }

}