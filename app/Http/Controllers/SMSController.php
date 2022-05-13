<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class SMSController extends Controller
{
    public function send( ){

        $today = date("Y-m-d H:i:s");
        $count = Http::post("http://cmsv6.mobilevideosystems.net/api/v1/face/getAttendRecordCount",[

            'startTime' => "2021-09-20 10:00:00",

            'endTime' =>$today,

            'startId' => 0
        ]);

        $DataCount = $count->object();

        dd($DataCount);




        $response= Http::post("http://cmsv6.mobilevideosystems.net/api/v1/face/queryAttendRecord",[
            'startId' => $DataCount->startId,
            'reqCount' =>$DataCount->totalCount,
            'needImg' => false
        ]);

        dd($response->json());




    }
}
