@extends('layouts.admin.app')
@push('css')

@endpush
@section('content')
    <div class="col-12 mb-4">
        <div class="hero text-white hero-bg-image hero-bg-parallax"
             data-background="{{asset('/assets//admin/img/unsplash/andre-benz-1214056-unsplash.jpg')}}"
             style="background-image: url(&quot;../assets/img/unsplash/andre-benz-1214056-unsplash.jpg&quot;);">
            <div class="hero-inner">
                <h2>Welcome, {{Auth::user()->name}}</h2>
                <p class="lead">Selamat Datang DiSistem Pakar Diagnosa Gangguan Kepribadian Narcisstic Personality Disorder
                    registration.</p>
                <div class="mt-4">
                    <a href="{{route('user.setting-profile.index')}}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                        Setting akun</a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 mb-4">
                <div class="hero bg-primary text-white">
                  <div class="hero-inner">
                    <h2>Hai, {{Auth::user()->name}}!</h2>
                    <p class="lead">Apakah anda sudah mengetahui apa itu Narcisstic Personality disorder ?</p>
                    <div class="mt-4">
                      <a href="{{route('user.artikel')}}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-eye-slash"></i>Baca Disini</a>
                    </div>
                  </div>
                </div>
              </div>


@endsection
