<footer class="footer-area heding-bg pos-rel pt-100" style="background-image:url({{ asset('assets/img/bg/02.png') }})">
    <div class="container">
        <div class="footer-bottom-area">
            <div class="row mb-30">
                <div class="col-xl-2 col-lg-3 col-md-6  wow fadeInUp2 animated" data-wow-delay='.1s'>
                    <div class="footer__widget mb-30">
                        <h5 class="semi-title mb-25">Quick Links</h5>
                        <ul class="fot-list">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Latest events</a></li>
                            <li><a href="#">How It Works</a></li>
                            <li><a href="#">News & articles</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                    <div class="footer__widget mb-30 pl-40">
                        <h5 class="semi-title mb-25">Our Project</h5>
                        <ul class="fot-list">
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Film & Video</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Games</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6  wow fadeInUp2 animated" data-wow-delay='.5s'>
                    <div class="footer__widget mb-25 pl-85">
                        <h5 class="semi-title mb-25">Our Project</h5>
                        <p class="mb-10">Perspi ciatis unde omnis iste nat
                            error sit voluptatem accusan</p>
                        <ul class="fot-list address-list">
                            <li><a href="#"><i class="far fa-map-marker-alt"></i> 250 Main Street, 2nd Floor,
                                    USA</a></li>
                            <li><a href="#"><i class="far fa-envelope"></i> <span class="__cf_email__"
                                        data-cfemail="daa9afaaaab5a8ae9abdb7bbb3b6f4b9b5b7">[email&#160;protected]</span></a>
                            </li>
                            <li><a href="#"><i class="far fa-phone-volume"></i> 888 (0123) 456 79</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6  wow fadeInUp2 animated" data-wow-delay='.7s'>
                    <div class="footer__widget fot_abot mb-30 pl-85">
                        <h5 class="semi-title mb-25">Donation Us</h5>
                        <p class="mb-30">Sed ut perspi ciatis unde omnis iste
                            natus error sit voluptatem accusantiu doloremque laudantiu totam</p>
                        <div class="subscribe-content foter-subscribe">

                            <form class="subscribe-form"
                                action="https://www.devsnews.com/template/fande/fande/form.php">
                                <input class="form-control" type="text" placeholder="Enter Your Email">
                                <button><i class="far fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--scroll-target-btn-->
        <a href="#top-menu" class="scroll-target"><i class="far fa-arrow-up"></i></a>
        <!--scroll-target-btn-->
        <div class="copy-right-area pt-30">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="footer-log mb-30">
                        <a href="index.html" class="footer-logo mb-30"><img
                                src="{{ asset('assets/img/logo/footer-logo1.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="copyright mb-30 text-md-right">
                        <p>© {{ now()->format('Y') }} {{ config('app.name') }}. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
