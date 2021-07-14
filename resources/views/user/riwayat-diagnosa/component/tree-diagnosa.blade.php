<div class="col-12 col-md-6 col-lg-6">

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
            <p>{{$pernyataan[0]->pernyataan_G7}} "<a class="badge badge-primary" class="badge badge-primary" href="#">{{$riwayatsaya->gejala_7}}</a>".</p>
        </div>
    </div>

    @if($riwayatsaya->rule_id == 1 || $riwayatsaya->rule_id == 2 || $riwayatsaya->rule_id == 3 || $riwayatsaya->rule_id == 4 || $riwayatsaya->rule_id == 5
|| $riwayatsaya->rule_id == 6 || $riwayatsaya->rule_id == 7 || $riwayatsaya->rule_id == 8
|| $riwayatsaya->rule_id == 9 || $riwayatsaya->rule_id ==10 || $riwayatsaya->rule_id ==11 || $riwayatsaya->rule_id ==12 || $riwayatsaya->rule_id ==13)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_1-13')
    @endif
    @if($riwayatsaya->rule_id ==14 || $riwayatsaya->rule_id ==15 || $riwayatsaya->rule_id ==16
|| $riwayatsaya->rule_id ==17 || $riwayatsaya->rule_id ==18 || $riwayatsaya->rule_id ==19)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_14-19')
    @endif

    @if($riwayatsaya->rule_id ==20 || $riwayatsaya->rule_id ==21 || $riwayatsaya->rule_id ==22 || $riwayatsaya->rule_id ==23)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_20-23')
    @endif

    @if($riwayatsaya->rule_id ==24 || $riwayatsaya->rule_id ==25 || $riwayatsaya->rule_id ==26 || $riwayatsaya->rule_id ==27)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_24-27')
    @endif

    @if($riwayatsaya->rule_id ==28 || $riwayatsaya->rule_id ==29 || $riwayatsaya->rule_id ==30 || $riwayatsaya->rule_id ==31 || $riwayatsaya->rule_id ==32 || $riwayatsaya->rule_id ==33 || $riwayatsaya->rule_id ==34)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_28-34')
    @endif
    @if($riwayatsaya->rule_id==35 || $riwayatsaya->rule_id==36)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_35-36')
    @endif
    @if($riwayatsaya->rule_id==37 || $riwayatsaya->rule_id==38 || $riwayatsaya->rule_id==39 || $riwayatsaya->rule_id==40 || $riwayatsaya->rule_id==41 || $riwayatsaya->rule_id==42
|| $riwayatsaya->rule_id==43 || $riwayatsaya->rule_id==44 || $riwayatsaya->rule_id==45 || $riwayatsaya->rule_id==46)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_37-46')
    @endif

    @if($riwayatsaya->rule_id == 47 || $riwayatsaya->rule_id == 48 || $riwayatsaya->rule_id == 49 || $riwayatsaya->rule_id == 50 || $riwayatsaya->rule_id == 51)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_47-51')
    @endif

    @if($riwayatsaya->rule_id == 52 || $riwayatsaya->rule_id == 53 || $riwayatsaya->rule_id == 54 || $riwayatsaya->rule_id == 55 || $riwayatsaya->rule_id == 56 || $riwayatsaya->rule_id == 57 || $riwayatsaya->rule_id == 58 || $riwayatsaya->rule_id == 59)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_52-59')
    @endif
    @if($riwayatsaya->rule_id == 60 || $riwayatsaya->rule_id == 61 || $riwayatsaya->rule_id == 62 || $riwayatsaya->rule_id == 63)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_60-63')
    @endif

    @if($riwayatsaya->rule_id == 64 || $riwayatsaya->rule_id == 65 || $riwayatsaya->rule_id == 66 || $riwayatsaya->rule_id == 67 || $riwayatsaya->rule_id == 68 || $riwayatsaya->rule_id == 69)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_64-69')
    @endif

    @if($riwayatsaya->rule_id == 70 || $riwayatsaya->rule_id == 71 || $riwayatsaya->rule_id == 72 || $riwayatsaya->rule_id == 73 || $riwayatsaya->rule_id == 74)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_70-74')
    @endif

    @if($riwayatsaya->rule_id == 75 || $riwayatsaya->rule_id == 76 || $riwayatsaya->rule_id == 77 || $riwayatsaya->rule_id == 78 || $riwayatsaya->rule_id == 79 || $riwayatsaya->rule_id == 80 || $riwayatsaya->rule_id == 81 || $riwayatsaya->rule_id ==82)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_75-82')
    @endif

    @if($riwayatsaya->rule_id == 83 || $riwayatsaya->rule_id == 84 || $riwayatsaya->rule_id == 85 || $riwayatsaya->rule_id == 86 || $riwayatsaya->rule_id == 87 || $riwayatsaya->rule_id == 88
|| $riwayatsaya->rule_id == 89 || $riwayatsaya->rule_id == 90 || $riwayatsaya->rule_id == 91)
        @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_83-91')
    @endif

    @if($riwayatsaya->rule_id == 92 || $riwayatsaya->rule_id == 93 || $riwayatsaya->rule_id == 94)
            @include('user.riwayat-diagnosa.tree-diagnosa.diagnosa_92-94')

    @endif

</div>
</div>
