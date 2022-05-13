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
                        <h3 class="card-label">Access Settings</h3>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
