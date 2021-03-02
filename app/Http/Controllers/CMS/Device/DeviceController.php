<?php

namespace App\Http\Controllers\CMS\Device;

use App\Http\Controllers\CMS\Device\Request\StoreDeviceRequest;
use App\Http\Controllers\CMS\Device\Request\UpdateDeviceRequest;
use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Facility;
use App\services\DevicesService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeviceController extends Controller
{

    /**
     * @var DevicesService
     */
    private $devicesService;

    public function __construct(DevicesService $devicesService)
    {
        $this->devicesService = $devicesService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $device = $this->devicesService->getAllDevices();

        return view('device.index', ['device' => $device]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $facility = Facility::find($request->device);

        return view('device.create',['facility'=>$facility]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDeviceRequest $request
     * @return Response
     */
    public function store(StoreDeviceRequest $request)
    {
        $formData = $request->getFormData();

        $status = $this->devicesService->storeDevice($formData);

        return redirect()->back()->with('status', $status);
    }

    /**
     * Display the specified resource.
     *
     * @param Device $device
     * @return Response
     */
    public function show(Device $device)
    {
        return view('device.show', ['device' => $device]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Device $device
     * @return Response
     */
    public function edit(Device $device)
    {
        return view('device.edit', ['device' => $device]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDeviceRequest $request
     * @param Device $device
     * @return Response
     */
    public function update(UpdateDeviceRequest $request, Device $device)
    {
        $formData = $request->getFormData();
        $device = $this->devicesService->updateDevice($formData, $device);

        return redirect(route('device.show', ['device' => $device]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Device $device
     * @return Response
     */
    public function destroy(Device $device)
    {
        //
    }
}
