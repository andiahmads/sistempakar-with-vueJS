@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="section-header">
        <h5>Data Riwayat Diagnosa {{$riwayatsaya->user->name}}
            pada {{$riwayatsaya->created_at->format('d, M Y H:i')}} </h5>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('user.riwayat-diagnosa.index')}}">
                    <i class="fa fa-arrow-alt-circle-left"><b>Kembali</b></i>
                </a></div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-sm-4">
                            @include('user.riwayat-diagnosa.component.card-profile-user')
                            @include('user.riwayat-diagnosa.component.chart')
                            @include('user.riwayat-diagnosa.component.prediksi-rule')
                            @include('user.riwayat-diagnosa.component.tree-diagnosa')

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('js')
@endpush
