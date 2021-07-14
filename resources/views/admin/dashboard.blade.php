@extends('layouts.admin.app')
@section('title','Dashboard')

@push('css')
@endpush
@section('content')
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        </div>
    </div>
    <div class="card">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <a href="{{route('admin.user.index')}}">
                            <i class="far fa-user"></i>
                        </a>

                    </div>
                    <div class="card-wrap">
                        <div class="card-header bg">
                            <h4>Total Pengguna</h4>
                        </div>
                        <div class="card-body bg">
                            {{$user->count()}}
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <a href="{{route('admin.gejala.index')}}">
                            <i class="far fa-user-alt"></i>
                        </a>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Gejala</h4>
                        </div>
                        <div class="card-body">
                            {{$gejala->count()}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <a href="{{route('admin.gejala.index')}}">
                            <i class="text-white fa fa-cogs"></i>
                        </a>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Rule</h4>
                        </div>
                        <div class="card-body">
                            {{$rule->count()}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <a href="{{route('admin.pertanyaan.index')}}">
                            <i class="text-white fa fa-question-circle"></i>
                        </a>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pernyataan</h4>
                        </div>
                        <div class="card-body">
                            {{$pernyataan->count()}}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <a href="{{route('admin.saran.index')}}">
                            <i class="text-white fa fa-book-medical"></i>
                        </a>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Saran</h4>
                        </div>
                        <div class="card-body">
                            {{$saran->count()}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <a href="{{route('admin.petunjuk-diagnosa.index')}}">
                            <i class="text-white fa fa-hands-helping"></i>
                        </a>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Persetujuan Diagnosa</h4>
                        </div>
                        <div class="card-body">
                            {{$terms->count()}}
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-dark">
                        <a href="{{route('admin.riwayat-diagnosa-user.index')}}">
                            <i class="text-white fa fa-user-injured"></i>
                        </a>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Riwayat Diagnosa</h4>
                        </div>
                        <div class="card-body">
                            {{$totaldiagnosa->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        @include('admin.dashboard-component.chart1')

    </div>
    <div class="col-12 col-md-6 col-lg-6">
        @include('admin.dashboard-component.chart2')

    </div>
</div>

@endsection
@push('js')
@endpush
