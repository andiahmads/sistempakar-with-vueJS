@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="section-header">
        <h5>Data Riwayat Diagnosa {{$riwayatdiagnosa->user->name}}
            pada {{$riwayatdiagnosa->created_at->format('d, M Y H:i')}} </h5>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('admin.riwayat-diagnosa-user.index')}}">
                    <i class="fa fa-arrow-alt-circle-left">Kembali</i>
                </a></div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-sm-4">
                            @include('admin.riwayat-diagnosa.component.card-profile-user')
                            @include('admin.riwayat-diagnosa.component.chart')

                            @include('admin.riwayat-diagnosa.component.prediksi-rule')
                            @include('admin.riwayat-diagnosa.component.tree-diagnosa-user')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
