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
                            <a href="{{ route('mdtSettings') }}" class="text-muted">Server Setting</a>
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
                        <h3 class="card-label">Server Settings</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Service Mode</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Service Mode</label>
                              <select class="form-control" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                        </div>
                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Enable HTTP Upload</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                              <input type="checkbox" class="form-input" id="exampleCheck1">
                              <label class="form-label" for="exampleCheck1">Enable HTTP Upload</label>
                            </div>
                        </div>
                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Mqtt Upload Server Settings</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="positonUrl">Mqtt Position URL</label>
                                <input type="text" class="form-control" id="positonUrl">
                              </div>

                              <div class="form-group">
                                <label for="positonUrl">Mqtt Topic</label>
                                <input type="text" class="form-control" id="positonUrl">
                              </div>

                              <div class="form-group">
                                <label for="positonUrl">Mqtt Certification</label>
                                <input type="text" class="form-control" id="positonUrl">
                              </div>

                              <div class="form-group">
                                <label for="positonUrl">Mqtt Position URL</label>
                                <input type="text" class="form-control" id="positonUrl">
                              </div>

                              <div class="form-group">
                                <label for="positonUrl">Mqtt Client ID</label>
                                <input type="text" class="form-control" id="positonUrl">
                              </div>

                              <div class="form-group">
                                <label for="positonUrl">Mqtt Username</label>
                                <input type="text" class="form-control" id="positonUrl">
                              </div>

                              <div class="form-group">
                                <label for="positonUrl">Mqtt Password</label>
                                <input type="password" class="form-control" id="positonUrl">
                              </div>
                        </div>
                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Break Point Upload Settings</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                              <input type="checkbox" class="form-input" id="exampleCheck1">
                              <label class="form-label" for="exampleCheck1">Enable Break Point Upload </label>
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Picture Upload Settings</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                              <label for="positonUrl">Image Quality</label>
                              <select class="form-control" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="positonUrl">Picture Resolution</label>
                              <select class="form-control" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <input type="checkbox" class="form-input" id="exampleCheck1">
                              <label class="form-label" for="exampleCheck1">Background Image Upload</label>
                            </div>
                            <div class="form-group">
                              <input type="checkbox" class="form-input" id="exampleCheck1">
                              <label class="form-label" for="exampleCheck1">Capture Img Upload</label>
                            </div>
                            <div class="form-group">
                              <input type="checkbox" class="form-input" id="exampleCheck1">
                              <label class="form-label" for="exampleCheck1">Infrared Img Upload</label>
                            </div>
                            <div class="form-group">
                              <input type="checkbox" class="form-input" id="exampleCheck1">
                              <label class="form-label" for="exampleCheck1">Register Img Upload</label>
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Cloud Settings</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable</label>
                            </div>
                        </div>

                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Cloud3 Settings</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable</label>
                            </div>
                        </div>


                        <hr>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">DaKaBG Clound</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                              <input type="checkbox" class="form-input" id="exampleCheck1">
                              <label class="form-label" for="exampleCheck1">Enable</label>
                            </div>
                        </div>

                        <hr>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
