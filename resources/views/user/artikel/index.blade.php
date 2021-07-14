@extends('layouts.admin.app')

@section('title','Dashboard')

@push('css')
    <link rel="stylesheet" href="{{asset('assets/admin/landingpage/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/landingpage/styles.css')}}">
@endpush

@section('content')
    <section class="post-area">
        <div class="container">

            <div class="row">

                <div class="col-lg-1 col-md-0"></div>
                <div class="col-lg-10 col-md-12">

                    <div class="main-post">

                        <div class="post-top-area">

                            <h5 class="pre-title">Kesehatan Mental</h5>

                            <h3 class="title"><a href="#"><b>Narcissistic Personality Disorder (Narsistik)</b></a></h3>

                            <div class="post-info">

                                <div class="left-area">
                                    <a class="avatar" href="#"><img src="{{asset('/img/dokter.png')}}"
                                                                    alt="Profile Image"></a>
                                </div>

                                <div class="middle-area">
                                    <a class="name" href="#"><b>Hallo Doketer</b></a>
                                    <h6 class="date">on : 11 Mei 2020 at 9:48 am</h6>
                                </div>

                            </div><!-- post-info -->
                            <h5>Apa yang dimaksud dengan Narcissistic Personality Disorder ?</h5>
                            @include('user.artikel.content1')

                        </div><!-- post-top-area -->

                        <div class="post-image"><img src="{{asset('img/narsistik.jpg')}}" alt="Blog Image"></div>
                        <br>
                        <div class="post-bottom-area">
                            <h5>Seberapa umum Narcissistic Personality Disorder ?</h5>

                        </div>
                        <div class="post-bottom-area">
                            @include('user.artikel.content2')


                        </div><!-- post-bottom-area -->
                        <div class="post-bottom-area">
                            <h5>Apa penyebab narcissistic personality disorder (gangguan kepribadian narsistik)?</h5>
                            @include('user.artikel.content3')
                        </div>

                        <div class="post-bottom-area">

                            <ul class="tags">
                                <li><a href="{{route('user.gejala')}}">Lihat Gejala</a></li>
                                <li><a href="{{route('user.diagnosa')}}">Mulai Diagnosa</a></li>
                                <li><a href="{{route('user.riwayat-diagnosa.index')}}">Riwayat Diagnosa</a></li>
                                <li><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                            </ul>
                        </div>
                    </div><!-- main-post -->
                </div><!-- col-lg-8 col-md-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- post-area -->
@endsection

@push('js')
@endpush
