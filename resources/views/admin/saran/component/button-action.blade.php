<a href="{{route('admin.saran.edit',$data->id)}}" class="btn btn-icon icon-left btn-outline-secondary"><i
        class="fas fa-edit"></i></a>

<a href="#" class="btn btn-icon icon-left btn-outline-danger" onclick="DeleteUser({{$data->id}})"><i
        class="fas fa-trash"></i</a>

 <form id="deleteRule-{{$data->id}}" action="{{route('admin.saran.destroy',$data->id)}}" method="POST">
        @csrf
        @method('DELETE')
    </form>

@push('js')
    <script>
           function DeleteUser(id) {
            swal({
                title: 'Hapus Saran?',
                text: "kamu yakin ingin menghapus saran ini.?",
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
