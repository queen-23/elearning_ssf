@php
    $kontak = file_get_contents(base_path('public/data/kontak.json'));
    $kontak = json_decode($kontak, false);
@endphp
<footer class="edu_footer_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-12 mb_30">
                <div class="edu_widgets edu_footer_about">
                    <img class="footer_logo" src="/SSF E-Learning _ Beranda_files/nyamping_new1.png" alt="">
                    <p>{{ $kontak->tentang ?? '' }}</p>
                    <a class="edu_readMoreBtn" href="{{ url('/') }}/about-us">Baca Lebih</a>
                </div>
            </div>
            {{-- <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <div class="edu_widgets mb_30">
                    <div class="edu_footer_title">
                        <h4 class="edu_footer_heading">Course Kami</h4>
                        <img src="/SSF E-Learning _ Beranda_files/half_border.png" alt="">
                    </div>
                    <ul>
                        <li><a href="{{ url('/') }}/courses-details/14"><span>MATEMATIKA</span></a></li>
                        <li><a href="{{ url('/') }}/courses-details/15"><span>MATEMATIKA 10</span></a></li>
                        <li><a href="{{ url('/') }}/courses-details/"><span></span></a></li>
                        <li><a href="{{ url('/') }}/courses-details/"><span></span></a></li>
                        <li><a href="{{ url('/') }}/courses-details/"><span></span></a></li>
                        <li><a href="{{ url('/') }}/courses-details/"><span></span></a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <div class="edu_widgets mb_30">
                    <div class="edu_footer_title">
                        <h4 class="edu_footer_heading">Fasilitas</h4>
                        <img src="/SSF E-Learning _ Beranda_files/half_border.png" alt="">
                    </div>
                    <ul>
                        <li><span>Ruang AC</span></li>
                        <li><span>Ruangan Luas</span></li>
                        <li><span>Tentor-tentor terbaik</span></li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-4 col-12">
                <div class="edu_widgets mb_30">
                    <div class="edu_footer_title">
                        <h4 class="edu_footer_heading">Our links</h4>
                        <img src="/SSF E-Learning _ Beranda_files/half_border.png" alt="">
                    </div>
                    <ul>
                        <li><a href="{{ url('/') }}"><span>Beranda</span></a></li>
                        <li><a href="{{ url('/about-us') }}"><span>Profil Kami</span></a></li>
                        <li><a href="{{ url('/courses-offered') }}"><span>Course Tersedia</span></a></li>
                        <li><a href="{{ url('/gallery') }}"><span>Gallery</span></a></li>
                        <li><a href="{{ url('/facilities') }}"><span>Fasilitas</span></a></li>
                        <li><a href="{{ url('/contact-us') }}"><span>Kontak Kami</span></a></li>
                        <li><a href="{{ url('/privacy-policy') }}"><span>Privacy Policy</span></a></li>
                        <li><a href="{{ url('/term-condition') }}"><span>Terms &amp; Conditions</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb_30">
                <div class="edu_widgets edu_footer_address">
                    <div class="edu_footer_title">
                        <h4 class="edu_footer_heading">Kontak Kami</h4>
                        <img src="/SSF E-Learning _ Beranda_files/half_border.png" alt="">
                    </div>
                    <ul>
                        <li>
                            <div class="edu_footer_info">
                                <span>Alamat Kami:</span>
                                <a>{{ $kontak->alamat ?? '' }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="edu_footer_info">
                                <span>Nomor Kontak:</span>
                                <a href="tel:{{ $kontak->no_telp ?? '' }}">{{ $kontak->no_telp ?? '' }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="edu_footer_info">
                                <span>Alamat Email:</span>
                                <a href="mailto:{{ $kontak->email ?? '' }}">{{ $kontak->email ?? '' }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="edu_copyright_wrapper">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
            <p>Copyright © 2022 Smart School Foundation. All Right Reserved.</p>
        </div>
    </div>
</footer>
