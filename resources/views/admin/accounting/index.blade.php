@extends('admin.layouts.master')
@section('title',$title)
@section('content')

    <div class="container-fluid">
       <div class="row">
           <div class="col-md-10">
            <div style="margin: 20px">
                <ul class="nav nav-pills">
                    <li class="nav-item active">
                      <a class="nav-link"  role="button" href="#">MDTS Selection</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" role="button" href="#">Settings</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        camera view
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">8 camera</a>
                        <a class="dropdown-item" href="#">4 camera</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">1 camera</a>
                      </div>
                    </li>

                  </ul>
               </div>
               <div class="row">
                 <div class="col-sm-9">
                  <h3>Video capture</h3>
                  <img class="rounded"  alt=""  width="auto" height="500px">
                 </div>
                 <div class="col-sm-3">
                   <h3>Face capture</h3>
                   <div id="snapshot">

                   </div>
                 </div>
               </div>
            {{--<div class="row">

                <div class="col-md-6">

                    <video width="600px" height="300px" controls>
                        <source src="" type="video/mp4">
                        <source src="" type="video/ogg">
                      Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-6">
                    <video width="600px" height="300px" controls>
                        <source src="" type="video/mp4">
                        <source src="" type="video/ogg">
                      Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <video width="600px" height="300px" controls>
                        <source src="" type="video/mp4">
                        <source src="" type="video/ogg">
                      Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-6">
                    <video width="600px" height="300px" controls>
                        <source src="" type="video/mp4">
                        <source src="" type="video/ogg">
                      Your browser does not support the video tag.
                    </video>
                </div>
            </div> --}}

           </div>

       </div>
    </div>
    <style>
        .vertical-scrollable> .row {

            max-height: 60vh;

            overflow-y: scroll;
            overflow-x:hidden;
          }
        .mb-5{
            margin-left:10px;
        }

    </style>
    <script  src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script  src="https://cdn.jsdelivr.net/npm/@ffmpeg/ffmpeg@0.10.1/dist/ffmpeg.min.js"></script>
    <script type="text/javascript">
      const { createFFmpeg } = FFmpeg;
      // setInterval(function () {

      //   $.ajax({
      //     type: "GET",
      //     url: "http://127.0.0.1:8000/admin/returnsnapshot",
      //     success: (data) => {
      //       var result = JSON.parse(data)
      //       console.log(result.data.captures.length)
      //       if(result.data.captures.length != 0){
      //         var img = document.createElement('img');
      //         img.style.width = "150px";
      //         img.style.height = "150px";
      //         for(var i = 0; i < result.data.captures.length; i++){
      //           img.src = result.data.captures[i].faces[0].image
      //           document.getElementById('snapshot').appendChild(img);
      //         }
      //       }else{
      //         var img = document.getElementsByTagName('img');
      //         document.getElementById('snapshot').innerHTML = '';
      //       }
      //     }
      //   })

      // }, 5000);

      // setInterval(function () {
      //   $.ajax({
      //     type: "GET",
      //     url: "http://127.0.0.1:8000/admin/returnvideo",
      //     success: (data) => {
      //       var result = JSON.parse(data)
      //       $(".rounded").attr("src",result.data.image)
      //     }
      //   });
      // }, 0.0001);

    </script>
@endsection