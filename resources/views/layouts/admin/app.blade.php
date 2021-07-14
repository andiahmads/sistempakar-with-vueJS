<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('assets/admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/all.css')}}" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/components.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/js/select2/dist/css/select2.min.css')}}">

    <link href="{{asset('assets/admin/css/sweetalert2/sweetalert2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/admin/js/customdropzone/src/image-uploader.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/js/customdropzone/dist/image-uploader.min.css')}}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    @stack('css')
</head>
<body>
@if(Request::is('admin*'))
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        @include('layouts.admin.partials.navbar')
        <div class="main-sidebar">
            @include('layouts.admin.partials.sidebar')
        </div>
        <div class="main-content">
            <section class="section">
                @yield('content')
            </section>
        </div>
    </div>
@endif

@if(Request::is('user*'))
    <body class="layout-3">
    <div class="main-wrapper container" id="app">
        <div class="navbar-bg"></div>
        @include('layouts.admin.partials.user-navbar')
        <div class="main-content">
            <section class="section">
                @yield('content')
            </section>
        </div>
    </div>
    </body>
@endif

<script src="{{asset('assets/admin/js/jquery-3.3.1.min.js')}}"></script>
<script src="/js/app.js"></script>

<script src="{{asset('assets/admin/js/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/admin/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/admin/js/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/js/stisla.js')}}"></script>

<script src="{{asset('assets/admin/js/scripts.js')}}"></script>
<script src="{{asset('assets/admin/js/custom.js')}}"></script>
<script src="{{asset('assets/admin/js/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/admin/js/toastring/toastr.min.js')}}"></script>
<script src="{{asset('assets/admin/js/sweetalert/sweetalert2.all.js')}}"></script>
<script src="{{asset('assets/admin/js/customdropzone/dist/image-uploader.min.js')}}"></script>
<script src="{{asset('assets/admin/js/customdropzone/src/image-uploader.js')}}"></script>

<script src="{{asset('assets/admin/js/summernote/summernote-lite.min.js')}}"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
{!! Toastr::message() !!}

@stack('js')
<script>

    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}', 'Error', {
        closeButton: true,
        progressBar: true,
    });
    @endforeach
    @endif
    $('.select2').select2()

    $(document).ready(function () {
        $('#myTable').DataTable();
    });

    $(function () {
        $('.input-images-1').imageUploader();
    });
</script>

</body>
</html>
