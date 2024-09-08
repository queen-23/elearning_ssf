@extends('beranda.master')

@section('tittle', 'Kursus Tersedia')

@section('content')
    <!----- Page Title Start ----->
    <section class="edu_page_title_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_page_title_text">
                        <h1>Course Tersedia</h1>
                        <ul>
                            <li><a href="http://localhost/ta/">Beranda</a></li>
                            <li><a href="javascript:void(0);">Course Tersedia</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course info start -->
    <div class="edu_courseInfo_box edu-course-info-bedge">
        <img src="./SSF E-Learning _ Course Tersedia_files/course.png" alt="image">
        <p>2+ Courses</p>
    </div>
    <!-- course info end -->
    <!-- Search Course Start -->
    <div class="edu-search-course">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="edu-select-category">
                        <h3>Kategori</h3>
                        <ul>
                            <li class="edu-category-panel"><a name="cat_id" id="singleCatData" href="javascript:;"
                                    data-id="133">SMA</a>
                                <ul>
                                    <li class="edu-category-panel"><a id="singleCatData" href="javascript:;">10</a>
                                        <ul>
                                            <li><a href="http://localhost/ta/courses-details/14">MATEMATIKA</a></li>
                                        </ul>
                                    </li>
                                    <li class="edu-category-panel"><a id="singleCatData" href="javascript:;">11</a>
                                    </li>
                                    <li class="edu-category-panel"><a id="singleCatData" href="javascript:;">12</a>
                                        <ul>
                                            <li><a href="http://localhost/ta/courses-details/15">MATEMATIKA 10</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="edu-category-panel"><a name="cat_id" id="singleCatData" href="javascript:;"
                                    data-id="134">SMP</a> </li>

                            <li class="edu-category-panel"><a name="cat_id" id="singleCatData" href="javascript:;"
                                    data-id="135">SD</a> </li>

                            <li class="edu-category-panel"><a href="javascript:;">Other</a>


                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-4">
                    <form class="edu-search-form">
                        <input type="text" id="search_field" name="search_field" placeholder="Cari Course">
                        <span class="edu-search-icon">
                            <a href="javascript:;" id="search_button" name="search_button" placeholder="Cari Course"> <i
                                    class="fas fa-search"></i></a>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Course End -->
    <!-- Course start -->
    <div id="search_data_course">
        <div class="edu-course-wrap edu-course-search-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper"
                                style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="edu-course-box">
                                        <div class="edu-course-img">
                                            <img src="./SSF E-Learning _ Course Tersedia_files/wallpaperflare_com_wallpaper_231006163902.jpg"
                                                alt="image">

                                        </div>
                                        <div class="edu-course-content">
                                            <a href="http://localhost/ta/courses-details/14"
                                                class="edu-course-title">MATEMATIKA</a>
                                            <p>INI KELAS MATEMATIKA</p>
                                            <!--<ul class="edu-course-rating">-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--</ul>-->

                                            <a href="http://localhost/ta/courses-details/14" class="edu_courses_view">View
                                                More<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6">
                                    <div class="edu-course-box">
                                        <div class="edu-course-img">
                                            <img src="./SSF E-Learning _ Course Tersedia_files/pexels-pixabay-33787_231006181359.jpg"
                                                alt="image">

                                        </div>
                                        <div class="edu-course-content">
                                            <a href="http://localhost/ta/courses-details/15"
                                                class="edu-course-title">MATEMATIKA 10</a>
                                            <p>jbc</p>
                                            <!--<ul class="edu-course-rating">-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--    <li><i class="fas fa-star"></i></li>-->
                                            <!--</ul>-->

                                            <a href="http://localhost/ta/courses-details/15" class="edu_courses_view">View
                                                More<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="edu_banner_button">
                                <div class="ButtonNext" tabindex="0" role="button" aria-label="Next slide"><span
                                        class="icofont-simple-right"></span></div>
                                <div class="ButtonPrev" tabindex="0" role="button" aria-label="Previous slide"><span
                                        class="icofont-simple-left"></span></div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course end -->
@endsection
