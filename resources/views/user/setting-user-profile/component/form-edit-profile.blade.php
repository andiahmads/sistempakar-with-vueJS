<div class="tab-pane fade active show" id="home6" role="tabpanel" aria-labelledby="home-tab6">
    <div class="card">
        <form method="post" action="{{route('user.update-profile')}}" class="needs-validation"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-header">
                <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6 col-12">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}"
                               required="">
                        <div class="invalid-feedback">
                            Please fill in the first name
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}"
                               required="">
                        <div class="invalid-feedback">
                            Please fill in the last name
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="form-group col-md-7 col-12">
                        <label>Jenis-Kelamin</label>
                        <select id="inputState" class="form-control" name="jenis_kelamin">
                            <option selected="">Choose...</option>
                            @if(Auth::user()->jenis_kelamin == 'laki-laki')
                                <option selected>laki-laki</option>
                                <option>perempuan</option>
                            @else
                                <option selected>perempuan</option>
                                <option>laki-laki</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label>Roles</label>
                        <input type="tel" class="form-control" value="{{Auth::user()->role->role}}" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12">
                        <label>Bio</label>
                        <textarea class="form-control" name="biodata">{{Auth::user()->biodata}}</textarea>
                    </div>
                </div>

                <div class="form-group input-field">
                    <label class="active">Image</label>
                    <div class="input-images-1" style="padding-top: .5rem;">
                    </div>
                </div>

            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary" type="submit">Save Changes</button>
            </div>
        </form>
    </div>
</div>

