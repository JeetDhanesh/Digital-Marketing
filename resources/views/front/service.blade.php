 @extends('front.layout.app', ['title' => 'Service'])

@push('style')

@endpush

@section('content')
 <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>services</span></h1>
						<nav class="wow fadeInUp">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">services</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Scrolling Ticker Section Start -->
    <div class="our-scrolling-ticker subpages-scrolling-ticker">
        <!-- Scrolling Ticker Start -->
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Custom Branding</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Website Design</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Digital Marketing</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Strategy Consulting</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Analytics & Reporting</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Custom Branding</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Website Design</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Digital Marketing</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Strategy Consulting</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Analytics & Reporting</span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Custom Branding</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Website Design</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Digital Marketing</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Strategy Consulting</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Analytics & Reporting</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Custom Branding</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Website Design</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Digital Marketing</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Strategy Consulting</span>
                <span><img src="{{ asset('assets/front/images/asterisk-icon.svg')}}" alt="">Analytics & Reporting</span>
            </div>
        </div>
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- Page Services Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">
                @foreach($services as $key => $service)
            <div class="col-lg-4 col-md-6">
                <div class="service-item wow fadeInUp" data-wow-delay="{{ $key * 0.2 }}s">
                    <div class="service-item-header">
                        <div class="icon-box">
                             <img src="{{ asset('uploads/services/'.$service->icon) }}" alt="{{ $service->title }}">
                        </div>

                        <div class="service-arrow">
                            <a href="{{ $service->link ?? '#' }}"><img src="{{ asset('assets/front/images/arrow-accent.svg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="service-item-body">
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Page Services End -->

    <!-- Why Choose us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">why choose</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Expertise for <span>your digital</span> growth journey</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Our dedicated team is committed to understanding your unique needs, ensuring that we provide innovative strategies that drive results. With a focus on quality and integrity.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item active wow fadeInUp">
                            <h3>Data-driven Approach</h3>
                            <p>We leverage data and insights to make informed decisions that lead to more effective and efficient solutions.</p>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                            <h3>Competitive Pricing</h3>
                            <p>We offer our top-quality services at competitive prices, providing you with great value for your investment.</p>
                        </div>
                        <!-- Why Choose Item End -->

                        <!-- Why Choose Item Start -->
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                            <h3>Ethical Business Practices</h3>
                            <p>We maintain the highest level of professionalism and ethical standards professionalism in all our business dealings.</p>
                        </div>
                        <!-- Why Choose Item End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/front/images/why-choose-image.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose us Section End -->

    <!-- Who We Are Start -->
    <div class="who-we-are service-we-are">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Who We Are Content Start -->
                    <div class="who-we-are-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">who we are</h3>
                            <h2 class="text-anime-style-2">Experts in <span>digital</span> brand innovation</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in transforming brands through cutting-edge digital strategies, blending creativity with technology to drive growth, enhance engagement, and deliver memorable experiences.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Experts Rating Video Start -->
                        <div class="experts-rating-video">
                            <!-- Experts Rating Video Image Start -->
                            <div class="experts-rating-video-image">
                                <!-- Video Image Start -->
                                <div class="video-image">
                                    <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/front/images/experts-rating-video-bg.jpg')}}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <!-- Video Image End -->

                                <!-- Video Play Button Start -->
                                <div class="video-play-button">
                                    <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                                <!-- Video Play Button End -->
                            </div>
                            <!-- Experts Rating Video Image End -->

                            <!-- Who We Are Company Client Start -->
                            <div class="who-we-are-client">
                                <div class="comapny-client-rating">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                    </ul>
                                    <p>( <span class="counter">40</span>+ Reviews)</p>
                                </div>

                                <!-- Company Client Images Start -->
                                <div class="company-client-images">
                                    <div class="client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/front/images/satisfy-client-img-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/front/images/satisfy-client-img-2.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/front/images/satisfy-client-img-3.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/front/images/satisfy-client-img-4.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{ asset('assets/front/images/satisfy-client-img-5.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Company Client Images End -->

                                <!-- Contact Now Button Start -->
                                <div class="contact-now-btn wow fadeInUp">
                                    <a href="contact.html" class="contact-btn">contact now</a>
                                </div>
                                <!-- Contact Now Button End -->
                            </div>
                            <!-- Who We Are Company Client End -->
                        </div>
                        <!-- Experts Rating Video End -->
                    </div>
                    <!-- Who We Are Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Experts Counter List Start -->
                    <div class="experts-counters-list">
                        <!-- Experts Counter Box Start -->
                        <div class="experts-counter-box expert-box-1">
                            <!-- Experts Counter Item Start -->
                            <div class="experts-counter-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/front/images/icon-who-we-are-counter-1.svg')}}" alt="">
                                </div>
                                <div class="experts-counter-content">
                                    <h2><span class="counter">35</span>k+</h2>
                                    <p>Happy Customer Around the Word</p>
                                </div>
                            </div>
                            <!-- Experts Counter Item End -->

                            <!-- Experts Counter Item Start -->
                            <div class="experts-counter-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/front/images/icon-who-we-are-counter-3.svg')}}" alt="">
                                </div>
                                <div class="experts-counter-content">
                                    <h2><span class="counter">250</span>+</h2>
                                    <p>trusted best partners and sponsers</p>
                                </div>
                            </div>
                            <!-- Experts Counter Item End -->
                        </div>
                        <!-- Experts Counter Box End -->

                        <!-- Experts Counter Box Start -->
                        <div class="experts-counter-box expert-box-2">
                            <!-- Experts Counter Item Start -->
                            <div class="experts-counter-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/front/images/icon-who-we-are-counter-2.svg')}}" alt="">
                                </div>
                                <div class="experts-counter-content">
                                    <h2><span class="counter">120</span>+</h2>
                                    <p>best client support award achieved</p>
                                </div>
                            </div>
                            <!-- Experts Counter Item End -->

                            <!-- Experts Counter Item Start -->
                            <div class="experts-counter-item">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/front/images/icon-who-we-are-counter-4.svg')}}" alt="">
                                </div>
                                <div class="experts-counter-content">
                                    <h2><span class="counter">5</span>k+</h2>
                                    <p>active users using our best services</p>
                                </div>
                            </div>
                            <!-- Experts Counter Item End -->
                        </div>
                        <!-- Experts Counter Box End -->
                    </div>
                    <!-- Experts Counter List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Who We Are End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="text-anime-style-2">Read what they have to say about <span>working with us</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Section Content Button Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Discover how our clients have achieved success through our innovative solutions and dedicated support.</p>
                        </div>
                        <!-- Section Title Content End -->

                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="testimonial.html" class="btn-default">all testimonials</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                    <!-- Section Content Button End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4">
                    <!-- Testimonial Review Box Start -->
                    <div class="testimonial-review-box">
                        <!-- Testimonial Review Header Start -->
                        <div class="testimonial-review-header">
                            <h2><span class="counter">4.9</span></h2>
                            <div class="testimonial-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p>(40+ Reviews)</p>
                        </div>
                        <!-- Testimonial Review Header End -->

                        <!-- Testimonial Review Content Start -->
                        <div class="testimonial-review-content wow fadeInUp">
                            <h3>Customer experiences that speak for themselves</h3>
                        </div>
                        <!-- Testimonial Review Content End -->

                        <!-- Testimonial Review Image Start -->
                        <div class="testimonial-review-image">
                            <div class="satisfy-client-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/front/images/satisfy-client-img-1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/front/images/satisfy-client-img-2.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/front/images/satisfy-client-img-3.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/front/images/satisfy-client-img-4.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('assets/front/images/satisfy-client-img-5.jpg')}}" alt="">
                                </figure>
                            </div>
                        </div>
                        <!-- Testimonial Review Image End -->
                    </div>
                    <!-- Testimonial Review Box End -->
                </div>

                <div class="col-lg-8">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-company-logo">
                                            <img src="{{ asset('assets/front/images/icon-testimonial-logo.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>The team transformed our brand's online presence with creativity and precision. The results exceeded our expectations! Their digital marketing strategies helped us reach a broader audience and significantly boosted our sales.</p>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/front/images/author-1.jpg')}}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Sarah Mitchell</h3>
                                                <p>Marketing Director</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-company-logo">
                                            <img src="{{ asset('assets/front/images/icon-testimonial-logo.svg')}}" alt="">
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>The team transformed our brand's online presence with creativity and precision. The results exceeded our expectations! Their digital marketing strategies helped us reach a broader audience and significantly boosted our sales.</p>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/front/images/author-2.jpg')}}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>Sarah Mitchell</h3>
                                                <p>Marketing Director</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>

                <div class="col-lg-12">
                    <!-- Testimonial Benefits Box Start -->
                    <div class="testimonial-benefits-box">
                        <!-- Testimonial Benefits Item Start -->
                        <div class="testimonial-benefits-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('assets/front/images/icon-testimonial-benefits-1.svg')}}" alt="">
                            </div>
                            <div class="testimonial-benefits-content">
                                <h3>Low Cost</h3>
                                <ul>
                                    <li>Competitive fee</li>
                                    <li>Flexible rates</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Testimonial Benefits Item End -->

                        <!-- Testimonial Benefits Item Start -->
                        <div class="testimonial-benefits-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/front/images/icon-testimonial-benefits-2.svg')}}" alt="">
                            </div>
                            <div class="testimonial-benefits-content">
                                <h3>Permission Less</h3>
                                <ul>
                                    <li>Open for integration</li>
                                    <li>Run your own nodes</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Testimonial Benefits Item End -->

                        <!-- Testimonial Benefits Item Start -->
                        <div class="testimonial-benefits-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/front/images/icon-testimonial-benefits-3.svg')}}" alt="">
                            </div>
                            <div class="testimonial-benefits-content">
                                <h3>Secure Data</h3>
                                <ul>
                                    <li>Open source sheet</li>
                                    <li>360 Security</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Testimonial Benefits Item End -->

                        <!-- Testimonial Benefits Item Start -->
                        <div class="testimonial-benefits-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/front/images/icon-testimonial-benefits-4.svg')}}" alt="">
                            </div>
                            <div class="testimonial-benefits-content">
                                <h3>24 X 7 Support</h3>
                                <ul>
                                    <li>Toll free number</li>
                                    <li>Ticket systems</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Testimonial Benefits Item End -->
                    </div>
                    <!-- Testimonial Benefits Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->
@endsection

@push('script')

@endpush
