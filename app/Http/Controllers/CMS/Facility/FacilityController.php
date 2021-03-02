<?php

namespace App\Http\Controllers\CMS\Facility;

use App\Http\Controllers\CMS\Facility\Request\StoreFacilityRequest;
use App\Http\Controllers\CMS\Facility\Request\UpdateDeviceRequest;
use App\Http\Controllers\CMS\Facility\Request\UpdateFacilityRequest;
use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Facility;
use App\Models\Indication;
use App\Models\LastIndication;
use App\Models\User;
use App\services\FacilitiesService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class FacilityController extends Controller
{
    /**
     * @var FacilitiesService
     */
    private $facilitiesService;

    public function __construct(FacilitiesService $facilitiesService)
    {
        $this->facilitiesService = $facilitiesService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $facility = $this->facilitiesService->getAllFacilities();

        return view('facility.index', ['facility' => $facility]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $userList = User::all();

        return view('facility.create',['usersList'=>$userList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFacilityRequest $request
     * @return Response
     */
    public function store(StoreFacilityRequest $request)
    {
        $formData = $request->getFormData();
        $facility = $this->facilitiesService->storeFacility($formData);

        return view('facility.show', ['facility' => $facility]);
    }

    /**
     * Display the specified resource.
     *
     * @param Facility $facility
     * @return Response
     */
    public function show(Facility $facility)
    {
        return view('facility.show', ['facility' => $facility]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Facility $facility
     * @return Response
     */
    public function edit(Facility $facility)
    {
        return view('facility.edit', ['facility' => $facility]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFacilityRequest $request
     * @param Facility $facility
     * @return void
     */
    public function update(UpdateFacilityRequest $request, Facility $facility)
    {
        $formData = $request->getFormData();

        $facility = $this->facilitiesService->updateFacility($formData, $facility);

        return redirect(route('facility.show', ['facility' => $facility]));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Facility $object
     * @return Response
     */
    public function destroy(Facility $object)
    {
        //
    }
}
