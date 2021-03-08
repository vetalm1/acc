<?php


namespace App\Http\Controllers\CMS;


use App\Models\Device;
use App\Models\Facility;
use App\services\FacilitiesService;
use Illuminate\Http\Request;

class CmsController
{

    private $facilitiesService;

    public function __construct(FacilitiesService $facilitiesService)
    {

        $this->facilitiesService = $facilitiesService;
    }

    public function index()
    {
        return view('cms.cms');
    }

    public function facilityList()
    {
        $facility = $this->facilitiesService->getAllFacilities();

        return view('facility.cms', ['facility' => $facility]);
    }

    public function facility(Facility $facility)
    {
        return view('facility.cms-show', ['facility' => $facility]);
    }

    public function device(Device $device)
    {
        return view('device.cms-show', ['device' => $device]);
    }

    public function createDevice(Request $request)
    {
        $facility = Facility::find($request->device);

        return view('device.cms-create',['facility'=>$facility]);
    }
}