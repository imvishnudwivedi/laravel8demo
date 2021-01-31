@extends('website.layouts.main')
@section('page_title', 'Sivaltech - Service Page')


@section('description', 'Sivaltech is a product engineering services company with expertise in Semiconductor Design and Embedded Software Development. With our centres in U.S.A. and India, we are service partners to various fortune 500 companies in the field of Automotive, IOT, Medical Electronics, Consumer Electronics etc.')



@section('content')

    <!--========//:Branding bg part start://=============-->
    <div class="explor-page comn-page-wrapper">
        <div class="bg-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 style="color:white"><b>Our Services</b></h1>
                </div>
                <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item dont">Services </li>
                        </ol>
                    </div>
            </div>
        </div>
    </div>
   
    <div class="ux-research comn-part" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-6 ux-left p-0">
                    <div class="row justify-content-end no-gutters">
                        <div class="research-inner-contant">
                          <p>Sivaltech engineering team has expertise on ASIC/FPGA Design, Analog Mixed Signal and Embedded Software  to cater state of the art services to our customers. Our technical expertise combined with innovative business models and strong business ethics has enabled us to deliver multiple complex projects to our esteemed customers.</p>
                          <ul>
                              <li><span class="icon"><i class="fas fa-check"></i></span> Exceed Expectations on Delivery</li>
                              <li><span class="icon"><i class="fas fa-check"></i></span> Meet Stringent Schedules</li>
                              <li><span class="icon"><i class="fas fa-check"></i></span> Demonstrate Integrity and Intelligence in all our customer engagement</li>
                          </ul>
    
                              
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 p-10">
                    <div class="ux-right">
                        <img src="{{ asset("website/assets/images/service.jpeg") }}" alt="branding2" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature" style="padding:10px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                            <a href="/asic" class="learn">
                        <div class="single-feature-wprapper">
                            <div class="single-inner" style="height:660px;">
                                <div class="overly"></div>
                                <img src="website/assets/images/services/design.png" style="width:100%;height:auto">
                                <h4>ASIC / FPGA Design</h4>
                                <p>Sivaltech ASIC/FPGA Design team has been providing end to end services to our customers on design, verification, physical design, post silicon validation. </p>
                            </div>
                            <div class="more-learn">
                                 <span class="learn-icon"><i class="fa fa-arrow-right"></i></span>
                                 <a href="asic" class="overly1"><span class="learn-contant">Learn more</span><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div></a>
                    </div>
                    <!-- single-inner end -->
                    <div class="col-md-6 col-lg-4">
                            <a href="/analog" class="learn">
                        <div class="single-feature-wprapper">
                            <div class="single-inner single-inner-ac" style="height:660px;">
                                <div class="overly"></div>
                                <img src="website/assets/images/services/analog_mixed_signal.png" style="width:100%;height:auto">
                                <h4>Analog Mixed Signal</h4>
                                <p>Sivaltech Analog & Mixed Signal team has a wide range of expertise across technology on developing and providing end to end support on AMS designs like Power Management, High Speed IOs, Clocking circuits, Data Converters etc.</p>
                            </div>
                            <div class="more-learn">
                                 <span class="learn-icon"><i class="fa fa-arrow-right"></i></span>
                                 <a href="analog" class="overly1"><span class="learn-contant">Learn more</span><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </a>
                    </div>
                    <!-- single-inner end -->
                   <div class="col-md-6 col-lg-4" >
                        <a href="/embedded" class="learn">
                        <div class="single-feature-wprapper">
                            <div class="single-inner" style="height:660px;">
                                <div class="overly"></div>
                                <img src="website/assets/images/services/embedded.png" style="width:100%;height:auto">
                                <h4>Embedded Software Service</h4>
                                <p>Sivaltech Embedded Software team has wide experience of delivering on Device Software, Middleware, Applications and Testing Solutions.  </p>
                            </div>
                            <div class="more-learn">
                                 <span class="learn-icon"><i class="fa fa-arrow-right"></i></span>
                                 <a href="embedded" class="overly1"><span class="learn-contant">Learn more</span><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div></a>
                    </div>
                    <!-- single-inner end -->
                </div>
            </div>
        </div>
        <div class="product-baranding product-bran-bg">
            <div class="container">
                <div class="row" >
                    
                    <div class="col-md-6 col-lg-6">
                        <div class="section-title">
                            <h2>Unique Advantages</h2>
                        </div>
                        <div class="contant">
                            <span class="icon"><i class="fas fa-check"></i></span><span class="text"> Handshake between different verticals to ensure cross domain support</span>
                        </div>
                        <div class="contant">
                            <span class="icon"><i class="fas fa-check"></i></span><span class="text"> Strong culture of in house training and knowledge sharing to help meet <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; new technological challenges</span>
                        </div>
                        <div class="contant">
                            <span class="icon"><i class="fas fa-check"></i></span><span class="text"> Flexible business models</span>
                        </div>
                        <div class="contant">
                            <span class="icon"><i class="fas fa-check"></i></span><span class="text"> Quality Hiring through well defined process </span>
                        </div>
                        <div class="contant">
                            <span class="icon"><i class="fas fa-check"></i></span><span class="text"> Strong employee retention policies to ensure smooth engagement</span>
                        </div>
                        
                       
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="wrapper">
                            <div class="picture1">
                                <img src="{{ asset("/website/assets/images/over-pic-logo.svg") }}" class="img-thumbnail" alt="procutimg">
                            </div>
                            <div class="picture2">
                                <img style="background: transparent;" src="{{ asset("/website/assets/images/cube.jpg") }}" class="img-thumbnail" alt="procutimg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
     <div class="clearfix"></div>
    

     @section('script')
@parent


@endsection
@stop