<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Http;
use App\Models\Mdt;

class AttendanceController extends Controller
{

    public function startEnd(Request $request){

        $startDate = (string) $request->input('startDate');
        $endDate = (string) $request->input('endDate');

        $startDate .= " 00:00:00";
        $endDate .= " 00:00:00";

        $this->index($startDate,$endDate);
        return redirect()->back();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($startDate = "",$endDate = "")
    {
	    $title = 'Attendance';

        $today = date("Y-m-d H:i:s");

        // $date = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - $downCount, date('Y')));

        $Count = Http::post("http://10.214.59.9:8080/api/v1/face/getAttendRecordCount",[

            'startTime' => "2021-09-20 10:00:00",
            'endTime' =>$today,
            'startId' => 0
        ]);
        dd($Count);
        $DataCount = $Count->object();

        $mdtURL = "http://10.214.59.9:8080/api/v1/face/queryAttendRecord";
        $response = Http::post($mdtURL,[

            'startId' => $DataCount->startId,
            'reqCount' =>$DataCount->totalCount,
            'needImg' => false
        ]);
        $data = $response->object();
        $attedences = $data->data;

	    return view('admin.attendance.index',compact('title'))->with('attendances', $attedences);

    }
}
