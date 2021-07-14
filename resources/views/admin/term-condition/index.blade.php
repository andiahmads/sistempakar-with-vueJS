@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="section-header">
        <h1>Data Persetujuan diagnosa user</h1>
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
                                    <th>Image</th>
                                    <th>email</th>
                                    <th>keterangan</th>
                                    <th>tanggal persetujuan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($terms as $key=>$term)
                                    <tr>
                                        <td class="text-center">
                                            {{$key+1}}
                                        </td>
                                        <td>{{$term->user->name}}</td>
                                        <td>
                                            @include('admin.term-condition.component.image')
                                        </td>
                                        <td>{{$term->user->email}}</td>
                                        <td>
                                            @if($term->terms_condition =="setuju")
                                                <span class="badge badge-primary">
                                            {{$term->terms_condition}}
                                            </span>
                                            @elseif($term->terms_condition =="tidak setuju")
                                                <span class="badge badge-dark">
                                            {{$term->terms_condition}}
                                            </span>
                                            @endif
                                        </td>
                                        <td>{{$term->created_at->format('d, M Y H:i')}}</td>
                                        <td>@include('admin.term-condition.component.button-action')</td>
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
