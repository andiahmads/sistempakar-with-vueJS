@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush
<div class="collapse" id="form-add-saran">
    <form method="post" action="{{route('admin.saran.store')}}">
        @csrf
        @method('POST')
        <div class="card-body">
            <div class="col-sm-8">
                <label for="inputAddress">Kode Rule</label>

                <select class="form-control select2" name="rule_id" style="width: 100%;">
                    @foreach($rules as $rule)
                        <option></option>
                        <option class="align-items-lg-center" value="{{$rule->id}}">{{$rule->code_rule}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group col-md-12">
                <label for="inputAddress">Saran</label>
                <textarea id="summernote" name="saran"></textarea>
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
