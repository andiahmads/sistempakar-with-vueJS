<a href="{{route('admin.user.edit',$user->id)}}" class="btn btn-icon icon-left btn-outline-warning"><i
        class="fas fa-edit"></i></a>
<a href="#" class="btn btn-icon icon-left btn-outline-danger" onclick="DeleteUser({{$user->id}})"><i class="fas fa-trash"></i></a>


<!--button untuk aktifasi akun -->
@if($user->status_akun == false)
    <a href="#" class="btn btn-icon icon-left btn-outline-dark" onclick="aktifasiAkun({{$user->id}})"><i
            class="fas fa-toggle-on"></i>Aktifasi</a>
    <form id="aktifasi-{{$user->id}}" action="{{route('admin.user.aktifasiAkun',$user->id)}}" method="POST">
        @csrf
        @method('PUT')
    </form>
@elseif($user->status_akun == true)
    <a href="#" class="btn btn-icon icon-left btn-outline-dark" onclick="nonAktifAkun({{$user->id}})"><i
            class="fas fa-toggle-on"></i>NonAktifkan</a>
    <form id="aktifasi-{{$user->id}}" action="{{route('admin.user.aktifasiAkun',$user->id)}}" method="POST">
        @csrf
        @method('PUT')
    </form>
@endif

<!--end button untuk aktifasi akun -->
 <form id="deleteUser-{{$user->id}}" action="{{route('admin.user.destroy',$user->id)}}" method="POST">
        @csrf
        @method('DELETE')
    </form>

@push('js')
    <script>

        function aktifasiAkun(id) {
            swal({
                title: 'Aktifasi Akun?',
                text: "kamu yakin ingin mengAktifkan Akun in.?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya,Aktifkan',
                cancelButtonText: 'Tidak!',
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('aktifasi-' + id).submit()
                } else if (result.dissmis === swal.DissmisReason.cancel) {
                    swal(
                        'Cancelled',
                        'Tidak Jadi MengArsipkan data',
                        'error'
                    )
                }
            })

        }

        function nonAktifAkun(id) {
            swal({
                title: 'nonAktifkan Akun?',
                text: "kamu yakin ingin menonAktifkan Akun in.?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya,NonAktifkan',
                cancelButtonText: 'Tidak!',
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('aktifasi-' + id).submit()
                } else if (result.dissmis === swal.DissmisReason.cancel) {
                    swal(
                        'Cancelled',
                        'Tidak Jadi MengArsipkan data',
                        'error'
                    )
                }
            })

        }
         function DeleteUser(id) {
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
                    document.getElementById('deleteUser-' + id).submit()
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
