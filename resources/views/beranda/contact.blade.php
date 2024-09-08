@extends('beranda.master')
@section('tittle', 'Kontak Kami')

@section('content')
    <section class="edu_page_title_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_page_title_text">
                        <h1>Kontak Kami</h1>
                        <ul>
                            <li><a href="http://localhost/ta/">Beranda</a></li>
                            <li><a href="javascript:void(0);">Kontak Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Contact Section Start ----->
    <section class="edu_contact_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="edu_heading_wrapper">
                        <h4 class="edu_subTitle">MARI BERGABUNG</h4>
                        <h4 class="edu_heading">Hubungi kami bila berminat di :</h4>
                        <img src="./SSF E-Learning _ Kontak Kami_files/border.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center"
                    onclick="window.open(&#39;https://wa.me/6281379523955&#39;, &#39;_blank&#39;);">
                    <div class="edu_contact_section">
                        <div class="edu_contact_section_inner">
                            <i class="icofont-ui-dial-phone"></i>
                            <h4>No. Telepon</h4>
                            <a href="tel:+081379523955">081379523955</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center"
                    onclick="window.open(&#39;https://maps.app.goo.gl/oPrEdc6vjPJdJcRc7&#39;, &#39;_blank&#39;);">
                    <div class="edu_contact_section">
                        <div class="edu_contact_section_inner">
                            <i class="icofont-map-pins"></i>
                            <h4>Alamat kami</h4>
                            <a>Jl, Karang Rejo, Kec. Semaka, Kabupaten Tanggamus, Lampung 35386</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <div class="edu_contact_section">
                        <div class="edu_contact_section_inner">
                            <i class="icofont-email"></i>
                            <h4>Email</h4>
                            <a href="mailto:smartschoolfoundation@gmail.com">smartschoolfoundation@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----- Map Section Start ----->
    <section class="edu_map_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                    <div class="edu_map_container">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
