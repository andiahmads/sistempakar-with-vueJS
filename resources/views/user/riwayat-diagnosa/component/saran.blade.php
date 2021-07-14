<div class="card ">
        <div class="card-header">
            <h4 class="text-dark">Saran Dari Pakar</h4>
        </div>
        <div class="card-body">
            <p>
                <a class="btn btn-primary collapsed" data-toggle="collapse" href="#collapseExample" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    Lihat saran disini
                </a>
            </p>
            <div class="collapse" id="collapseExample" style="">
                <p>
                 {!! html_entity_decode($riwayatsaya->saran->saran) !!}

                </p>
            </div>
        </div>

</div>
