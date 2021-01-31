@extends('website.layouts.main')
@section('page_title', 'Sivaltech - Embedded Page')


@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')



@section('content')
  <!--========//:Branding bg part start://=============-->
    <div class="explor-page comn-page-wrapper" >
        <div class="bg-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 style="color:white"><b>Embedded Software Service</b></h1>
                </div>
                <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/service">Services</a></li>
                            <li class="breadcrumb-item dont">Embedded Software Service</li>
                        </ol>
                    </div>
            </div>
        </div>
    </div>
  
    <!--========//:Testimonal part start://=============-->
    <div class="product-baranding product-bran-bg">
        <div class="container">
            <div class="row" >
                <div class="col-md-12 col-lg-12">
                    <div class="wrapper">
                        <p style="color:#fff;">Sivaltech Embedded Software team has wide experience of delivering on Device Software, Middleware, Applications and Testing Solutions.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                     
                        
                            <!--  <span class="se-title">WELCOME</span> -->
                             <h5 style="color:#FFE57F;"> Device Software</h5>
                           <br>
 
                             <div class="contant">
                                 <span class="icon"><i class="fas fa-check"></i></span><span class="text-check" style="color:#fff;">Device Drivers</span>
                             </div>
                             <div class="contant">
                                 <span class="icon"><i class="fas fa-check"></i></span><span class="text-check" style="color:#fff;">BSP</span>
                             </div>
                             <div class="contant">
                                 <span class="icon"><i class="fas fa-check"></i></span><span class="text-check" style="color:#fff;">Base-Port</span>
                             </div><BR>  
                                </div><div class="col-md-4 col-lg-4">
                             <h5 style="color:#FFE57F;">Middleware and Applications</h5>
                           
                            <BR>
                             <div class="contant">
                                 <span class="icon"><i class="fas fa-check"></i></span><span class="text-check" style="color:#fff;">Frameworks</span>
                             </div>
                             <div class="contant">
                                 <span class="icon"><i class="fas fa-check"></i></span><span class="text-check" style="color:#fff;">User Interface</span>
                             </div>
                             <div class="contant">
                                 <span class="icon"><i class="fas fa-check"></i></span><span class="text-check" style="color:#fff;">Multimedia Applications</span>
                             </div><BR></div><div class="col-md-4 col-lg-4">
                               <h5 style="color:#FFE57F;">Testing Solutions</h5>
                           <BR>
 
                             <div class="contant">
                                 <span class="icon"><i class="fas fa-check"></i></span><span class="text-check" style="color:#fff;">Application Testing</span>
                             </div>
                             <div class="contant">
                                 <span class="icon"><i class="fas fa-check"></i></span><span class="text-check" style="color:#fff;">Field / Lab Testing</span>
                             </div>
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