@if($hasil->user->image == 'default.png')
    <img alt="image"  width="63" height="63" src="{{asset('/assets/admin/img/avatar/avatar-1.png')}}"
         class="rounded-circle profile-widget-picture">
@else
    <img alt="image" width="63" height="63" src="{{ asset('storage/profile/'.$hasil->user->image) }}"
         class="rounded-circle profile-widget-picture">
@endif
