 <!----- Header Start ----->
 @php
     $kontak = file_get_contents(base_path('public/data/kontak.json'));
     $kontak = json_decode($kontak, false);
 @endphp
 <header>
     <div class="edu_header_top">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                     <div class="edu_social_wrapper">
                         <ul>
                             <li>Follow Us On</li>
                             <li><a href="{{ $kontak->facebook ?? '' }}" class="edu_social_icon" target="_blank"><i
                                         class="fab fa-facebook-f"></i></a></li>
                             <li><a href="{{ $kontak->youtube ?? '' }}" class="edu_social_icon" target="_blank"><i
                                         class="fab fa-youtube"></i></a>
                             </li>
                             <li><a href="{{ $kontak->instagram ?? '' }}" class="edu_social_icon" target="_blank"><i
                                         class="fab fa-instagram"></i></a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                     <div class="edu_header_info">
                         <ul>
                             <li>
                                 <a href="mailto:{{ $kontak->email ?? '' }}"><i
                                         class="fas fa-envelope"></i>{{ $kontak->email ?? '' }}</a>
                             </li>
                             <li>
                                 <a href="tel:{{ $kontak->no_telp ?? '' }}"><i
                                         class="fas fa-phone-volume"></i>{{ $kontak->no_telp ?? '' }}</a>
                             </li>
                             <li>
                                 <a href="{{ url('/') }}/login"><i class="fas fa-sign-in-alt"></i>Login</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="edu_header_wrapper">
         <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-lg-3 col-md-4 col-sm-4 col-10">
                     <div class="edu_logo">
                         <a href="{{ url('/') }}/"><img class="front_logo"
                                 src="/SSF E-Learning _ Beranda_files/nyamping_new1.png" alt="logo"></a>
                     </div>
                 </div>
                 <div class="col-lg-9 col-md-8 col-sm-8 col-2">
                     <div class="edu_main_menu main_menu_parent">
                         <!----- Header Menus ----->
                         <div class="edu_nav_items main_menu_wrapper text-right">
                             <ul>
                                 <li><a href="{{ url('/') }}/" class="active">Beranda</a></li>
                                 <li><a href="{{ url('/') }}/about-us">Profil</a></li>
                                 <li><a href="{{ url('/') }}/courses-offered">Course Kami</a></li>
                                 <li><a href="{{ url('/') }}/gallery">Gallery</a></li>
                                 {{-- <li class="has_submenu">
                                     <a href="javascript:void(0);">Galeri</a>
                                     <ul class="sub_menu">
                                         <li><a href="{{ url('/') }}/gallery">Foto</a></li>
                                         <li><a href="{{ url('/') }}/video-gallery">Video</a></li>
                                     </ul>
                                 </li> --}}
                                 <li><a href="{{ url('/') }}/facilities">Fasilitas</a></li>
                                 <li><a href="{{ url('/') }}/contact-us">Kontak Kami</a></li>
                             </ul>
                         </div>
                         <div class="menu_btn_wrap">
                             <a href="javascript:void(0);" class="menu_btn">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
