<div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile-tab6">
    <form action="{{route('user.update-password')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group col-md-12 col-12">
                <label>Password lama</label>
                <input type="password" class="form-control" name="old_password">
                <div class="invalid-feedback">
                    Please fill in the email
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-7 col-12">
                <label>Password baru</label>
                <input type="password" class="form-control" name="password">
                <div class="invalid-feedback">
                    Please fill in the email
                </div>
            </div>
            <div class="form-group col-md-5 col-12">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" value="">
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">Save Changes</button>
        </div>
    </form>
</div>
