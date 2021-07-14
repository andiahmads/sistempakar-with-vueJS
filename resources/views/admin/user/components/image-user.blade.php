@if($user->image =='default.png')
    <img width="65" src="{{asset('/img/all-user.jpeg')}}"/>
    @else
        <img width="65" src="{{asset('storage/profile/'.$user->image)}}"/>

@endif
