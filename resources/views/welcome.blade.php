<x-guest-layout>
    <main>
        @include('partials.hero')

        <section class="about-us-area about-area-02 pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="about-img mb-30 wow fadeInUp2  animated" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            <div class="about-img__thumb">
                                <img src="assets/img/about/02.jpg" alt="">
                            </div>
                            <div class="about-img__style-text">
                                <img src="assets/img/about/02.png" alt="">
                            </div>
                            <div class="about-img__style-dot d-none d-lg-inline-block">
                                <img src="assets/img/shape/03.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-12">
                        <div class="about__wrapper about-wrapper-02 pl-70">
                            <div class="section-title text-left mb-50 wow fadeInUp2  animated" data-wow-delay=".1s"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                                <h6 class="left-line pl-75">Who We Are</h6>
                                <h2>Give Your Hand To<br>
                                    <span>The Right Place</span>
                                </h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
                                    ntium doloremque laudantium, totam rem aperiam, eaque ipsa quaab
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur
                                    magni dolores eos qui ratione</p>
                            </div>
                            <div class="inner-counters">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="counters d-flex mb-10 wow fadeInUp2  animated" data-wow-delay=".1s"
                                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                                            <div class="counters__icon mb-30"><i class="far fa-box-usd"></i></div>
                                            <div class="counters__content">
                                                <h3><span class="counter">3563</span>k</h3>
                                                <p>Global Partner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="counters d-flex mb-20 pl-35 wow fadeInUp2  animated"
                                            data-wow-delay=".1s"
                                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                                            <div class="counters__icon mb-30"><i class="far fa-business-time"></i></div>
                                            <div class="counters__content">
                                                <h3><span class="counter">79562</span>k</h3>
                                                <p>Founding Amount</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="theme_btn theme_btn_bg" href="about.html" data-animation="fadeInUp2"
                                data-delay=".1s">explore more <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-area heding-bg pos-rel pt-130 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-wrapper mb-30">
                            <div class="section-title white-title text-left mb-85 wow fadeInUp2  animated"
                                data-wow-delay=".1s"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                                <h6 class="left-line pl-75 pr-75">Faq</h6>
                                <h2>Frequently Asked Questions</h2>
                                <p>We have all your questions answered so you don't have to keep contacting us.</p>
                                <a class="theme_btn theme_btn_bg" href="{{ route('pages.contact') }}">contact us <i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="faq-content mb-30 wow fadeInUp2  animated" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            <div id="accordion">
                                @foreach ($faqs as $faq)
                                    <div class="card card-bg mb-15" style="background-image:url(assets/img/bg/06.jpg)">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapse{{ $loop->index }}" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    {{ $faq->question }}
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse{{ $loop->index }}" class="collapse show"
                                            aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>{{ $faq->response }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
