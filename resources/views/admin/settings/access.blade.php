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
                        <h3 class="card-label">Access Condition</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Unlock Condition (Confirm Enable Attribute)</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable Temperature</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable Mask</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="form-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Enable Guest</label>
                            </div>
                        </div>
                        <label for="" style="width: 100%; background-color: aquamarine; font-weight: bold;">Wiegand Settings</label>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Wiegand Mode</label>
                                <select class="form-control" aria-label="Default select example">
                                    <option value="1">Wiegand Input</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Wiegand Bits</label>
                                <select class="form-control" aria-label="Default select example">
                                    <option value="1">26</option>
                                    <option value="2">52</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Wiegand Format</label>
                                <select class="form-control" aria-label="Default select example">
                                    <option value="1">Wiegand26</option>
                                    <option value="2">Wiegand52</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleCheck1">Type</label>
                                <select class="form-control" aria-label="Default select example">
                                    <option value="1">Card Number</option>
                                    <option value="2">Two</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
