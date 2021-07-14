@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <div class="section-header">
        <h1>Data Rule</h1>
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
                           href="#form-add-rule"
                           role="button" aria-expanded="false"
                           aria-controls="collapseExample">
                            <i class="far fa-address-book"></i>
                            Tambah Rule
                        </a>
                    </div>
                    @include('admin.rule-diagnosa.component.form-add-rule')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                <tr>
                                    <th class="text-center">
                                        No
                                    </th>
                                    <th>Kode Rule</th>
                                    <th>Rule Diagnosa</th>
                                    <th>Create_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rules as $key=>$rule)
                                    <tr>
                                        <td class="text-center">
                                            {{$key+1}}
                                        </td>
                                        <td><span class="badge badge-light">{{$rule->code_rule}}</span></td>
                                        <td> {!! html_entity_decode($rule->rule_diagnosa) !!}</td>
                                        <td>{{$rule->created_at->format('d, M Y H:i')}}</td>

                                        <td>@include('admin.rule-diagnosa.component.button-action')</td>
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
    </div>
@endsection

@push('js')
@endpush
