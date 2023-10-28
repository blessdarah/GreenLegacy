    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->
    <!-- header-area start -->
    <header id="top-menu" class="transparent-head">
        <div class="header-top-area heding-bg pt-15 pb-15 d-none d-lg-block">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="top-cta">
                            <span class="media-link">
                                <i class="far fa-envelope"></i>
                                <a href="mailto:support@gmail.com" class="__cf_email__">support@gmail.com</a>
                            </span>
                            <span class="media-link">
                                <i class="far fa-map-marker-alt"></i> Company address
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-flex justify-content-end">
                        <div class="login-area">
                            <a class="media-link" href="/admin"><i class="far fa-lock-alt"></i> Login</a>
                        </div>
                        <div class="top-right-nav">
                            <ul>
                                <li> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-area">
            <div class="container custom-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                        <div class="logo">
                            <a class="logo-img" href="{{ route('pages.welcome') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="logo" style="height: 7rem;" />
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-9 d-none d-lg-block text-lg-center text-xl-right">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <x-nav-link routeName="pages.welcome" label="Home" />
                                    <x-nav-link routeName="pages.about" label="About us" />
                                    <x-nav-link routeName="pages.services" label="Services" />
                                    <x-nav-link routeName="pages.projects" label="Project" />
                                    <x-nav-link routeName="pages.blog" label="Blog" />
                                    <x-nav-link routeName="pages.contact" label="Contact us" />
                                    {{-- <li> --}}
                                    {{--     <a href="{{ route('pages.about') }}">About</a> --}}
                                    {{--     <ul class="submenu"> --}}
                                    {{--         <li><a href="events.html">Events Grid</a></li> --}}
                                    {{--         <li><a href="events-details.html">Events Details</a></li> --}}
                                    {{--     </ul> --}}
                                    {{-- </li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-1 col-md-6 col-6 text-right">
                        <div class="hamburger-menu d-lg-block d-xl-none">
                            <a href="javascript:void(0);">
                                <i class="far fa-bars"></i>
                            </a>
                        </div>
                        <div class="quote-btn d-none d-xl-block">
                            <a href="{{ route('pages.contact') }}" class="theme_btn theme_btn_bg">Donate <i
                                    class="fas fa-coins"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->

    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
        </div>

        <!-- offset-sidebar start -->
        <div class="offset-sidebar">
            <div class="offset-widget offset-logo mb-30">
                <a href="{{ route('pages.welcome') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="logo">
                </a>
            </div>
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <h4 class="offset-title mb-20">About Us</h4>
                    <p class="mb-30">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and will give you a complete account of the system and expound the actual teachings of
                        the great explore
                    </p>
                    <a class="theme_btn theme_btn_bg" href="contact.html">Contact Us</a>
                </div>
            </div>
            <div class="offset-widget mb-30 pr-10">
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20">Contact Info</h4>
                    <p> <i class="fal fa-address-book"></i> 23/A, Miranda City Likaoli Prikano, Dope</p>
                    <p> <i class="fal fa-phone"></i> +0989 7876 9865 9 </p>
                    <p> <i class="fal fa-envelope-open"></i> <a
                            href="https://www.devsnews.com/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="93fafdf5fcd3f6ebf2fee3fff6bdf0fcfe">[email&#160;protected]</a> </p>
                </div>
            </div>
        </div>
        <!-- offset-sidebar end -->

        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
                <x-nav-link routeName="pages.welcome" label="Home" />
                <x-nav-link routeName="pages.about" label="About us" />
                <x-nav-link routeName="pages.services" label="Services" />
                <x-nav-link routeName="pages.projects" label="Project" />
                <x-nav-link routeName="pages.blog" label="Blog" />
                <x-nav-link routeName="pages.contact" label="Contact us" />
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>
    <div class="body-overlay"></div>
