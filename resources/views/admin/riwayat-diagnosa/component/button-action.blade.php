<a href="{{route('admin.riwayat-diagnosa-user.show',$hasil->id)}}" class="btn btn-icon icon-left btn-outline-info"><i
        class="fas fa-eye-slash"></i></a>


<a href="#" class="btn btn-icon icon-left btn-outline-danger" onclick="DeleteDiagnosa({{$hasil->id}})"><i
        class="fas fa-trash"></i></a>
<form id="deleteDiagnosa-{{$hasil->id}}" action="{{route('admin.riwayat-diagnosa-user.destroy',$hasil->id)}}" method="POST">
    @csrf
    @method('DELETE')
</form>
@push('js')
    <script>
        function DeleteDiagnosa(id) {
            swal({
                title: 'Hapus Akun?',
                text: "kamu yakin ingin menghapus Akun in.?",
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
                    document.getElementById('deleteDiagnosa-' + id).submit()
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
