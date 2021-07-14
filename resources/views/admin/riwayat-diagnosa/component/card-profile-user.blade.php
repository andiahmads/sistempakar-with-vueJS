<div class="col-12 col-md-12 col-lg-5">
    <div class="card profile-widget">
        <div class="profile-widget-header">
            @if($riwayatdiagnosa->user->image == 'default.png')
                <img alt="image" src="{{asset('/assets/admin/img/avatar/avatar-1.png')}}"
                     class="rounded-circle profile-widget-picture">
            @else
                <img alt="image" src="{{ asset('storage/profile/'.$riwayatdiagnosa->user->image) }}"
                     class="rounded-circle profile-widget-picture">
            @endif
            <div class="profile-widget-items">
                <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Id</div>
                    <div class="profile-widget-item-value">{{$riwayatdiagnosa->user->id}}</div>
                </div>
                <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Code Rule</div>
                    <div class="profile-widget-item-value">{{$riwayatdiagnosa->rule->code_rule}}</div>
                </div>
                <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Role User</div>
                    <div class="profile-widget-item-value">{{$riwayatdiagnosa->user->role->role}}</div>
                </div>
            </div>
        </div>
        <div class="profile-widget-description">
            <div class="profile-widget-name">{{$riwayatdiagnosa->user->name}}
                <div class="text-muted d-inline font-weight-normal">
                </div>
            </div>
            {{$riwayatdiagnosa->user->biodata}}
        </div>
    </div>
</div>
