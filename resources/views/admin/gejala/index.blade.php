@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')v
@endpush

@section('content')
    <div class="section-header">
        <h1>Data Gejala</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Modules</a></div>
            <div class="breadcrumb-item">DataTables</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-icon icon-left btn-primary collapsed" data-toggle="collapse"
                           href="#form-add-gejala"
                           role="button" aria-expanded="false"
                           aria-controls="collapseExample">
                            <i class="far fa-address-book"></i>
                            Tambah Gejala
                        </a>
                    </div>
                    @include('admin.gejala.component.form--add-gejala')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th>Gejala</th>
                                    <th>Create_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $key=>$gejala)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$gejala->gejala}}</td>
                                        <td>{{$gejala->created_at->format('d, M Y H:i')}}</td>

                                        <td>
                                            @include('admin.gejala.component.button')
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
@endpush
