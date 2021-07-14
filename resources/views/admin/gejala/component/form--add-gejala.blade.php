@push('css')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,700,300italic);

        *, *:before, *:after {
            box-sizing: border-box;
        }

        h1 {
            color: #555;
            margin: 3rem 0 1rem 0;
            padding: 0;
            font-size: 1.5rem;
        }

        textarea {
            width: 100%;
            min-height: 100px;
            resize: none;
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 0.5rem;
            color: #666;
            box-shadow: inset 0 0 0.25rem #ddd;

        &
        :focus {
            outline: none;
            border: 1px solid darken(#ddd, 5%);
            box-shadow: inset 0 0 0.5rem darken(#ddd, 5%);
        }

        &
        [placeholder] {
            font-style: italic;
            font-size: 0.875rem;
        }

        }

        #the-count {
            float: right;
            padding: 0.1rem 0 0 0;
            font-size: 0.875rem;
        }
    </style>
@endpush
<div class="collapse" id="form-add-gejala">
    <form action="{{route('admin.gejala.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="card-body">
            <div class="form-group">
                <h1>Tulis Gejala</h1>
                <textarea name="gejala" id="the-textarea" maxlength="300" placeholder="Start Typin..."
                          autofocus></textarea>
                <div id="the-count">
                    <span id="current">0</span>
                    <span id="maximum">/ 300</span>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-icon icon-left btn-primary" type="submit">
                <i class="far fa-save"></i>
                Simpan
            </button>
        </div>
    </form>
</div>

@push('js')
    <script>
        $('textarea').keyup(function () {

            var characterCount = $(this).val().length,
                current = $('#current'),
                maximum = $('#maximum'),
                theCount = $('#the-count');

            current.text(characterCount);


            /*This isn't entirely necessary, just playin around*/
            if (characterCount < 70) {
                current.css('color', '#666');
            }
            if (characterCount > 70 && characterCount < 90) {
                current.css('color', '#6d5555');
            }
            if (characterCount > 90 && characterCount < 100) {
                current.css('color', '#793535');
            }
            if (characterCount > 100 && characterCount < 120) {
                current.css('color', '#841c1c');
            }
            if (characterCount > 120 && characterCount < 139) {
                current.css('color', '#8f0001');
            }

            if (characterCount >= 140) {
                maximum.css('color', '#8f0001');
                current.css('color', '#8f0001');
                theCount.css('font-weight', 'bold');
            } else {
                maximum.css('color', '#666');
                theCount.css('font-weight', 'normal');
            }


        });
    </script>
@endpush
