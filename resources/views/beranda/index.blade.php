@extends('beranda.master')

@section('tittle', 'Beranda')

@section('content')
    <!----- Banner Wraapper ----->
    <section class="edu_banner_wrapper relative">
        <div class="swiper-container homeBannerSlider swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-3789px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2"
                    style="width: 1263px;">
                    <div class="innerSliderWrap">
                        <div class="edu_banner_section"
                            style="background-image:url({{ url('/') }}/uploads/site_data/page_3.jpg)">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-12 text-center">
                                        <div class="edu_banner_text">
                                            <h4 class="edu_subTitle animation_ttl1">Mari Bergabung Bersama Kami
                                            </h4>
                                            <h1 class="animation_ttl2">Siap Membimbingmu Menuju Dunia Penuh
                                                Prestasi</h1>
                                            <p class="animation_ttl2">Tunggu apalagi, tertarik untuk bergabung?
                                                Kami bersedia menerima dan membimbing Anda kapanpun Anda mau.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 1263px;">
                    <div class="innerSliderWrap">
                        <div class="edu_banner_section"
                            style="background-image:url({{ url('/') }}/uploads/site_data/page.jpg)">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-12 text-center">
                                        <div class="edu_banner_text">
                                            <h4 class="edu_subTitle animation_ttl1">Welcome to SSF E-Learning</h4>
                                            <h1 class="animation_ttl2">"Be Smart with Our Private"</h1>
                                            <p class="animation_ttl2">Kami sudah berhasil membimbing beragam
                                                kalangan untuk dapat meningkatkan skill berbahasa Inggris mereka.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="width: 1263px;">
                    <div class="innerSliderWrap">
                        <div class="edu_banner_section"
                            style="background-image:url({{ url('/') }}/uploads/site_data/page_2.jpg)">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-12 text-center">
                                        <div class="edu_banner_text">
                                            <h4 class="edu_subTitle animation_ttl1">Ayo Bergabung</h4>
                                            <h1 class="animation_ttl2">Raih Prestasimu Bersama Kami</h1>
                                            <p class="animation_ttl2">Beragam prestasi oleh bimbingan kami sudah
                                                diperoleh. Tentunya dengan kerja keras dan bantuan dari bimbingan
                                                kami.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" style="width: 1263px;">
                    <div class="innerSliderWrap">
                        <div class="edu_banner_section"
                            style="background-image:url({{ url('/') }}/uploads/site_data/page_3.jpg)">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-12 text-center">
                                        <div class="edu_banner_text">
                                            <h4 class="edu_subTitle animation_ttl1">Mari Bergabung Bersama Kami
                                            </h4>
                                            <h1 class="animation_ttl2">Siap Membimbingmu Menuju Dunia Penuh
                                                Prestasi</h1>
                                            <p class="animation_ttl2">Tunggu apalagi, tertarik untuk bergabung?
                                                Kami bersedia menerima dan membimbing Anda kapanpun Anda mau.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0"
                    style="width: 1263px;">
                    <div class="innerSliderWrap">
                        <div class="edu_banner_section"
                            style="background-image:url({{ url('/') }}/uploads/site_data/page.jpg)">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 col-lg-10 col-md-10 col-sm-12 col-12 text-center">
                                        <div class="edu_banner_text">
                                            <h4 class="edu_subTitle animation_ttl1">Welcome to SSF E-Learning</h4>
                                            <h1 class="animation_ttl2">"Be Smart with Our Private"</h1>
                                            <p class="animation_ttl2">Kami sudah berhasil membimbing beragam
                                                kalangan untuk dapat meningkatkan skill berbahasa Inggris mereka.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <!----- Slider Arrows ----->
        <div class="edu_banner_button">
            <div class="ButtonNext" tabindex="0" role="button" aria-label="Next slide"><span
                    class="icofont-simple-right"></span></div>
            <div class="ButtonPrev" tabindex="0" role="button" aria-label="Previous slide"><span
                    class="icofont-simple-left"></span></div>
        </div>
    </section>
    <!----- Call To Action Start ----->
    <section class="edu_callToAction_wrapper">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="edu_callToAction_bg">
                        <div class="edu_callToAction_bg_inner">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-0 text-center">
                                <div class="edu_action_section counter_item">
                                    <i class="fas fa-user-graduate"></i>
                                    <h1><span class="count_no" data-to="54" data-speed="3000">54</span><span>+</span></h1>
                                    <p>Bimbingan Kami</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-0 text-center">
                                <div class="edu_action_section counter_item center">
                                    <i class="fas fa-users"></i>
                                    <h1><span class="count_no" data-to="100" data-speed="3000">100</span><span>+</span>
                                    </h1>
                                    <p>Jumlah Tentor</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-0 text-center">
                                <div class="edu_action_section counter_item">
                                    <i class="fas fa-award"></i>
                                    <h1><span class="count_no" data-to="10" data-speed="3000">10</span><span>+</span>
                                    </h1>
                                    <p>Tahun Telah Berdiri</p>
                                </div>
                            </div>
                        </div>
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
                        <img class="edu_about_big_img parallax" src="/SSF E-Learning _ Beranda_files/page_4.jpg"
                            alt="">
                        <img class="edu_about_small_img parallax" src="/SSF E-Learning _ Beranda_files/page_5.jpg"
                            alt="">
                        <span class="edu_about_time">Since2012</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="edu_about_detail mb_30">
                        <h4 class="edu_subTitle">Tentang Kami</h4>
                        <h2 class="edu_heading">Smart School Foundation</h2>
                        <p class="mb-3">Smart School Foundation adalah lembaga kursus bahasa Inggris yang
                            beralamat di Jl. Alim Ulama No. 1 Semaka Kabupaten Tanggamus. Smart School Foundation
                            sudah berdiri sejak tahun 2012. Jenjang pendidikan lembaga ini dimulai dari jenjang SD
                            sampai dengan Umum. Tersedia kelas dengan mekanisme offline dan online. Selain kelas
                            reguler, terdapat juga kelas prestasi untuk mengasah kemampuan dan minat bakat dalam
                            berbahasa Inggris.</p>
                        <a href="{{ url('/') }}/about-us" class="edu_btn">Baca Lebih</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Service Section Start ----->
    <section class="edu_services_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_heading_wrapper">
                        <h4 class="edu_subTitle">Fasilitas-fasilitas Kami</h4>
                        <h4 class="edu_heading">Tersedia</h4>
                        <img src="/SSF E-Learning _ Beranda_files/border.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="edu_services_section">
                        <div class="edu_services_section_inner">
                            <i class="&lt;i class=&quot;icofont-snow-alt&quot;&gt;&lt;/i&gt;"></i>
                            <h4>Ruang AC</h4>
                            <p>AC Dingin</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="edu_services_section">
                        <div class="edu_services_section_inner">
                            <i class="&lt;i class=&quot;icofont-resize&quot;&gt;&lt;/i&gt;"></i>
                            <h4>Ruangan Luas</h4>
                            <p>Beragam ruangan yang luas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="edu_services_section">
                        <div class="edu_services_section_inner">
                            <i class="&lt;i class=&quot;icofont-people&quot;&gt;&lt;/i&gt;"></i>
                            <h4>Tentor-tentor terbaik</h4>
                            <p>Tentor-tentor yang siap membimbing Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Selection Section Start ----->
    <section class="edu_selection_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_heading_wrapper">
                        <h4 class="edu_subTitle">Para Bimbingan Kami</h4>
                        <h4 class="edu_heading">Perkenalkan</h4>
                        <img src="/SSF E-Learning _ Beranda_files/border.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row extraMargin">
                        <div class="edu_selection_slider">
                            <div
                                class="swiper-container selectionSlider swiper-container-initialized swiper-container-horizontal">
                                <div class="swiper-wrapper"
                                    style="transform: translate3d(-2400px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                                        data-swiper-slide-index="0" style="width: 1170px; margin-right: 30px;">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="edu_selection_section">
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_section_inner">
                                                        <img src="/SSF E-Learning _ Beranda_files/kokomi.jpg"
                                                            alt="">
                                                        <div class="edu_selection_info">
                                                            <a href="javascript:void(0);">
                                                                <h4>Sangonomiya Kokomi</h4>
                                                            </a>
                                                            <p>Status <span>student</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="edu_selection_section">
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_section_inner">
                                                        <img src="/SSF E-Learning _ Beranda_files/ayaka.jpg"
                                                            alt="">
                                                        <div class="edu_selection_info">
                                                            <a href="javascript:void(0);">
                                                                <h4>Kamisato Ayaka</h4>
                                                            </a>
                                                            <p>Status <span>student</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="edu_selection_section">
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_section_inner">
                                                        <img src="/SSF E-Learning _ Beranda_files/childe.jpg"
                                                            alt="">
                                                        <div class="edu_selection_info">
                                                            <a href="javascript:void(0);">
                                                                <h4>Tatang Surtatang</h4>
                                                            </a>
                                                            <p>Status <span>student</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate-active swiper-slide-prev swiper-slide-duplicate-next"
                                        data-swiper-slide-index="0" style="width: 1170px; margin-right: 30px;">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="edu_selection_section">
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_section_inner">
                                                        <img src="/SSF E-Learning _ Beranda_files/kokomi.jpg"
                                                            alt="">
                                                        <div class="edu_selection_info">
                                                            <a href="javascript:void(0);">
                                                                <h4>Sangonomiya Kokomi</h4>
                                                            </a>
                                                            <p>Status <span>student</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="edu_selection_section">
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_section_inner">
                                                        <img src="/SSF E-Learning _ Beranda_files/ayaka.jpg"
                                                            alt="">
                                                        <div class="edu_selection_info">
                                                            <a href="javascript:void(0);">
                                                                <h4>Kamisato Ayaka</h4>
                                                            </a>
                                                            <p>Status <span>student</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="edu_selection_section">
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_section_inner">
                                                        <img src="/SSF E-Learning _ Beranda_files/childe.jpg"
                                                            alt="">
                                                        <div class="edu_selection_info">
                                                            <a href="javascript:void(0);">
                                                                <h4>Tatang Surtatang</h4>
                                                            </a>
                                                            <p>Status <span>student</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-active swiper-slide-duplicate-prev"
                                        data-swiper-slide-index="0" style="width: 1170px; margin-right: 30px;">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="edu_selection_section">
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_section_inner">
                                                        <img src="/SSF E-Learning _ Beranda_files/kokomi.jpg"
                                                            alt="">
                                                        <div class="edu_selection_info">
                                                            <a href="javascript:void(0);">
                                                                <h4>Sangonomiya Kokomi</h4>
                                                            </a>
                                                            <p>Status <span>student</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="edu_selection_section">
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_section_inner">
                                                        <img src="/SSF E-Learning _ Beranda_files/ayaka.jpg"
                                                            alt="">
                                                        <div class="edu_selection_info">
                                                            <a href="javascript:void(0);">
                                                                <h4>Kamisato Ayaka</h4>
                                                            </a>
                                                            <p>Status <span>student</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="edu_selection_section">
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_cap">
                                                        <i class="fas fa-graduation-cap"></i>
                                                    </div>
                                                    <div class="edu_selection_section_inner">
                                                        <img src="/SSF E-Learning _ Beranda_files/childe.jpg"
                                                            alt="">
                                                        <div class="edu_selection_info">
                                                            <a href="javascript:void(0);">
                                                                <h4>Tatang Surtatang</h4>
                                                            </a>
                                                            <p>Status <span>student</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            <!----- Selection Bullets ----->
                            <div class="swiperPagination swiper-pagination-clickable swiper-pagination-bullets">
                                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                    role="button" aria-label="Go to slide 1"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!----- Courses Section ----->
    <section class="edu_courses_wrapper edu_courses_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_heading_wrapper">
                        <h4 class="edu_subTitle">KAMI SIAP MEMBIMBING ANDA</h4>
                        <h4 class="edu_heading white">Course Kami</h4>
                        <img src="/SSF E-Learning _ Beranda_files/border.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 padder0">
                    <div class="edu_courses_section">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/') }}/#courseType1" role="tab"
                                    data-toggle="tab">
                                    <span class="edu_tab_icons">
                                        MATEMATIKA 10
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('/') }}/#courseType2" role="tab"
                                    data-toggle="tab">
                                    <span class="edu_tab_icons">
                                        MATEMATIKA
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('/') }}/courses-offered">
                                    <span class="edu_tab_icons">
                                        More Courses
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Team Section Start ----->
    <section class="edu_team_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_heading_wrapper">
                        <h4 class="edu_subTitle">Para Tentor</h4>
                        <h4 class="edu_heading">Perkenalkan</h4>
                        <img src="/SSF E-Learning _ Beranda_files/border.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row extraMargin">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                    <div class="team_slider swiper-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper"
                            style="transform: translate3d(-1800px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-slide-index="2" style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/ascended_shaq.jpg" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Shaq Bangkit</a>
                                        <h6>Bachelor of English Murica</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="3" style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/kau.jpg" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Aqua</a>
                                        <h6>Magister of Mulut Anda Kotor</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/itera1.png" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Ahmad HohoHihi</a>
                                        <h6>SMA</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5"
                                style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/pexels-pixabay-337871.jpg"
                                            alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">aji</a>
                                        <h6></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="0"
                                style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/pexels-pixabay-33787.jpg"
                                            alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Shaq O Neal</a>
                                        <h6>Bachelor of English British</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1"
                                style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/posessed_shaq.jpg" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Shaq Kesurupan</a>
                                        <h6>Bachelor of English Japanese</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2"
                                style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/ascended_shaq.jpg" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Shaq Bangkit</a>
                                        <h6>Bachelor of English Murica</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3"
                                style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/kau.jpg" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Aqua</a>
                                        <h6>Magister of Mulut Anda Kotor</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="4"
                                style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/itera1.png" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Ahmad HohoHihi</a>
                                        <h6>SMA</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="5"
                                style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/pexels-pixabay-337871.jpg"
                                            alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">aji</a>
                                        <h6></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"
                                style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/pexels-pixabay-33787.jpg"
                                            alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Shaq O Neal</a>
                                        <h6>Bachelor of English British</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                data-swiper-slide-index="1" style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/posessed_shaq.jpg" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Shaq Kesurupan</a>
                                        <h6>Bachelor of English Japanese</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-slide-index="2" style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/ascended_shaq.jpg" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Shaq Bangkit</a>
                                        <h6>Bachelor of English Murica</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="3" style="width: 270px; margin-right: 30px;">
                                <div class="edu_team_section">
                                    <div class="edu_team_img">
                                        <img src="/SSF E-Learning _ Beranda_files/kau.jpg" alt="">
                                    </div>
                                    <div class="edu_team_identity text-center">
                                        <a href="javascript:void(0);">Aqua</a>
                                        <h6>Magister of Mulut Anda Kotor</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="swiperTeamPagination swiper-pagination-clickable swiper-pagination-bullets"><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 2"></span><span
                            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet"
                            tabindex="0" role="button" aria-label="Go to slide 4"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 6"></span></div>
                </div>
            </div>
        </div>
    </section>
    <!----- Testimonial Section ----->
    <section class="edu_testimonial_wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_heading_wrapper">
                        <h4 class="edu_subTitle">REVIEW OLEH BIMBINGAN</h4>
                        <h4 class="edu_heading">Apa yang bimbingan kami katakan?</h4>
                        <img src="/SSF E-Learning _ Beranda_files/border.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="edu_testimonials_section">
                        <div
                            class="swiper-container testimonial_slider swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper"
                                style="transform: translate3d(-5700px, 0px, 0px); transition-duration: 1000ms;">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                    data-swiper-slide-index="4" style="width: 1110px; margin-right: 30px;">
                                    <div class="edu_testimonial_section">
                                        <div class="edu_client_img">
                                            <span class="edu_testimonial_icon">
                                                <i class="icofont-quote-left"></i>
                                            </span><img src="/SSF E-Learning _ Beranda_files/childe.jpg" alt="">
                                            <div class="edu_client_quote">
                                                <h4>Tatang Surtatang</h4>
                                            </div>
                                        </div>
                                        <p>Menurut kitab Tatang Sutarman, nenek moyang gwe, Bimbel disini mantap
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0"
                                    style="width: 1110px; margin-right: 30px;">
                                    <div class="edu_testimonial_section">
                                        <div class="edu_client_img">
                                            <span class="edu_testimonial_icon">
                                                <i class="icofont-quote-left"></i>
                                            </span><img src="/SSF E-Learning _ Beranda_files/zhongli.jpg" alt="">
                                            <div class="edu_client_quote">
                                                <h4>Datuk Bokek</h4>
                                            </div>
                                        </div>
                                        <p>Osmanthus Wine taste the same as I remember, but where are Those Who
                                            Share The Memory? </p>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="1"
                                    style="width: 1110px; margin-right: 30px;">
                                    <div class="edu_testimonial_section">
                                        <div class="edu_client_img">
                                            <span class="edu_testimonial_icon">
                                                <i class="icofont-quote-left"></i>
                                            </span><img src="/SSF E-Learning _ Beranda_files/kokomi.jpg" alt="">
                                            <div class="edu_client_quote">
                                                <h4>Sangonomiya Kokomi</h4>
                                            </div>
                                        </div>
                                        <p>AKMJ, Asik Keren Mantap Jiwa </p>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="2"
                                    style="width: 1110px; margin-right: 30px;">
                                    <div class="edu_testimonial_section">
                                        <div class="edu_client_img">
                                            <span class="edu_testimonial_icon">
                                                <i class="icofont-quote-left"></i>
                                            </span><img src="/SSF E-Learning _ Beranda_files/hutao.jpg" alt="">
                                            <div class="edu_client_quote">
                                                <h4>Hu Tao</h4>
                                            </div>
                                        </div>
                                        <p>Gokil </p>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3"
                                    style="width: 1110px; margin-right: 30px;">
                                    <div class="edu_testimonial_section">
                                        <div class="edu_client_img">
                                            <span class="edu_testimonial_icon">
                                                <i class="icofont-quote-left"></i>
                                            </span><img src="/SSF E-Learning _ Beranda_files/ayaka.jpg" alt="">
                                            <div class="edu_client_quote">
                                                <h4>Kamisato Ayaka</h4>
                                            </div>
                                        </div>
                                        <p>Reflek Turu </p>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4"
                                    style="width: 1110px; margin-right: 30px;">
                                    <div class="edu_testimonial_section">
                                        <div class="edu_client_img">
                                            <span class="edu_testimonial_icon">
                                                <i class="icofont-quote-left"></i>
                                            </span><img src="/SSF E-Learning _ Beranda_files/childe.jpg" alt="">
                                            <div class="edu_client_quote">
                                                <h4>Tatang Surtatang</h4>
                                            </div>
                                        </div>
                                        <p>Menurut kitab Tatang Sutarman, nenek moyang gwe, Bimbel disini mantap
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next"
                                    data-swiper-slide-index="0" style="width: 1110px; margin-right: 30px;">
                                    <div class="edu_testimonial_section">
                                        <div class="edu_client_img">
                                            <span class="edu_testimonial_icon">
                                                <i class="icofont-quote-left"></i>
                                            </span><img src="/SSF E-Learning _ Beranda_files/zhongli.jpg" alt="">
                                            <div class="edu_client_quote">
                                                <h4>Datuk Bokek</h4>
                                            </div>
                                        </div>
                                        <p>Osmanthus Wine taste the same as I remember, but where are Those Who
                                            Share The Memory? </p>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <!----- Slider Dots ----->
                        <div class="swiperTestimonialPagination swiper-pagination-clickable swiper-pagination-bullets">
                            <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 3"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 4"></span><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 5"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Partner Start ----->
    <section class="edu_partner_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="partner_slider swiper-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper"
                            style="transform: translate3d(-2000px, 0px, 0px); transition-duration: 2000ms;">
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/011.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/021.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/031.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                data-swiper-slide-index="3" style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/041.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-slide-index="4" style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/051.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="5" style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/063.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="0"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/011.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="1"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/021.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="2"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/031.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/041.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/051.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="5"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/063.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/011.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/021.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/031.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                data-swiper-slide-index="3" style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/041.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-slide-index="4" style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/051.png"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="5" style="width: 170px; margin-right: 30px;">
                                <div class="edu_partners_container mb_30 text-center">
                                    <a href="javascript:void(0);"><img src="/SSF E-Learning _ Beranda_files/063.png"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
