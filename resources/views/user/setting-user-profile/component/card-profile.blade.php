<div class="col-12 col-md-12 col-lg-5">
    <div class="card profile-widget">
        <div class="profile-widget-header">
            @if(Auth::user()->image == 'default.png')
                <img alt="image" src="{{asset('/assets/admin/img/avatar/avatar-1.png')}}"
                     class="rounded-circle profile-widget-picture">
            @else
                <img alt="image" src="{{ asset('storage/profile/'.Auth::user()->image) }}"
                     class="rounded-circle profile-widget-picture">
            @endif
            <div class="profile-widget-items">
                <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Id User</div>
                    <div class="profile-widget-item-value">
                        {{Auth::user()->id}}
                    </div>
                </div>
                <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Role</div>
                    <div class="profile-widget-item-value">
                        {{Auth::user()->role->role}}
                    </div>
                </div>
                <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Status</div>
                    <div class="profile-widget-item-value">
                        @if(Auth::user()->status_akun =-1)
                            Aktif
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-widget-description">
            <div class="profile-widget-name">{{Auth::user()->name}}
                <div class="text-muted d-inline font-weight-normal">
                    <div class="slash"></div>
                    {{Auth::user()->role->role}}
                </div>
            </div>
            {{Auth::user()->biodata}}
        </div>
    </div>
</div>
