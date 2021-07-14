<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 14</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G14}}"<a class="badge badge-primary" href="#">{{$riwayatdiagnosa->gejala_14}}</a>"
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
        <p>{{$pernyataan[0]->pernyataan_G6}}"<a class="badge badge-primary" href="#">{{$riwayatdiagnosa->gejala_6}}</a>"
    </div>
</div>

<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">usia</span>
            <span class="bullet"></span>
        </div>
        <p>Kategori Usia"<a class="badge badge-primary" href="#">{{$riwayatdiagnosa->usia}}</a>"
    </div>
</div>



<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 1</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G1}}"<a class="badge badge-primary" href="#">{{$riwayatdiagnosa->gejala_1}}</a>"
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
        <p>{{$pernyataan[0]->pernyataan_G2}}"<a class="badge badge-primary" href="#">{{$riwayatdiagnosa->gejala_2}}</a>"
    </div>
</div>

@if($riwayatdiagnosa->rule_id ==77 || $riwayatdiagnosa->rule_id ==78 || $riwayatdiagnosa->rule_id ==79 || $riwayatdiagnosa->rule_id ==80 || $riwayatdiagnosa->rule_id ==81 || $riwayatdiagnosa->rule_id ==82)
<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 3</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G3}}"<a class="badge badge-primary" href="#">{{$riwayatdiagnosa->gejala_3}}</a>"
    </div>
</div>
@endif
@if($riwayatdiagnosa->rule_id ==78 || $riwayatdiagnosa->rule_id ==79 || $riwayatdiagnosa->rule_id ==80)
<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 4</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G4}}"<a class="badge badge-primary" href="#">{{$riwayatdiagnosa->gejala_4}}</a>"
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
        @if($riwayatdiagnosa->hasil_diagnosa == "tinggi")
            <p>Tingkat Narsis"<a class="badge badge-danger" href="#">{{$riwayatdiagnosa->hasil_diagnosa}}</a>"
        @elseif($riwayatdiagnosa->hasil_diagnosa =="sedang")
            <p>Tingkat Narsis"<a class="badge badge-warning" href="#">{{$riwayatdiagnosa->hasil_diagnosa}}</a>"
        @else
            <p>Tingkat Narsis"<a class="badge badge-primary" href="#">{{$riwayatdiagnosa->hasil_diagnosa}}</a>"
        @endif
    </div>
</div>

