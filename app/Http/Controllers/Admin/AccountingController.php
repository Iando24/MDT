<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class AccountingController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


	    $title = 'Video preview';

        $today = date("Y-m-d H:i:s");

        // $date = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - $downCount, date('Y')));

        // $Count = Http::post("http://10.214.59.9:8080/api/v1/face/getAttendRecordCount",[

        //     'startTime' => "2021-09-20 10:00:00",

        //     'endTime' =>$today,

        //     'startId' => 0
        // ]);
        // $DataCount = $Count->object();

        // $result = Http::post("http://10.214.59.9:8080/api/v1/face/queryAttendRecord",[
        //     'startId' => 0,
        //     'reqCount' =>$DataCount->totalCount,
        //     'needImg' => true
        // ]);

        // $conv = $result->object();

        // $captures= $conv->data;

        // Take a snapshot of a camera
     //    $mdtURL = "http://10.215.222.234:8080/api/v1/image/snapshotMain";

     //    $response = Http::post($mdtURL,[
     //         'CameraId' => 0
     //    ]);
     //    $data = array();
     //    $data = $response->body();

     //    $json = json_decode($data);

     //    $attedences = $json->data;

     //    $image = $attedences->image;

     //    $data = Http::post("http://10.215.222.234:8080/api/v1/face/querySnapFace");
     //    $conv = $data->object();
     //    $captures = $conv->data->captures;

	    return view('admin.accounting.index',compact('title'));
    }

}
