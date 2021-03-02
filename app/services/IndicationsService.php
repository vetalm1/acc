<?php


namespace App\services;


use App\Models\Indication;
use App\Models\LastIndication;

class IndicationsService
{

    const PAGINATE_QTI = 30;

    public function getAllIndications()
    {
        $indication = Indication::all();
        return $indication;
    }

    public function storeIndication($formData) //TODO сделать транзакцию
    {
        $createdIndication = Indication::create($formData);

        $lastIndication = LastIndication::where('device_id', $createdIndication->device_id)->first();
        $lastIndicationData = [
            'pre_last_indication' => $lastIndication->last_indication,
            'pre_last_date' => $lastIndication->updated_at,
            'last_indication' => $createdIndication->indication,
        ];
        $lastIndication->update($lastIndicationData);

        ( $createdIndication )
            ? $status = 'показание ('.$createdIndication->indication.'), добавлено'
            : $status = 'Ошибка добавления';

        return $status;
    }

    public function updateIndication($formData, $indication)  //TODO сделать транзакцию, добавить флеш сообщение об успешности
    {
        $indication->update($formData);

        $lastIndication = LastIndication::where('device_id', $indication->device_id)->first();
        $lastIndicationData = [
            'last_indication' => $indication->indication,
        ];
        $lastIndication->update($lastIndicationData);

        return $indication;
    }

}