@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="section-header">
        <h1>Edit Data Pengguna</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('admin.user.index')}}">
                    <i class="fa fa-arrow-alt-circle-left">Kembali</i>
                </a></div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <form method="POST" action="{{route('admin.user.update',$users->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputAddress">Nama Pengguna</label>
                        <input type="text" class="form-control" id="inputAddress" name="name" placeholder="Nama"
                               value="{{$users->name}}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email"
                                   value="{{$users->email}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password" disabled placeholder="Password" value="{{$users->password}}">
                            <small id="emailHelp" class="form-text text-muted">Anda tidak diizinkan untuk mengedit Password user</small>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Jenis Kelamin</label>
                            <select id="inputState" class="form-control" name="jenis_kelamin">
                                <option selected="">Choose...</option>
                                @if($users->jenis_kelamin == 'laki-laki')
                                    <option selected>laki-laki</option>
                                    <option>perempuan</option>
                                @else
                                    <option selected>perempuan</option>
                                    <option>laki-laki</option>
                                @endif

                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Roles</label>
                            <select id="inputState" class="form-control" name="role_id">
                                <option selected="">Choose...</option>
                                @foreach($roles as $role)
                                    @if($role->id !='3')
                                        <option selected value="{{$role->id}}" {{$role->id == 2 ? 'selected': ''}}>
                                            {{$role->role}}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck"
                                   name="status_akun" {{$users->status_akun == true ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="gridCheck">
                                Aktifasi akun
                            </label>
                        </div>

                    </div>
                </div>
                <!--end div card body-->

                <div class="card-footer">
                    <button class="btn btn-icon icon-left btn-primary" type="submit">
                        <i class="far fa-save"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>

    </div>

@endsection

@push('js')
@endpush
