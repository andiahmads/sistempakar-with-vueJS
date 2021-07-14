@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="section-header">
        <h1>Data Pengguna</h1>
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
                        <a class="btn btn-icon icon-left btn-primary collapsed" data-toggle="collapse" href="#form-add"
                           role="button" aria-expanded="false"
                           aria-controls="collapseExample">
                            <i class="far fa-address-book"></i>
                            Tambah user
                        </a>
                    </div>
                    @include('admin.user.components.form-add-user')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Status Akun</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Image</th>
                                    <th>Create_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key=>$user)
                                    <tr>
                                        <td class="text-center">
                                            {{$key+1}}
                                        </td>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            {{$user->role->role}}
                                        </td>
                                        @if($user->status_akun ==1)
                                            <td>
                                                <div class="badge badge-primary">Aktif</div>
                                            </td>
                                        @else
                                            <td>
                                                <div class="badge badge-danger">NonAktif</div>
                                            </td>
                                        @endif
                                        <td>{{$user->jenis_kelamin}}</td>
                                        <td>
                                            @include('admin.user.components.image-user')
                                        </td>
                                        <td>{{$user->created_at->format('d, M Y H:i')}}</td>

                                        <td>@include('admin.user.components.button-action')</td>
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
