<div class="tab-pane fade" id="form-add-pernyataan" role="tabpanel" aria-labelledby="profile-tab6">
    <div class="card">
        <form method="post" action="{{route('admin.pertanyaan.store')}}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row col-md-12">
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan Usia</label>
                    <input type="text" class="form-control" name="usia">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G1</label>
                    <input type="text" class="form-control" name="pernyataan_G1" value="">
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G2</label>
                    <input type="text" class="form-control" name="pernyataan_G2">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G3</label>
                    <input type="text" class="form-control" name="pernyataan_G3" value="">
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G4</label>
                    <input type="text" class="form-control" name="pernyataan_G4">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G5</label>
                    <input type="text" class="form-control" name="pernyataan_G5" value="">
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G6</label>
                    <input type="text" class="form-control" name="pernyataan_G6">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G7</label>
                    <input type="text" class="form-control" name="pernyataan_G7" value="">
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G8</label>
                    <input type="text" class="form-control" name="pernyataan_G8">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G9</label>
                    <input type="text" class="form-control" name="pernyataan_G9" value="">
                </div>

                <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G10</label>
                    <input type="text" class="form-control" name="pernyataan_G10">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>

                 <div class="form-group col-md-6 col-12">
                    <label>Pernyataan G14</label>
                    <input type="text" class="form-control" name="pernyataan_G14">
                    <div class="invalid-feedback">
                        Please fill in the email
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
</div>
