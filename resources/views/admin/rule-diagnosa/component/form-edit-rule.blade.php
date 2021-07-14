@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

@endpush

@section('content')
    <div class="section-header">
        <h1>Edit Data Rule</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('admin.rule-diagnosa.index')}}">
                    <i class="fa fa-arrow-alt-circle-left">Kembali</i>
                </a></div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <form method="post" action="{{route('admin.rule-diagnosa.update',$rule->id)}}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Code Rule</label>
                        <input type="text" class="form-control" id="inputAddress" name="code_rule" placeholder="Nama" value="{{$rule->code_rule}}">

                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputAddress">Rule</label>
                        <textarea id="summernote" name="rule_diagnosa">{{$rule->rule_diagnosa}}</textarea>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-icon icon-left btn-primary" type="submit">
                        <i class="far fa-save"></i>
                        Simpan Rule
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
