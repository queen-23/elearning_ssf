@extends('beranda.master')

@section('tittle', 'Gallery')
@php
    $gallery = file_get_contents(base_path('public/data/gallery.json'));
    $gallery = json_decode($gallery, false);
    $gallery = $gallery->data;
@endphp
@section('content')
    <!----- Page Title Start ----->
    <section class="edu_page_title_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_page_title_text">
                        <h1>Galeri Kami</h1>
                        <ul>
                            <li><a href="http://localhost/ta/gallery">Beranda</a></li>
                            <li><a href="javascript:void(0);">Galeri Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Gallery Section Start ----->
    <section class="edu_gallery_wrapper">
        <div class="container">
            <div class="row popup_gallery">
                <input type="hidden" id="baseUrlId" value="http://localhost/ta/">
                @foreach ($gallery as $item)
                    @if ($item->jenis == 'video')
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <iframe height="80%" src="{{ $item->link }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div class="edu_videoGalleryTitle pt-0">
                                <h5>{{ $item->judul }}</h5>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="edu_porfolio_section">
                                <img src="{{ url('/images/' . $item->file) }}" alt="">
                                <div class="edu_overlay">
                                    <a href="{{ url('/images/' . $item->file) }}" title=""><span
                                            class="icofont-search-2"></span></a>
                                </div>
                                <div class="edu_videoGalleryTitle">
                                    <h5>{{ $item->judul }}</h5>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
@endsection
