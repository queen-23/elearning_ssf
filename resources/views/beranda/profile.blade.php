@extends('beranda.master')

@section('tittle', 'Profile')
@php
    $kontak = file_get_contents(base_path('public/data/kontak.json'));
    $kontak = json_decode($kontak, false);
@endphp
@section('content')
    <section class="edu_page_title_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_page_title_text">
                        <h1>Profil Kami</h1>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="javascript:void(0);">Profil Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- About Section Start ----->
    <section class="edu_about_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="edu_about_img relative mb_30">
                        <img class="edu_about_big_img parallax" src="./SSF E-Learning _ Profil_files/page_4.jpg"
                            alt=""
                            style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <img class="edu_about_small_img parallax" src="./SSF E-Learning _ Profil_files/page_5.jpg"
                            alt="">
                        <span class="edu_about_time">Since 2012</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="edu_about_detail mb_30">
                        <h4 class="edu_subTitle">Tentang Kami</h4>
                        <h2 class="edu_heading">Smart School Foundation</h2>
                        <p class="mb-3">{{ $kontak->tentang }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Mission Section Start ----->
    <section class="edu_mission_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-12 text-center offset-lg-1">
                    <div class="edu_mission_text">
                        <h1 class="white">Kami siap membimbing Anda dari dasar hingga puncak.</h1>
                        <h6 class="white">Tunggu apa lagi? Mari bergabung bersama kami</h6>
                        <a href="/contact-us" class="edu_btn edu_white_btn">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Vission Section Start ----->
    <section class="edu_vission_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="edu_vission_detail mb_30">
                        <h4 class="edu_subTitle">Misi Kami adalah Memberikan yang Terbaik Bagi Anda</h4>
                        <h2 class="edu_heading">Mengapa Memilih Kami Dibanding dengan yang Lain?</h2>
                        <p class="mb-3">Misi kami adalah membantu Anda mencapai tingkat kepuasan Anda dalam belajar
                            berbahasa Inggris. Kami sudah membantu beragam kalangan baik dari SD sampai dengan Umum untuk
                            mencapai tingkat maksimum mereka.<br><br>Dengan bergabung pada kami, kami berharap untuk dapat
                            memberikan yang terbaik bagi Anda hingga tingkat kepuasan tertinggi Anda dalam proses belajar
                            berbahasa Inggris</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="edu_vission_img relative mb_30">
                        <img class="edu_vission_big_img parallax" src="./SSF E-Learning _ Profil_files/about.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
