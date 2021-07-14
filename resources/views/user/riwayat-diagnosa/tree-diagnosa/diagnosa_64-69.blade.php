<div class="activity">
    <div class="activity-icon bg-primary text-white shadow-primary">
        <i class="fas fa-arrow-alt-circle-down"></i>
    </div>
    <div class="activity-detail">
        <div class="mb-2">
            <span class="text-job">Gejala 14</span>
            <span class="bullet"></span>
        </div>
        <p>{{$pernyataan[0]->pernyataan_G14}}"<a class="badge badge-primary" href="#">{{$riwayatsaya->gejala_14}}</a>"
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
        <p>Kategori Usia"<a class="badge badge-primary" href="#">{{$riwayatsaya->usia}}</a>"
    </div>
</div>

@if($riwayatsaya->rule_id !=69)
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
@endif
@if($riwayatsaya->rule_id ==65 || $riwayatsaya->rule_id ==66 || $riwayatsaya->rule_id ==67 || $riwayatsaya->rule_id ==68)
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
@endif

@if($riwayatsaya->rule_id ==67 || $riwayatsaya->rule_id ==68)
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
