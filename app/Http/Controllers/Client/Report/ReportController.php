<?php


namespace App\Http\Controllers\Client\Report;


use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;


class ReportController extends Controller
{

    public function main(Request $request)
    {

        $facility = Facility::find($request->facility);

        return view('reports.reports', ['facility' => $facility]);
    }

}