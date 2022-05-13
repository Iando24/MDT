@extends('admin.layouts.master')
@section('title', $title)
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader" kt-hidden-height="54" style="">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Dashboard</h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
								<a href="{{ route('mdtSettings') }}" class="text-muted">CMS Setting</a>
							</li>
							<li class="breadcrumb-item text-muted">
								<a href="{{ route('ui') }}" class="text-muted">UI & Sound settings</a>
							</li>
                            <li class="breadcrumb-item text-muted">
								<a href="{{ route('temperature') }}" class="text-muted">Temperature parameters</a>
							</li>
                            <li class="breadcrumb-item text-muted">
								<a href="{{ route('Access') }}" class="text-muted">Access condition</a>
							</li>
                            <li class="breadcrumb-item text-muted">
								<a href="{{ route('System') }}" class="text-muted">System Parameters</a>
							</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                <div class="card-header" style="">
                    <div class="card-title">
                        <h3 class="card-label">System Parameters</h3>
                    </div>
                </div>
                <div class="card-body">

                    <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Normal Settings</label>
                    <hr>
                    <label for="" style="font-weight: bold;">Attribute Settings</label>
                    <div class="container-fluid">
                        <div class="form-group">
                          <input type="checkbox" class="form-input" id="exampleCheck1">
                          <label class="form-label" for="exampleCheck1">Enable</label>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleCheck1">Attribut Interval (ms)</label>
                            <input class="form-control" type="range" min="1" max="100" value="50">
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="form-input" id="exampleCheck1">
                          <label class="form-label" for="exampleCheck1">Temperature Attribute</label>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="form-input" id="exampleCheck1">
                          <label class="form-label" for="exampleCheck1">Mask Attribute</label>
                        </div>
                    </div>
                    <label for="" style="font-weight: bold;">Recognize Settings</label>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label class="form-label" for="exampleCheck1">Recognize Interval (ms)</label>
                            <input class="form-control" type="range" min="1" max="1000" value="50">
                        </div>
                    </div>
                    <label for="" style="font-weight: bold;">Attend Log Settings</label>
                    <div class="container-fluid">
                        <div class="form-group">
                          <input type="checkbox" class="form-input" id="exampleCheck1">
                          <label class="form-label" for="exampleCheck1">Enable Store Attend L...</label>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleCheck1">Attribut Interval (min)</label>
                            <input class="form-control" type="range" min="1" max="100" value="50">
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="form-input" id="exampleCheck1">
                          <label class="form-label" for="exampleCheck1">Enable Store Strange</label>
                        </div>
                    </div>
                    <label for="" style="font-weight: bold;">ID Reader Link Mode</label>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="positonUrl">ID Reader Link Mode</label>
                            <select class="form-control" aria-label="Default select example">
                              <option value="1">None</option>
                              <option value="2">One</option>
                              <option value="3">Two</option>
                            </select>
                        </div>
                    </div>
                    <label for="" style="font-weight: bold;">HID Input Mode</label>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="positonUrl">HID Input Mode</label>
                            <select class="form-control" aria-label="Default select example">
                              <option value="1">ID Card Reader</option>
                              <option value="2">One</option>
                              <option value="3">Two</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Alarm Settings</label>
                    <hr>
                    <label for="" style="font-weight: bold;">Alarm Out Settings</label>
                    <div class="container-fluid">
                        <div class="form-group">
                          <input type="checkbox" class="form-input" id="exampleCheck1">
                          <label class="form-label" for="exampleCheck1">Abnormal Temp Link</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Abnormal Mask Link</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Strangers Alarm Link</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">BlackList Link</label>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleCheck1">Alarm duration (MS)</label>
                            <input class="form-control" type="range" min="1" max="1000" value="50">
                        </div>
                    </div>
                    <hr>
                    <label for="" style="font-weight: bold;">Alarm Input Settings</label>
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="positonUrl">Alarm Index</label>
                            <select class="form-control" aria-label="Default select example">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="positonUrl">Trigger Mode</label>
                            <select class="form-control" aria-label="Default select example">
                              <option value="1">Connect</option>
                              <option value="2">Disconnect</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Input Enable</label>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('stylesheets')
<style>
    .slidecontainer {
      width: 100%;
    }

    .slider {
      -webkit-appearance: none;
      width: 100%;
      height: 25px;
      background: #d3d3d3;
      outline: none;
      opacity: 0.7;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    .slider:hover {
      opacity: 1;
    }

    .slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 25px;
      height: 25px;
      background: #04AA6D;
      cursor: pointer;
    }

    .slider::-moz-range-thumb {
      width: 25px;
      height: 25px;
      background: #04AA6D;
      cursor: pointer;
    }
    </style>
@endsection
