<?php

namespace App\Http\Controllers\Client\Indication;


use App\Http\Controllers\Client\Indication\Request\StoreIndicationRequest;
use App\Http\Controllers\Client\Indication\Request\UpdateIndicationRequest;
use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Indication;
use App\services\IndicationsService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndicationController extends Controller
{

    /**
     * @var IndicationsService
     */
    private $indicationsService;

    public function __construct(IndicationsService $indicationsService)
    {
        $this->indicationsService = $indicationsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indication = $this->indicationsService->getAllIndications();

        return view('indication.index', ['indication' => $indication]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $device = Device::find($request->id);

        return view('indication.create',['device'=>$device]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreIndicationRequest $request)
    {
        $formData = $request->getFormData();

        $status = $this->indicationsService->storeIndication($formData);

        return redirect()->back()->with('status', $status);
    }

    /**
     * Display the specified resource.
     *
     * @param Indication $indication
     * @return Response
     */
    public function show(Indication $indication)
    {
        return view('indication.show', ['indication' => $indication]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Indication $indication
     * @return Response
     */
    public function edit(Indication $indication)
    {
        return view('indication.edit', ['indication' => $indication]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateIndicationRequest $request
     * @param Indication $indication
     * @return Response
     */
    public function update(UpdateIndicationRequest $request, Indication $indication)
    {
        $formData = $request->getFormData();

        $indication = $this->indicationsService->updateIndication($formData, $indication);

        return redirect(route('device.show', ['device' => $indication->device_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Indication $indication
     * @return void
     */
    public function destroy(Indication $indication)
    {
        //
    }
}
