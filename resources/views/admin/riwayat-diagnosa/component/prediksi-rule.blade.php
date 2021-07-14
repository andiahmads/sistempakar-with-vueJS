@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush
<div class="form-group col-md-6">
    <label for="inputAddress">Rule Prediksi</label>
    <textarea id="summernote" name="rule_diagnosa">{{$riwayatdiagnosa->rule->rule_diagnosa}}</textarea>

    @include('admin.riwayat-diagnosa.component.saran')

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
