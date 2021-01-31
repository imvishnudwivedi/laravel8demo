@extends('website.layouts.main')

@section('page_title', 'Sivaltech - Career Page')


@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')

@section('content')
    <!--========//:Branding bg part start://=============-->
    <div class="explor-page comn-page-wrapper">
        <div class="bg-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 style="color:white"><b>Careers</b></h1>
                </div>
                <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item dont">Careers</li>
                        </ol>
                    </div>
            </div>
        </div>
    </div>
     
   <!--========//:Our Service part start://=============-->
    <div class="our-servies">
        <div class="container">
            <div class="row">
                <p class="text-left">
                    <br>
                    Sivaltech is a semiconductor services organization that provides Digital Design, Analog Mixed Signal, Design Verification, Physical Design, DFT, and Embedded Software Solutions to some of the world’s leading semiconductor companies. The environment is fast-paced and requires daily cross-functional interaction along with good communication, planning and execution skills.</p>
                <div class="col-md-6 col-lg-6">
                        <a href="opportunities">
                    <div class="single-1 v2-single-2">
                        <div class="service-flat-icon">
                            <i class="flaticon-laptop"></i>
                        </div>
                        <div class="servics-content">
                            <h3 style="padding-top: 15px;">Opportunities</h3>
                          
                        </div>
                    </div></a>
                </div>
                <!-- single services one end -->
                <div class="col-md-6 col-lg-6">
                        <a href="lifeatsivaltech">
                    <div class="single-1 v2-single-2">
                        <div class="service-flat-icon">
                            <i class="flaticon-promotion"></i>
                        </div>
                        <div class="servics-content">
                            <h3 style="padding-top: 15px;">Life @ Sivaltech</h3>
                           
                        </div>
                    </div></a>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6 col-lg-6">
                    <a href="gallery">
                <div class="single-1 v2-single-2">
                    <div class="service-flat-icon">
                        <i class="flaticon-pyramid"></i>
                    </div>
                    <div class="servics-content">
                        <h3 style="padding-top: 15px;">Gallery</h3>
                      
                    </div>
                </div></a>
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