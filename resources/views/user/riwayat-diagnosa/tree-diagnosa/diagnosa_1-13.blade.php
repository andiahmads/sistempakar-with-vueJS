<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 1</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G1}}"<a class="badge badge-primary" href="#">{{$riwayatsaya->gejala_1}}</a>"
    </div>
</div>

<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Usia</span>
            <span class="bullet"></span>
        </div>
        <p>{Kategori Usia"<a class="badge badge-primary" href="#">{{$riwayatsaya->usia}}</a>"
    </div>
</div>


<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 2</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G2}}"<a class="badge badge-primary" href="#">{{$riwayatsaya->gejala_2}}</a>"
    </div>
</div>


<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 3</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G3}}"<a class="badge badge-primary" href="#">{{$riwayatsaya->gejala_3}}</a>"
    </div>
</div>


<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 4</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G4}}"<a class="badge badge-primary" href="#">{{$riwayatsaya->gejala_4}}</a>"
    </div>
</div>


<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 5</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G5}}"<a class="badge badge-primary" href="#">{{$riwayatsaya->gejala_5}}</a>"
    </div>
</div>



<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 6</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G6}}"<a class="badge badge-primary" href="#">{{$riwayatsaya->gejala_6}}</a>"
    </div>
</div>


<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 8</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G8}}"<a class="badge badge-primary" href="#">{{$riwayatsaya->gejala_8}}</a>"
    </div>
</div>

@if($riwayatsaya->rule_id ==3 || $riwayatsaya->rule_id ==4 || $riwayatsaya->rule_id ==5 || $riwayatsaya->rule_id ==8 || $riwayatsaya->rule_id ==9
|| $riwayatsaya->rule_id ==10)
<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 9</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G9}}"<a class="badge badge-primary" href="#">{{$riwayatsaya->gejala_9}}</a>"
    </div>
</div>
@endif
<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Hasil Diagnosa</span>
        </div>
        @if($riwayatsaya->hasil_diagnosa == "tinggi")
            <p>Tingkat Narsis"<a class="badge badge-danger" href="#">{{$riwayatsaya->hasil_diagnosa}}</a>"
        @elseif($riwayatsaya->hasil_diagnosa =="sedang")
            <p>Tingkat Narsis"<a class="badge badge-warning" href="#">{{$riwayatsaya->hasil_diagnosa}}</a>"
        @else
            <p>Tingkat Narsis"<a class="badge badge-primary" href="#">{{$riwayatsaya->hasil_diagnosa}}</a>"
        @endif
    </div>
</div>
