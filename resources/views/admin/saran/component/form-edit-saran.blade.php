@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

@endpush

@section('content')
    <div class="section-header">
        <h1>Edit Data Saran</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('admin.saran.index')}}">
                    <i class="fa fa-arrow-alt-circle-left">Kembali</i>
                </a></div>
        </div>
    </div>


    <div class="section-body">
        <div class="card">
            <form method="post" action="{{route('admin.saran.update',$saran->id)}}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="col-sm-8">
                        <label for="inputAddress">Kode Rule</label>

                        <select class="form-control select2" name="rule_id" style="width: 100%;">
                            @foreach($rules as $rule)
                                @if($rule->id == $saran->rule_id)
                                    <option class="align-items-lg-center"
                                            selected value="{{$rule->id}}
                                        "{{$rule->id == $saran->rule_id ? 'selected' :''}}>
                                        {{$rule->code_rule}}
                                    </option>
                                @elseif($rule->id != $saran->rule_id)
                                    <option>
                                        {{$rule->code_rule}}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group col-md-12">
                        <label for="inputAddress">Saran</label>
                        <textarea id="summernote" name="saran">{{$saran->saran}}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-icon icon-left btn-primary" type="submit">
                        <i class="far fa-save"></i>
                        Simpan Saran
                    </button>
                </div>
            </form>
        </div>

    </div>

@endsection

@push('js')
    <script>
        $('#summernote').summernote({
            placeholder: 'Tulis Rule Disini',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
