<a href="{{route('admin.rule-diagnosa.edit',$rule->id)}}" class="btn btn-icon icon-left btn-outline-secondary"><i
        class="fas fa-edit"></i></a>

<a href="#" class="btn btn-icon icon-left btn-outline-danger" onclick="DeleteUser({{$rule->id}})"><i
        class="fas fa-trash"></i</a>

 <form id="deleteRule-{{$rule->id}}" action="{{route('admin.rule-diagnosa.destroy',$rule->id)}}" method="POST">
        @csrf
        @method('DELETE')
    </form>

@push('js')
    <script>
           function DeleteUser(id) {
            swal({
                title: 'Hapus Rule?',
                text: "kamu yakin ingin menghapus Rule in.?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak!',
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('deleteRule-' + id).submit()
                } else if (result.dissmis === swal.DissmisReason.cancel) {
                    swal(
                        'Cancelled',
                        'Tidak Jadi MengArsipkan data',
                        'error'
                    )
                }
            })

        }
    </script>
@endpush
