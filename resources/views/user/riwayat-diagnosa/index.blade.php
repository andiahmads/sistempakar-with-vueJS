@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')

    <div class="section-header">
        <h1>Riwayat Diagnosa Saya</h1>
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kode Rule</th>
                                    <th>Hasil Diagnosa</th>
                                    <th>Tanggal Diagnosa</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($riwayatsaya as $key=>$hasil)
                                    <tr>
                                        <td class="text-center">
                                            {{$key+1}}
                                        </td>
                                        <td>{{$hasil->user->name}}</td>
                                        <td>{{$hasil->usia}}</td>
                                        <td>{{$hasil->user->jenis_kelamin}}</td>
                                        <td><span class="badge badge-light">{{$hasil->rule_id}}</span></td>
                                        @if($hasil->hasil_diagnosa == "tinggi")
                                            <td><span class="badge badge-danger">{{$hasil->hasil_diagnosa}}</span></td>
                                        @elseif($hasil->hasil_diagnosa == "sedang")
                                            <td><span class="badge badge-warning">{{$hasil->hasil_diagnosa}}</span></td>
                                        @else
                                            <td><span class="badge badge-primary">{{$hasil->hasil_diagnosa}}</span></td>
                                        @endif
                                        <td>{{$hasil->created_at->format('d, M Y H:i')}}</td>

                                        <td>
                                            <a href="{{route('user.riwayat-diagnosa.show',$hasil->id)}}"
                                               class="btn btn-icon icon-left btn-outline-dark">
                                                <i class="fas fa-info-circle"></i>Detail Diagnosa</a>
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
