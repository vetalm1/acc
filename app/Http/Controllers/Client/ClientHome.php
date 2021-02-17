<?php


namespace App\Http\Controllers\Client;


use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Support\Facades\Auth;

class ClientHome extends Controller
{

    public function index()
    {

        ( Auth::user() )
            ? $facility = Facility::where(['user_id' => Auth::user()->getAuthIdentifier()])->get()
            : $facility = Facility::all();

        return view('facility.client-home', ['facility' => $facility]);

    }

}