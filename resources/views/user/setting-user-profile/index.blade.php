@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Profile</div>
        </div>
    </div>
    <h2 class="section-title">Hi, {{Auth::user()->name}}</h2>
    <p class="section-lead">
        Change information about yourself on this page.
    </p>

    <div class="row mt-sm-4">
        @include('user.setting-user-profile.component.card-profile')
        <div class="col-12 col-sm-7 col-lg-7">
            <div class="card">
                <div class="card-header">
                    <h4>Form Edit Profile <code>.</code></h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs justify-content-center" id="myTab6" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-center active" id="home-tab6" data-toggle="tab" href="#home6"
                               role="tab" aria-controls="home" aria-selected="true">
                                <span><i class="fas fa-home"></i></span>Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" id="profile-tab6" data-toggle="tab" href="#profile6"
                               role="tab" aria-controls="profile" aria-selected="false">
                                <span><i class="fas fa-id-card"></i></span> Password</a>
                        </li>

                    </ul>
                    <div class="tab-content tab-bordered" id="myTabContent6">
                        @include('user.setting-user-profile.component.form-edit-profile')
                        @include('user.setting-user-profile.component.form-edit-password')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
@endpush
