<div class="tab-pane fade active show" id="data-pernyataan" role="tabpanel" aria-labelledby="home-tab6">
        <div class="card">
        <form method="post" action="{{route('admin.pertanyaan.update',$pernyataan[0]->id)}}" enctype="multipart/form-data">
             @method('PUT')
                @csrf
            <div class="row col-md-12">
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan Usia</label>
                    <input type="text" class="form-control" name="usia" value="{{$pernyataan[0]->pernyataan_usia}}">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G1</label>
                    <input type="text" class="form-control" name="pernyataan_G1" value="{{$pernyataan[0]->pernyataan_G1}}">
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G2</label>
                    <input type="text" class="form-control" name="pernyataan_G2" value="{{$pernyataan[0]->pernyataan_G2}}">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G3</label>
                    <input type="text" class="form-control" name="pernyataan_G3" value="{{$pernyataan[0]->pernyataan_G3}}">
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G4</label>
                    <input type="text" class="form-control" name="pernyataan_G4" value="{{$pernyataan[0]->pernyataan_G4}}">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G5</label>
                    <input type="text" class="form-control" name="pernyataan_G5" value="{{$pernyataan[0]->pernyataan_G5}}">
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G6</label>
                    <input type="text" class="form-control" name="pernyataan_G6" value="{{$pernyataan[0]->pernyataan_G6}}">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G7</label>
                    <input type="text" class="form-control" name="pernyataan_G7" value="{{$pernyataan[0]->pernyataan_G7}}">
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G8</label>
                    <input type="text" class="form-control" name="pernyataan_G8" value="{{$pernyataan[0]->pernyataan_G8}}">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G9</label>
                    <input type="text" class="form-control" name="pernyataan_G9" value="{{$pernyataan[0]->pernyataan_G9}}">
                </div>

                <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G10</label>
                    <input type="text" class="form-control" name="pernyataan_G10" value="{{$pernyataan[0]->pernyataan_G10}}">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>

                 <div class="form-group col-md-6 col-12">
                    <label>Pertanyaan G14</label>
                    <input type="text" class="form-control" name="pernyataan_G14" value="{{$pernyataan[0]->pernyataan_G14}}">
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <button class="btn btn-icon icon-left btn-primary" type="submit">
                    <i class="far fa-save"></i>
                    Edit
                </button>
            </div>
        </form>
    </div>

</div>
