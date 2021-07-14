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
                    <div class="profile-widget-item-label">Posts</div>
                    <div class="profile-widget-item-value">187</div>
                </div>
                <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Followers</div>
                    <div class="profile-widget-item-value">6,8K</div>
                </div>
                <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Following</div>
                    <div class="profile-widget-item-value">2,1K</div>
                </div>
            </div>
        </div>
        <div class="profile-widget-description">
            <div class="profile-widget-name">{{Auth::user()->name}}
                <div class="text-muted d-inline font-weight-normal">
                    <div class="slash"></div>
                    Web Developer
                </div>
            </div>
            {{Auth::user()->biodata}}
        </div>
    </div>
</div>
