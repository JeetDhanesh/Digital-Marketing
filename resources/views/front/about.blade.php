@extends('front.layout.app', ['title' => 'About'])

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
						<h1 class="text-anime-style-2" data-cursor="-opaque">About <span>us</span></h1>
						<nav class="wow fadeInUp">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">about us</li>
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
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Custom Branding</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Website Design</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Digital Marketing</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Strategy Consulting</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Analytics & Reporting</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Custom Branding</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Website Design</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Digital Marketing</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Strategy Consulting</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Analytics & Reporting</span>
            </div>

            <div class="scrolling-content">
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Custom Branding</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Website Design</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Digital Marketing</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Strategy Consulting</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Analytics & Reporting</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Custom Branding</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Website Design</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Digital Marketing</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Strategy Consulting</span>
                <span><img src="{{asset('assets/front/images/asterisk-icon.svg')}}" alt="">Analytics & Reporting</span>
            </div>
        </div>
    </div>
    <!-- Scrolling Ticker Section End -->

    <!-- About Agency Section Start -->
    <div class="about-agency">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- About Agency Content Start -->
                    <div class="about-agency-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about agency</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Crafting <span>unique digital</span> experiences that elevate your brand</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Section btn Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="contact.html" class="btn-default">Contact Us</a>
                        </div>
                        <!-- Section btn End -->
                    </div>
                    <!-- About Agency Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Agency List Start -->
                    <div class="about-agency-list">
                        <!-- About Agency Item Start -->
                        <div class="about-agency-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-about-agency-1.svg" alt="">
                            </div>
                            <div class="agency-item-content">
                                <h3>your success, our mission </h3>
                                <p>We measure our success by the success of our clients. With a focus on results and a dedication to quality, our mission is to deliver digital solutions that make a real impact. </p>
                            </div>
                        </div>
                        <!-- About Agency Item End -->

                        <!-- About Agency Item Start -->
                        <div class="about-agency-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{asset('assets/front/images/icon-about-agency-2.svg')}}" alt="">
                            </div>
                            <div class="agency-item-content">
                                <h3>creators of digital excellence </h3>
                                <p>At the core of our agency is a commitment to excellence and creativity. We specialize in crafting digital solutions that not only meet your needs but also elevate your brand.</p>
                            </div>
                        </div>
                        <!-- About Agency Item End -->

                        <!-- About Agency Item Start -->
                        <div class="about-agency-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{asset('assets/front/images/icon-about-agency-3.svg')}}" alt="">
                            </div>
                            <div class="agency-item-content">
                                <h3>innovating the digital landscape</h3>
                                <p>Founded on a passion for creativity and technology, we are a team of dedicated digital experts committed to transforming the way brands connect with audiences.</p>
                            </div>
                        </div>
                        <!-- About Agency Item End -->

                        <!-- About Agency Item Start -->
                        <div class="about-agency-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{asset('assets/front/images/icon-about-agency-4.svg')}}" alt="">
                            </div>
                            <div class="agency-item-content">
                                <h3>helping brands thrive online</h3>
                                <p>Our purpose is simple: to help brands succeed in the digital age. We're passionate about building strong relationships with our clients and crafting custom strategies that drive results. </p>
                            </div>
                        </div>
                        <!-- About Agency Item End -->
                    </div>
                    <!-- About Agency List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Approach Start -->
    <div class="our-approach">
        <div class="container">
            <div class="row align-items-center section-row">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our approach</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Crafting <span>impactful</span> digital experiences</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="col-lg-6">
                    <!-- Section Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>We blend creativity, strategy, and technology to design digital experiences that connect, engage, and inspire. From concept to completion, we deliver tailored solutions that elevate brands and drive results.</p>
                    </div>
                    <!-- Section Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Mission Vision Item Start -->
                    <div class="mission-vision-item wow fadeInUp">
                        <!-- Mission Vision Image Start -->
                        <div class="mission-vision-image">
                            <div class="mission-vision-img">
                                <figure class="image-anime">
                                    <img src="{{asset('assets/front/images/our-mission-img.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="icon-box">
                                <img src="{{asset('assets/front/images/icon-our-mission.svg')}}" alt="">
                            </div>
                        </div>
                        <!-- Mission Vision Image End -->

                        <!-- Mission Vision Content Start -->
                        <div class="mission-vision-content">
                            <h3>our mission</h3>
                            <p>Delivering transformative digital solutions that elevate brands  connections.</p>
                        </div>
                        <!-- Mission Vision Content End -->
                    </div>
                    <!-- Mission Vision Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Mission Vision Item Start -->
                    <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Mission Vision Image Start -->
                        <div class="mission-vision-image">
                            <div class="mission-vision-img">
                                <figure class="image-anime">
                                    <img src="{{asset('assets/front/images/our-vision-img.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="icon-box">
                                <img src="{{asset('assets/front/images/icon-our-vision.svg')}}" alt="">
                            </div>
                        </div>
                        <!-- Mission Vision Image End -->

                        <!-- Mission Vision Content Start -->
                        <div class="mission-vision-content">
                            <h3>our vision</h3>
                            <p>Shaping the future through innovative and impactful digital experiences.</p>
                        </div>
                        <!-- Mission Vision Content End -->
                    </div>
                    <!-- Mission Vision Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Mission Vision Item Start -->
                    <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Mission Vision Image Start -->
                        <div class="mission-vision-image">
                            <div class="mission-vision-img">
                                <figure class="image-anime">
                                    <img src="{{asset('assets/front/images/our-value-img.jpg')}}" alt="">
                                </figure>
                            </div>

                            <div class="icon-box">
                                <img src="{{asset('assets/front/images/icon-our-value.svg')}}" alt="">
                            </div>
                        </div>
                        <!-- Mission Vision Image End -->

                        <!-- Mission Vision Content Start -->
                        <div class="mission-vision-content">
                            <h3>our value</h3>
                            <p>Integrity, creativity, innovation, collaboration, excellence, results.</p>
                        </div>
                        <!-- Mission Vision Content End -->
                    </div>
                    <!-- Mission Vision Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach End -->

    <!-- Who We Are Start -->
    <div class="who-we-are">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Who We Are Content Start -->
                    <div class="who-we-are-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">who we are</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Experts in <span>digital</span> brand innovation</h2>
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
                                            <img src="{{asset('assets/front/images/experts-rating-video-bg.jpg')}}" alt="">
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
                                <div class="comapny-client-rating wow fadeInUp">
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
                                            <img src="{{asset('assets/front/images/satisfy-client-img-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{asset('assets/front/images/satisfy-client-img-2.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{asset('assets/front/images/satisfy-client-img-3.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{asset('assets/front/images/satisfy-client-img-4.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime reveal">
                                            <img src="{{asset('assets/front/images/satisfy-client-img-5.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Company Client Images End -->

                                <!-- Contact Now Button Start -->
                                <div class="contact-now-btn wow fadeInUp" data-wow-delay="0.2s">
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
                                    <img src="{{asset('assets/front/images/icon-who-we-are-counter-1.svg')}}" alt="">
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
                                    <img src="{{asset('assets/front/images/icon-who-we-are-counter-3.svg')}}" alt="">
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
                                    <img src="{{asset('assets/front/images/icon-who-we-are-counter-2.svg')}}" alt="">
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
                                    <img src="{{asset('assets/front/images/icon-who-we-are-counter-4.svg')}}" alt="">
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

    <!-- Executive Partners Start -->
    <div class="executive-partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Executive Partners Box Start -->
                    <div class="executive-partners-box">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">executive partners</h3>
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">100+ <span>partners</span> & supporters</h2>
                                </div>
                                <!-- Section Title End -->
                            </div>

                            <div class="col-lg-7">
                                <!-- Our Partners List Start -->
                                <div class="our-partners-list">
                                    <!-- Company Logo Start -->
                                    <div class="company-logo wow fadeInUp">
                                        <img src="{{asset('assets/front/images/company-logo-1.svg')}}" alt="">
                                    </div>
                                    <!-- Company Logo End -->

                                    <!-- Company Logo Start -->
                                    <div class="company-logo wow fadeInUp" data-wow-delay="0.2s">
                                        <img src="{{asset('assets/front/images/company-logo-2.svg')}}" alt="">
                                    </div>
                                    <!-- Company Logo End -->

                                    <!-- Company Logo Start -->
                                    <div class="company-logo wow fadeInUp" data-wow-delay="0.4s">
                                        <img src="{{asset('assets/front/images/company-logo-3.svg')}}" alt="">
                                    </div>
                                    <!-- Company Logo End -->

                                    <!-- Company Logo Start -->
                                    <div class="company-logo wow fadeInUp" data-wow-delay="0.6s">
                                        <img src="{{asset('assets/front/images/company-logo-4.svg')}}" alt="">
                                    </div>
                                    <!-- Company Logo End -->

                                    <!-- Company Logo Start -->
                                    <div class="company-logo wow fadeInUp" data-wow-delay="0.8s">
                                        <img src="{{asset('assets/front/images/company-logo-5.svg')}}" alt="">
                                    </div>
                                    <!-- Company Logo End -->

                                    <!-- Company Logo Start -->
                                    <div class="company-logo wow fadeInUp" data-wow-delay="1s">
                                        <img src="{{asset('assets/front/images/company-logo-6.svg')}}" alt="">
                                    </div>
                                    <!-- Company Logo End -->
                                </div>
                                <!-- Our Partners List End -->
                            </div>
                        </div>
                    </div>
                    <!-- Executive Partners Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Executive Partners End -->

    <!-- Our Features Start -->
    <div class="our-features">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">features</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Innovative <span>features</span> for your digital success</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Content Button Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Our digital services empower brands with innovative strategies and solutions for sustainable growth and engagement.</p>
                        </div>
                        <!-- Section Title Content End -->

                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="contact.html" class="btn-default">leran more</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                    <!-- Section Content Button End -->
                </div>
            </div>

            <div class="col-lg-12">
                <!-- Digital Features Box Start -->
                <div class="digital-features-box">
                    <!-- Digital Features Item Start -->
                    <div class="digital-features-item features-item-1 wow fadeInUp">
                        <!-- Digital Features Image Start -->
                        <div class="digital-features-image">
                            <figure class="image-anime">
                                <img src="{{asset('assets/front/images/digital-features-img-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Digital Features Image End -->

                        <!-- Digital Features Content Start -->
                        <div class="digital-features-content">
                            <h3>custom branding solutions</h3>
                            <p>Unique brand identity development, including logos, color palettes.</p>
                        </div>
                        <!-- Digital Features Content End -->
                    </div>
                    <!-- Digital Features Item End -->

                    <!-- Digital Features Item Start -->
                    <div class="digital-features-item features-item-2 wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Digital Features Image Start -->
                        <div class="digital-features-image">
                            <figure class="image-anime">
                                <img src="{{asset('assets/front/images/digital-features-img-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- Digital Features Image End -->

                        <!-- Digital Features Content Start -->
                        <div class="digital-features-content">
                            <h3>data-driven digital marketing</h3>
                            <p>Strategies combining SEO, PPC, content marketing</p>
                        </div>
                        <!-- Digital Features Content End -->
                    </div>
                    <!-- Digital Features Item End -->

                    <!-- Agency Support Start -->
                    <div class="digital-features-item agency-supports">
                        <!-- Agency Support Header Start -->
                        <div class="agency-supports-header">
                            <!-- Agency Support Content Start -->
                            <div class="agency-supports-content wow fadeInUp">
                                <h3>Content Creation and Strategy</h3>
                                <p>High-quality, engaging content across blogs, videos, and graphics designed to captivate and retain audiences.</p>
                            </div>
                            <!-- Agency Support Content End -->

                            <!-- Agency Free Consultation Start -->
                            <div class="agency-free-consultation">
                                <img src="{{asset('assets/front/images/free-consultation-circle.png')}}" alt="">
                            </div>
                            <!-- Agency Free Consultation End -->
                        </div>
                        <!-- Agency Support Header End -->

                        <!-- Agency Support Slider Start -->
                        <div class="agency-supports-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- Agency Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="agency-supports-logo">
                                            <img src="{{asset('assets/front/images/agency-supports-logo-1.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Agency Support Logo End -->

                                    <!-- Agency Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="agency-supports-logo">
                                            <img src="{{asset('assets/front/images/agency-supports-logo-2.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Agency Support Logo End -->

                                    <!-- Agency Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="agency-supports-logo">
                                            <img src="{{asset('assets/front/images/agency-supports-logo-3.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Agency Support Logo End -->

                                    <!-- Agency Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="agency-supports-logo">
                                            <img src="{{asset('assets/front/images/agency-supports-logo-4.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Agency Support Logo End -->

                                    <!-- Agency Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="agency-supports-logo">
                                            <img src="{{asset('assets/front/images/agency-supports-logo-5.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Agency Support Logo End -->

                                    <!-- Agency Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="agency-supports-logo">
                                            <img src="{{asset('assets/front/images/agency-supports-logo-6.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Agency Support Logo End -->

                                    <!-- Agency Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="agency-supports-logo">
                                            <img src="{{asset('assets/front/images/agency-supports-logo-3.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Agency Support Logo End -->

                                    <!-- Agency Support Logo Start -->
                                    <div class="swiper-slide">
                                        <div class="agency-supports-logo">
                                            <img src="{{asset('assets/front/images/agency-supports-logo-5.svg')}}" alt="">
                                        </div>
                                    </div>
                                    <!-- Agency Support Logo End -->
                                </div>
                            </div>
                        </div>
                        <!-- Agency Support Slider End -->
                    </div>
                    <!-- Agency Support End -->
                </div>
                <!-- Digital Features Box End -->
            </div>
        </div>
    </div>
    <!-- Our Features End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our team</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Dynamic <span>team</span> of digital experts</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Content Button Start -->
                    <div class="section-content-btn">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                            <p>Our digital services empower brands with innovative strategies and solutions for sustainable growth and engagement.</p>
                        </div>
                        <!-- Section Title Content End -->

                        <!-- Section Button Start -->
                        <div class="section-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="team.html" class="btn-default">view all member</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                    <!-- Section Content Button End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" class="image-anime">
                                <figure>
                                    <img src="{{asset('assets/front/images/team-1.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="team-single.html">sarah mitchell</a></h3>
                                <p>senior project manager</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" class="image-anime">
                                <figure>
                                    <img src="{{asset('assets/front/images/team-2.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="team-single.html">brooklyn simmons</a></h3>
                                <p>marketing director</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                 <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" class="image-anime">
                                <figure>
                                    <img src="{{asset('assets/front/images/team-3.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="team-single.html">emily davis</a></h3>
                                <p>product manager</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" class="image-anime">
                                <figure>
                                    <img src="{{asset('assets/front/images/team-4.jpg')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="team-single.html">jessica taylor</a></h3>
                                <p>communications specialist</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

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
                            <img src="{{asset('assets/front/images/why-choose-image.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Why Choose Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose us Section End -->

    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Read what they have to say about <span>working with us</span></h2>
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
                                    <img src="{{asset('assets/front/images/satisfy-client-img-1.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image">
                                <figure class="image-anime reveal">
                                    <img src="{{asset('assets/front/images/satisfy-client-img-2.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image">
                                <figure class="image-anime reveal">
                                    <img src="{{asset('assets/front/images/satisfy-client-img-3.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image">
                                <figure class="image-anime reveal">
                                    <img src="{{asset('assets/front/images/satisfy-client-img-4.jpg')}}" alt="">
                                </figure>
                            </div>
                            <div class="satisfy-client-image">
                                <figure class="image-anime reveal">
                                    <img src="{{asset('assets/front/images/satisfy-client-img-5.jpg')}}" alt="">
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
                                            <img src="{{asset('assets/front/images/icon-testimonial-logo.svg')}}" alt="">
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
                                                    <img src="images/author-1.jpg" alt="">
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
                                            <img src="{{asset('assets/front/images/icon-testimonial-logo.svg')}}" alt="">
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
                                                    <img src="{{asset('assets/front/images/author-2.jpg')}}" alt="">
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
                                <img src="{{asset('assets/front/images/icon-testimonial-benefits-1.svg')}}" alt="">
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
                                <img src="{{asset('assets/front/images/icon-testimonial-benefits-2.svg')}}" alt="">
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
                                <img src="{{asset('assets/front/images/icon-testimonial-benefits-3.svg')}}" alt="">
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
                                <img src="{{asset('assets/front/images/icon-testimonial-benefits-4.svg')}}" alt="">
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

    <!-- Our FAQs Start -->
    <div class="our-faqs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- FAQ Images Start -->
                    <div class="faq-images">
                        <!-- FAQ Img 1 Start -->
                        <div class="faq-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{asset('assets/front/images/faq-img-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- FAQ Img 1 End -->

                        <!-- FAQ Img 2 Start -->
                        <div class="faq-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{asset('assets/front/images/faq-img-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <!-- FAQ Img 2 End -->

                        <!-- FAQ CTA Box Start -->
                        <div class="faq-cta-box">
                            <a href="tel:308855314">
                                <img src="{{asset('assets/front/images/faq-cta-phone.svg')}}" alt="">(30) 8855-314
                            </a>
                        </div>
                        <!-- FAQ CTA Box End -->
                    </div>
                    <!-- FAQ Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our FAQ Section Start -->
                    <div class="our-faq-section">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">have any questions?</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Let us address your <span>questions</span> today!</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- FAQ Accordion Start -->
                        <div class="faq-accordion" id="faqaccordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        What services does your agency offer?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Project timelines vary based on complexity and scope. We provide a detailed timeline during the initial consultation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        How long does a typical project take?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Project timelines vary based on complexity and scope. We provide a detailed timeline during the initial consultation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        Do you work with small businesses?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Project timelines vary based on complexity and scope. We provide a detailed timeline during the initial consultation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->

                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Can you help with existing websites?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Project timelines vary based on complexity and scope. We provide a detailed timeline during the initial consultation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        </div>
                        <!-- FAQ Accordion End -->
                    </div>
                    <!-- Our FAQ Section End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our FAQs End -->
@endsection

@push('script')

@endpush
