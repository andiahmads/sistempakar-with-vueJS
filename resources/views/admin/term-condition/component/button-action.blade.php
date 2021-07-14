
<a href="#" class="btn icon-left btn-outline-danger" onclick="Delete({{$term->id}})"><i class="fa fa-trash-restore"></i>Delete</a>
<form id="tidaksetuju-{{$term->id}}" action="{{route('admin.ubahstatus',$term->id)}}" enctype="multipart/form-data"
      method="post">
    @csrf
    @method('PUT')
</form>
<form id="delete-{{$term->id}}" action="{{route('admin.petunjuk-diagnosa.destroy',$term->id)}}" enctype="multipart/form-data"
      method="post">
    @csrf
    @method('DELETE')
</form>
@push('js')
    <script>

         function Delete(id) {
            swal({
                title: 'Hapus data?',
                text: "kamu yakin ingin menghapus data ini.?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya,Hapus',
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
