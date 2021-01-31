@extends('website.layouts.main')
@section('page_title', 'Sivaltech - Company Page')

@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')



@section('content')
    <!--========//:Branding bg part start://=============-->
    <div class="explor-page comn-page-wrapper">
        <div class="bg-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 style="color:white"><b>Company</b></h1>
                </div>
                <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item dont"> Company</li>
                        </ol>
                    </div>
            </div>
        </div>
    </div>
     
   <!--========//:Our Service part start://=============-->
    <div class="our-servies">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <a href="overview">
                        <div class="single-1 v2-single-2">
                            <div class="service-flat-icon">
                                <i class="flaticon-pyramid"></i>
                            </div>
                            <div class="servics-content">
                                <h3 style="padding-top: 15px;">Overview</h3>
                              
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-6">
                        <a href="whyus">
                    <div class="single-1 v2-single-2">
                        <div class="service-flat-icon">
                            <i class="flaticon-laptop"></i>
                        </div>
                        <div class="servics-content">
                            <h3 style="padding-top: 15px;">Why Us</h3>
                          
                        </div>
                    </div></a>
                </div>
                <!-- single services one end -->
                <div class="col-md-6 col-lg-6">
                        <a href="businessmodel">
                    <div class="single-1 v2-single-2">
                        <div class="service-flat-icon">
                            <i class="flaticon-promotion"></i>
                        </div>
                        <div class="servics-content">
                            <h3 style="padding-top: 15px;">Business Models</h3>
                          
                        </div>
                    </div></a>
                </div>
                <!-- single services one end -->
                <div class="col-md-6 col-lg-6">
                        <a href="ourteam">
                    <div class="single-1 v2-single-2">
                        <div class="service-flat-icon">
                            <i class="flaticon-settings"></i>
                        </div>
                        <div class="servics-content">
                            <h3 style="padding-top: 15px;">Management Team</h3>
                         
                        </div>
                    </div>
                    </a>
                </div>
                <!-- single services one end -->
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    
     @section('script')
@parent


@endsection
@stop