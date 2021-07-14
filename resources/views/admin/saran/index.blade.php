@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="section-header">
        <h1>Data Saran</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Saran</a></div>
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
                           href="#form-add-saran"
                           role="button" aria-expanded="false"
                           aria-controls="collapseExample">
                            <i class="far fa-address-book"></i>
                            Tambah Saran
                        </a>
                    </div>
                    @include('admin.saran.component.form-add-saran')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th>Kode Rule</th>
                                    <th>Saran</th>
                                    <th>Create_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                 <tbody>
                                @foreach($saran as $key=>$data)
                                    <tr>
                                        <td class="text-center">
                                            {{$key+1}}
                                        </td>
                                        <td><span class="badge badge-light">{{$data->rule->code_rule}}</span></td>
                                        <td>
                                            @include('admin.saran.component.modal-saran')
                                        </td>
                                        <td>{{$data->created_at->format('d, M Y H:i')}}</td>
                                        <td>@include('admin.saran.component.button-action')</td>

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
