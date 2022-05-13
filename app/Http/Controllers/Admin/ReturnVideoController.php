<?php

    namespace App\Http\Controllers\Admin;

    use Illuminate\Support\Facades\Http;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Arr;

    class ReturnVideoController extends Controller
    {
        public function returnVideo()
        {
            $curl = curl_init();

            $method = "POST";
          
            $url = "http://10.211.28.174:8080/api/v1/face/snapshotSub";
            $data = array(
                "CameraId" => 0
            );
            $payload = json_encode($data);

            // Optional Authentication:
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

            // Set HTTP Header for POST request
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($payload))
            );

            $result = curl_exec($curl);

            curl_close($curl);

            return $result;
        }
    }