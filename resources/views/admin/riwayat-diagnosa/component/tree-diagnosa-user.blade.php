<div class="col-12 col-md-6 col-lg-6">

<h2 class="section-title">hasil diagnosa</h2>
<div class="activities">
    <div class="activity">
        <div class="activity-icon bg-primary text-white shadow-primary">
            <i class="fas fa-arrow-alt-circle-down"></i>
        </div>
        <div class="activity-detail">
            <div class="mb-2">
                <span class="text-job text-primary">Root Node</span>
                <span class="bullet"></span>
                <a class="text-job" href="#">Gejala 7</a>
            </div>
            <p>{{$pernyataan[0]->pernyataan_G7}} "<a class="badge badge-primary" class="badge badge-primary" href="#">{{$riwayatdiagnosa->gejala_7}}</a>".</p>
        </div>
    </div>

    @if($riwayatdiagnosa->rule_id == 1 || $riwayatdiagnosa->rule_id == 2 || $riwayatdiagnosa->rule_id == 3 || $riwayatdiagnosa->rule_id == 4 || $riwayatdiagnosa->rule_id == 5
|| $riwayatdiagnosa->rule_id == 6 || $riwayatdiagnosa->rule_id == 7 || $riwayatdiagnosa->rule_id == 8
|| $riwayatdiagnosa->rule_id == 9 || $riwayatdiagnosa->rule_id ==10 || $riwayatdiagnosa->rule_id ==11 || $riwayatdiagnosa->rule_id ==12 || $riwayatdiagnosa->rule_id ==13)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_1-13')
    @endif
    @if($riwayatdiagnosa->rule_id ==14 || $riwayatdiagnosa->rule_id ==15 || $riwayatdiagnosa->rule_id ==16
|| $riwayatdiagnosa->rule_id ==17 || $riwayatdiagnosa->rule_id ==18 || $riwayatdiagnosa->rule_id ==19)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_14-19')
    @endif

    @if($riwayatdiagnosa->rule_id ==20 || $riwayatdiagnosa->rule_id ==21 || $riwayatdiagnosa->rule_id ==22 || $riwayatdiagnosa->rule_id ==23)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_20-23')
    @endif

    @if($riwayatdiagnosa->rule_id ==24 || $riwayatdiagnosa->rule_id ==25 || $riwayatdiagnosa->rule_id ==26 || $riwayatdiagnosa->rule_id ==27)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_24-27')
    @endif

    @if($riwayatdiagnosa->rule_id ==28 || $riwayatdiagnosa->rule_id ==29 || $riwayatdiagnosa->rule_id ==30 || $riwayatdiagnosa->rule_id ==31 || $riwayatdiagnosa->rule_id ==32 || $riwayatdiagnosa->rule_id ==33 || $riwayatdiagnosa->rule_id ==34)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_28-34')
    @endif
    @if($riwayatdiagnosa->rule_id==35 || $riwayatdiagnosa->rule_id==36)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_35-36')
    @endif
    @if($riwayatdiagnosa->rule_id==37 || $riwayatdiagnosa->rule_id==38 || $riwayatdiagnosa->rule_id==39 || $riwayatdiagnosa->rule_id==40 || $riwayatdiagnosa->rule_id==41 || $riwayatdiagnosa->rule_id==42
|| $riwayatdiagnosa->rule_id==43 || $riwayatdiagnosa->rule_id==44 || $riwayatdiagnosa->rule_id==45 || $riwayatdiagnosa->rule_id==46)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_37-46')
    @endif

    @if($riwayatdiagnosa->rule_id == 47 || $riwayatdiagnosa->rule_id == 48 || $riwayatdiagnosa->rule_id == 49 || $riwayatdiagnosa->rule_id == 50 || $riwayatdiagnosa->rule_id == 51)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_47-51')
    @endif

    @if($riwayatdiagnosa->rule_id == 52 || $riwayatdiagnosa->rule_id == 53 || $riwayatdiagnosa->rule_id == 54 || $riwayatdiagnosa->rule_id == 55 || $riwayatdiagnosa->rule_id == 56 || $riwayatdiagnosa->rule_id == 57 || $riwayatdiagnosa->rule_id == 58 || $riwayatdiagnosa->rule_id == 59)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_52-59')
    @endif
    @if($riwayatdiagnosa->rule_id == 60 || $riwayatdiagnosa->rule_id == 61 || $riwayatdiagnosa->rule_id == 62 || $riwayatdiagnosa->rule_id == 63)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_60-63')
    @endif

    @if($riwayatdiagnosa->rule_id == 64 || $riwayatdiagnosa->rule_id == 65 || $riwayatdiagnosa->rule_id == 66 || $riwayatdiagnosa->rule_id == 67 || $riwayatdiagnosa->rule_id == 68 || $riwayatdiagnosa->rule_id == 69)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_64-69')
    @endif

    @if($riwayatdiagnosa->rule_id == 70 || $riwayatdiagnosa->rule_id == 71 || $riwayatdiagnosa->rule_id == 72 || $riwayatdiagnosa->rule_id == 73 || $riwayatdiagnosa->rule_id == 74)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_70-74')
    @endif

    @if($riwayatdiagnosa->rule_id == 75 || $riwayatdiagnosa->rule_id == 76 || $riwayatdiagnosa->rule_id == 77 || $riwayatdiagnosa->rule_id == 78 || $riwayatdiagnosa->rule_id == 79 || $riwayatdiagnosa->rule_id == 80 || $riwayatdiagnosa->rule_id == 81 || $riwayatdiagnosa->rule_id ==82)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_75-82')
    @endif

    @if($riwayatdiagnosa->rule_id == 83 || $riwayatdiagnosa->rule_id == 84 || $riwayatdiagnosa->rule_id == 85 || $riwayatdiagnosa->rule_id == 86 || $riwayatdiagnosa->rule_id == 87 || $riwayatdiagnosa->rule_id == 88
|| $riwayatdiagnosa->rule_id == 89 || $riwayatdiagnosa->rule_id == 90 || $riwayatdiagnosa->rule_id == 91)
        @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_83-91')
    @endif

    @if($riwayatdiagnosa->rule_id == 92 || $riwayatdiagnosa->rule_id == 93 || $riwayatdiagnosa->rule_id == 94)
            @include('admin.riwayat-diagnosa.tree-diagnosa.diagnosa_92-94')

    @endif

</div>
</div>
