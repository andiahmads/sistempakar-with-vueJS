<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 403</title>
     <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/all.css')}}" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/components.css')}}">
</head>
<body>

<div class="card">
    <div class="card-header">
        <h4>Access Forbidden</h4>
    </div>
    <div class="card-body">
        <div class="empty-state" data-height="600" style="height: 600px;">
            <img class="img-fluid" src="{{asset('/assets/admin/img/drawkit/drawkit-full-stack-man-colour.svg')}}" alt="image">
            <h2 class="mt-0">Sepertinya akun anda belum Diaktifasi</h2>
            <p class="lead">
               Mohon tunggu beberapa menit sampai admin mengaktifasi akun anda
            </p>
            <a href="{{route('user.dashboard')}}" class="btn btn-warning mt-4">Go to Dashboard</a>
        </div>
    </div>
</div>


</body>
</html>


