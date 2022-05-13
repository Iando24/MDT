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
                        <h3 class="card-label">Ui & Sound</h3>
                    </div>
                </div>
                <div class="card-body">
                    <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Panel UI Settings</label>
                    <hr>
                    <div class="container-fluid">
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Show IP</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Show MAC</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Show Track Rect</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Show Number of Reg...</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Show Recognize Area</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Show Recognize Result</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Show Temperature</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Scan code epidemic...</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" class="form-input" id="exampleCheck1">
                            <label class="form-label" for="exampleCheck1">Face mosaic</label>
                        </div>
                        <div class="form-group">
                            <label for="positonUrl">Language</label>
                            <select class="form-control" aria-label="Default select example">
                              <option value="1">English</option>
                              <option value="2">French</option>
                              <option value="3">Germany</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="positonUrl">Voice gender</label>
                            <select class="form-control" aria-label="Default select example">
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="positonUrl">Volume</label>
                            <input class="form-control" type="range" min="1" max="100" value="50">
                        </div>
                        <div class="form-group">
                            <label for="positonUrl">Light Mode</label>
                            <select class="form-control" aria-label="Default select example">
                              <option selected>On</option>
                              <option value="2">Off</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="positonUrl">LCD Mode</label>
                            <select class="form-control" aria-label="Default select example">
                              <option value="1">On</option>
                              <option value="2">Off</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="positonUrl">UI Style</label>
                            <select class="form-control" aria-label="Default select example">
                              <option selected>Select UI Style</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="positonUrl">Reset Flow statistics</label>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Startup Logo Settings</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable</label>
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Panel UI Background Settings</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Panel UI Background</label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">UI Background Settings</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Panel Sound and Picture Settings (Confirm Enable Attribute)</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable single UI Warning</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable Liveness</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable Stranger War...</label>
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Mask Scene</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable</label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Current Picture</label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Picture Setting</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Current Sound</label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Sound Setting</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Temperature Scene</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable</label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Current Picture</label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Picture Setting</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Current Sound</label>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Sound Setting</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Pass Scene</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable</label>
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Liveness Scene</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable</label>
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Stranger Warning Scene</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable</label>
                            </div>
                        </div>
                        <button class="btn btn-primary">Save</button>
                    </div>
                    <hr>
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
