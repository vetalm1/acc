<?php

namespace App\Http\Controllers\CMS\Facility;

use App\Http\Controllers\CMS\Facility\Request\StoreFacilityRequest;
use App\Http\Controllers\CMS\Facility\Request\UpdateDeviceRequest;
use App\Http\Controllers\CMS\Facility\Request\UpdateFacilityRequest;
use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\User;
use Illuminate\Http\Request;


class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facility = Facility::all();

        return view('facility.index', ['facility' => $facility]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userList = User::all();

        return view('facility.create',['usersList'=>$userList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacilityRequest $request)
    {
        $data = $request->getFormData();
        Facility::create($data);

        return redirect(route('facility.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        return view('facility.show', ['facility' => $facility]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Facility $facility
     * @return \Illuminate\Http\Response
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
        $facility->update($formData);

        return redirect(route('facility.show', ['facility' => $facility]));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $object
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $object)
    {
        //
    }
}
