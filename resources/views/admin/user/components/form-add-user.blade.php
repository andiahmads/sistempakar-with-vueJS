<div class="collapse" id="form-add">
    <form method="POST" action="{{route('admin.user.store')}}" enctype="multipart/form-data">
          @method('post')
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="inputAddress">Nama Pengguna</label>
                <input type="text" class="form-control" id="inputAddress" name="name" placeholder="Nama">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password"
                           placeholder="Password">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Jenis Kelamin</label>
                    <select id="inputState" class="form-control" name="jenis_kelamin">
                        <option selected="">Choose...</option>
                        <option>laki-laki</option>
                        <option>perempuan</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Roles</label>
                    <select id="inputState" class="form-control" name="role_id">
                        <option selected="">Choose...</option>
                        @foreach($roles as $role)
                            @if($role->id !='3')
                                <option value="{{$role->id}}">{{$role->role}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group mb-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="status_akun" value="1">
                    <label class="form-check-label" for="gridCheck">
                        Aktifasi akun
                    </label>
                </div>

            </div>
        </div>
        <!--end div card body-->

        <div class="card-footer">
            <button class="btn btn-icon icon-left btn-primary" type="submit">
                <i class="far fa-save"></i>
                Simpan
            </button>
        </div>
    </form>
</div>

