<a href="{{route('admin.gejala.edit',$gejala->id)}}" class="btn icon-left btn-outline-warning">
    <i class="fa fa-edit"></i>
</a>

<a href="#" class="btn icon-left btn-outline-danger" onclick="Delete({{$gejala->id}})"><i class="fa fa-trash-restore"></i></a>

<form id="delete-{{$gejala->id}}" action="{{route('admin.gejala.destroy',$gejala->id)}}" enctype="multipart/form-data"
      method="post">
    @csrf
    @method('DELETE')
</form>

@push('js')
    <script>
        function Delete(id) {
            swal({
                title: 'Hapus akun?',
                text: "kamu yakin ingin menghapus data ini.?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya,hapus',
                cancelButtonText: 'Tidak!',
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-' + id).submit()
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
