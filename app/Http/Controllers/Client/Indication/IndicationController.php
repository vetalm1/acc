<?php

namespace App\Http\Controllers\Client\Indication;


use App\Http\Controllers\Client\Indication\Request\StoreIndicationRequest;
use App\Http\Controllers\Client\Indication\Request\UpdateIndicationRequest;
use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\Indication;
use Illuminate\Http\Request;

class IndicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indication = Indication::all();

        return view('indication.index', ['indication' => $indication]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $device = Device::find($request->id);

        return view('indication.create',['device'=>$device]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIndicationRequest $request)
    {
        $data = $request->getFormData();
        $createdIndication = Indication::create($data);

        ( $createdIndication )
            ? $status = 'показание ('.$createdIndication->indication.'), добавлено'
            : $status = 'Ошибка добавления';

        return redirect()->back()->with('status', $status);
        //return redirect(route('indication.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Indication  $indication
     * @return \Illuminate\Http\Response
     */
    public function show(Indication $indication)
    {
        return view('indication.show', ['indication' => $indication]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Indication  $indication
     * @return \Illuminate\Http\Response
     */
    public function edit(Indication $indication)
    {
        return view('indication.edit', ['indication' => $indication]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Indication  $indication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIndicationRequest $request, Indication $indication)
    {
        $formData = $request->getFormData();
        $indication->update($formData);

        return redirect(route('indication.show', ['indication' => $indication]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indication  $indication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indication $indication)
    {
        //
    }
}
