@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="section-header">
        <h1>Manajemen Pertanyaan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Modules</a></div>
            <div class="breadcrumb-item">DataTables</div>
        </div>
    </div>

    <div class="row mt-sm-4">
        <div class="col-12 col-sm-12 col-lg-12">
            <div class="card">
                 <div class="card-body">
                    <ul class="nav nav-tabs justify-content-center" id="myTab6" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link text-center active" id="home-tab6" data-toggle="tab" href="#data-pernyataan" role="tab" aria-controls="home" aria-selected="true">
                          <span><i class="fas fa-home"></i></span>Data Pernyataan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-center" id="profile-tab6" data-toggle="tab" href="#form-add-pernyataan" role="tab" aria-controls="profile" aria-selected="false">
                          <span><i class="fas fa-id-card"></i></span>Tambahkan Pernyataan</a>
                      </li>

                    </ul>
                    <div class="tab-content tab-bordered" id="myTabContent6">
                    @include('admin.pertanyaan.component.data-pernyataan')
                    @include('admin.pertanyaan.component.form-add-pertanyaan')
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
