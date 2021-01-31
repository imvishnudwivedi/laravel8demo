  


@extends('website.layouts.main')
@section('page_title', 'Sivaltech - Overview Page')


@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')



@section('content')
  <!--========//:Branding bg part start://=============-->
    <div class="explor-page comn-page-wrapper" >
        <div class="bg-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 style="color:white"><b>Overview</b></h1>
                </div>
                <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/company">Company</a></li>
                            <li class="breadcrumb-item dont">Overview</li>
                        </ol>
                    </div>
            </div>
        </div>
    </div>
  
    <!--========//:Testimonal part start://=============-->
    <div class="product-baranding product-bran-bg">
        <div class="container">
            <div class="row" >
                <div class="col-md-6 col-lg-6">
                    <div class="wrapper">
                        <div class="picture1">
                            <img src="{{ asset("/website/assets/images/over-pic-logo.svg") }}" class="img-thumbnail" alt="procutimg">
                        </div>
                        <div class="picture2">
                            <img src="{{ asset("/website/assets/images/overview2.jpg") }}" class="img-thumbnail" alt="procutimg">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="section-title">
                      
                    </div>
                 <p ><font color="white">

                    Sivaltech is a product engineering services company with expertise in Semiconductor Design and

Embedded Software Development. With our centres in U.S.A. and India, we are service partners to various fortune 500 companies in the field of Automotive, IOT, Medical Electronics, Consumer Electronics etc.<br>
<br>
Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.<br><br>
<ul>
<li><span class="icon"><i class="fas fa-check"></i></span> Founded by Professionals in Chip Design and Embedded Software </li>
<li><span class="icon"><i class="fas fa-check"></i></span> Design Centers in USA and India</li>

<li><span class="icon"><i class="fas fa-check"></i></span> Extensive Experience in Successfully Delivering Multisite Projects</li>

<li><span class="icon"><i class="fas fa-check"></i></span> Ability to Provide Custom Solutions with Innovative Business Models</li>
</ul>
</font>
</p>
                   
                </div>
            </div>
        </div>
    </div>
   
    
    <div class="clearfix"></div>
    <!--========//:Group partner part start://=============-->
  
    
     @section('script')
@parent


@endsection
@stop