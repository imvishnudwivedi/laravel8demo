@extends('website.layouts.main')


@section('page_title', 'Sivaltech - About Page')

@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')


@section('content')
    
    <div class="explor-page comn-page-wrapper">
        <div class="bg-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Explore Us</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="explor-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-10 offset-md-2 offset-lg-2 mx-auto">
                    <div class="explor-heading">
                        <h3>We create delightful digital </h3>
                    </div>
                    <div class="row ex-row">
                        <div class="col-md-6 col-lg-6 ex-row-p">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elity sed do eiusmod tempor inc ididunt labore east dolore magna you  aliqua. Ulter enim ad minim veniam to quis nostrud exercita.</p>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elity sed do eiusmod tempor inc ididunt labore east dolore magna you  aliqua. Ulter enim ad minim veniam to quis nostrud exercita.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--========//:What we do part start://=============-->
    <div class="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5">
                    <div class="section-title">
                        <span>WHAT WE DO</span>
                        
                    </div>
                    <div class="owl-carousel what-do">
                        <div >
                            <h3>We build digital product and develop them</h3>
                            <p class="para">
                                Lorem ipsum dolor sit amet consectetur adipisicing elity sed do eiusmod tempor inc ididunt labore east dolore magna you aliqua. Ulter enim ad minim veniam to quis nostrud exercita tion ullamco laboris nisi.
                            </p>
                        </div>
                        <div >
                            <h3>We build digital product and develop them</h3>
                            <p class="para">
                                Lorem ipsum dolor sit amet consectetur adipisicing elity sed do eiusmod tempor inc ididunt labore east dolore magna you aliqua. Ulter enim ad minim veniam to quis nostrud exercita tion ullamco laboris nisi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="what-right">
                        <div class="over-pic">
                            <img src="{{ asset("/website/assets/images/over-pic-logo.svg") }}" class="img-thumbnail" alt="what img">
                        </div>
                        <div class="what-we-picture">
                            <img src="{{ asset("/website/assets/images/home-page/what.jpg") }}" class="img-thumbnail" alt="what img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--========//:Our Service part start://=============-->
    <div class="our-servies">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 mx-auto">
                    <div class="section-title text-center">
                        <span class="se-title">OUR SERVECES</span>
                        <h3>Digital product & Marketing Service </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elity sed do </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="single-1 v2-single-2">
                        <div class="service-flat-icon">
                            <i class="flaticon-pyramid"></i>
                        </div>
                        <div class="servics-content">
                            <h3>UI/UX design</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elity sed do eiusmod tempor inc ididunt labore east</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single-1 v2-single-2">
                        <div class="service-flat-icon">
                            <i class="flaticon-laptop"></i>
                        </div>
                        <div class="servics-content">
                            <h3>Devlopment</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elity sed do eiusmod tempor inc ididunt labore east.</p>
                        </div>
                    </div>
                </div>
                <!-- single services one end -->
                <div class="col-md-6 col-lg-6">
                    <div class="single-1 v2-single-2">
                        <div class="service-flat-icon">
                            <i class="flaticon-promotion"></i>
                        </div>
                        <div class="servics-content">
                            <h3>Digital marketing</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elity sed do eiusmod tempor inc ididunt labore east.</p>
                        </div>
                    </div>
                </div>
                <!-- single services one end -->
                <div class="col-md-6 col-lg-6">
                    <div class="single-1 v2-single-2">
                        <div class="service-flat-icon">
                            <i class="flaticon-settings"></i>
                        </div>
                        <div class="servics-content">
                            <h3>Security and maintenance</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elity sed do eiusmod tempor inc ididunt labore east.</p>
                        </div>
                    </div>
                </div>
                <!-- single services one end -->
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--========//:Video part start://=============-->
    <div class="work-video video-bg">
        <div class="overly"></div>
        <div class="video-contant">
            <div class="video-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <a id="video" href="https://www.youtube.com/watch?v=-fac_iJ8Nw8">
                                <i class="fas fa-play"></i>
                            </a>
                            <h3>See How We Work</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========//:Testimonal part start://=============-->
    <div class="meet-exper testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 mx-auto">
                    <div class="section-title text-center">
                        <span class="se-title">TEAM MEMBERS</span>
                        <h3>Meets With Our Expert</h3>
                    </div>
                </div>
            </div>
            <div class="row meet-row">
                <div class="col-md-6 col-lg-3">
                    <div class="single-expet">
                        <div class="expert-overly">
                            <div class="contant-overly">
                                <h4>Shara Jahan</h4>
                                <h5>Web Designer</h5>
                                <ul class="expert-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="{{ asset("/website/assets/images/explor/expert1.jpg") }}" alt="expert1" class="img-thumbnail">
                    </div>
                </div>
                <!-- single one end -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-expet">
                        <div class="expert-overly">
                            <div class="contant-overly">
                                <h4>Shara Jahan</h4>
                                <h5>Graphices</h5>
                                <ul class="expert-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="{{ asset("/website/assets/images/explor/expert2.jpg") }}" alt="expert2" class="img-thumbnail">
                    </div>
                </div>
                <!-- single one end -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-expet">
                        <div class="expert-overly">
                             <div class="contant-overly">
                                <h4>Shara Jahan</h4>
                                <h5>Ux Designer</h5>
                                <ul class="expert-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="{{ asset("/website/assets/images/explor/expert3.jpg") }}" alt="expert3" class="img-thumbnail">
                    </div>
                </div>
                <!-- single one end -->
                <div class="col-md-6 col-lg-3">
                    <div class="single-expet">
                        <div class="expert-overly">
                             <div class="contant-overly">
                                <h4>Shara Jahan</h4>
                                <h5>Networking</h5>
                                <ul class="expert-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <img src="{{ asset("/website/assets/images/explor/expert4.jpg") }}" alt="expert4" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========//:Counter part start://=============-->
    <div class="counter-area counter-area-bg">
        <div class="counter-overly"></div>
        <div class="container">
            <div class="counter-container">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <div class="single-counter">
                            <span class="counter">520</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="single-counter">
                            <span class="counter">200</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="single-counter">
                            <span class="counter">3984</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="single-counter">
                            <span class="counter">2750</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========//:Testimonal part start://=============-->
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 mx-auto">
                    <div class="section-title text-center">
                        <span class="se-title">TESTIMONIAL</span>
                        <h3>Thousand of the customers trusted us </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="testmonial-slide owl-carousel owl-theme">
                        <div class="slide1">
                            <span class="icon"><i class="fas fa-quote-left"></i></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipit sicing elity sed do eiusy mod tempor inc ididunt labore east dolore to magna you aliqua. Ulter enim ad minim veniam.</p>
                            <div class="client-img">
                                <a href="#"><img src="{{ asset("/website/assets/images/home-page/client.jpg") }}" alt="client1" class="img-thumbnail"></a>
                            </div>
                            <div class="client-contant">
                                <h4>Mr. Avenge</h4>
                                <h5 class="client-mane">Creative Designer</h5>
                            </div> 
                        </div>
                        <div class="slide1">
                            <span class="icon"><i class="fas fa-quote-left"></i></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipit sicing elity sed do eiusy mod tempor inc ididunt labore east dolore to magna you aliqua. Ulter enim ad minim veniam.</p>
                            <div class="client-img">
                               <a href="#"><img src="{{ asset("/website/assets/images/home-page/client.jpg") }}" alt="client2" class="img-thumbnail"></a>
                            </div>
                            <div class="client-contant">
                                <h4>Mr. Avenge</h4>
                                <h5 class="client-mane">Creative Designer</h5>
                            </div> 
                        </div>
                        <!-- single slide one end -->
                        <div class="slide1">
                            <span class="icon"><i class="fas fa-quote-left"></i></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipit sicing elity sed do eiusy mod tempor inc ididunt labore east dolore to magna you aliqua. Ulter enim ad minim veniam.</p>
                            <div class="client-img">
                                <a href="#"><img src="{{ asset("/website/assets/images/home-page/client.jpg") }}" alt="client2" class="img-thumbnail"></a>
                            </div>
                            <div class="client-contant">
                                <h4>Mr. Avenge</h4>
                                <h5 class="client-mane">Creative Designer</h5>
                            </div> 
                        </div>
                        <!-- single slide one end -->
                        <div class="slide1">
                            <span class="icon"><i class="fas fa-quote-left"></i></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipit sicing elity sed do eiusy mod tempor inc ididunt labore east dolore to magna you aliqua. Ulter enim ad minim veniam.</p>
                            <div class="client-img">
                                <a href="#"><img src="{{ asset("/website/assets/images/home-page/client.jpg") }}" alt="client2" class="img-thumbnail"></a>
                            </div>
                            <div class="client-contant">
                                <h4>Mr. Avenge</h4>
                                <h5 class="client-mane">Creative Designer</h5>
                            </div> 
                        </div>
                        <!-- single slide one end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--========//:Group partner part start://=============-->
    <div class="group-pertnar-contant">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                     <div class="pertner-slide owl-carousel owl-theme">
                        <div class="partner-single">
                            <div class="partner-main">
                                <img src="{{ asset("/website/assets/images/partner/BBQ.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                            <div class="partner-overly">
                                <img src="{{ asset("/website/assets/images/partner/BBQ-overly.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="partner-single">
                            <div class="partner-main">
                                <img src="{{ asset("/website/assets/images/partner/Darknight.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                            <div class="partner-overly">
                                <img src="{{ asset("/website/assets/images/partner/Darknight-overly.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="partner-single">
                            <div class="partner-main">
                                <img src="{{ asset("/website/assets/images/partner/Kingstar.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                            <div class="partner-overly">
                                <img src="{{ asset("/website/assets/images/partner/Kingstar-overly.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="partner-single">
                            <div class="partner-main">
                                <img src="{{ asset("/website/assets/images/partner/Munia.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                            <div class="partner-overly">
                                <img src="{{ asset("/website/assets/images/partner/Munia-overly.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="partner-single">
                            <div class="partner-main">
                                <img src="{{ asset("/website/assets/images/partner/Blue-studio.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                            <div class="partner-overly">
                                <img src="{{ asset("/website/assets/images/partner/Blue-studio-overly.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="partner-single">
                            <div class="partner-main">
                                <img src="{{ asset("/website/assets/images/partner/Munia.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                            <div class="partner-overly">
                                <img src="{{ asset("/website/assets/images/partner/Munia-overly.svg") }}" alt="pertner1" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      @section('script')
@parent


@endsection
@stop