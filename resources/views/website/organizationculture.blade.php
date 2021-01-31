  


@extends('website.layouts.main')
@section('page_title', 'Sivaltech - Organization Culture')


@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')



@section('content')
  <!--========//:Branding bg part start://=============-->
    <div class="explor-page comn-page-wrapper" >
        <div class="bg-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Organization Culture</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Careers</a></li>
                        <li class="breadcrumb-item dont"> Organization Culture </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
  
    <!--========//:Testimonal part start://=============-->
    <div class="product-baranding product-bran-bg">
        <div class="container">
            <div class="row" >
                <div class="col-md-8 col-lg-8">
                    <div class="wrapper">
                        
                        <div class="">
                            <img src="{{ asset("/website/assets/images/essen.png") }}" class="img-thumbnail" alt="procutimg">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="section-title">
                        <div class="research-inner-contant">
                          
                             <h5> Ownership</h5>
                          
 
                             <div class="contant">
                                 <span class="text-check" style="color:#fff;"> Take responsibility of assigned job and deliver without supervision.</span>
                             </div>
                             <br>
 
                             <h5>Initiatives</h5>
                           
  
                             <div class="contant">
                                 <span class="text-check" style="color:#fff;"> Take initiatives to improve efficiency, quality,schedule.</span>
                             </div>
                             <br>
                               <h5>Execution</h5>
                           
 
                             <div class="contant">
                                 <span class="text-check" style="color:#fff;"> Efficient execution with quality.</span>
                             </div>
                             <br>
                             <h5>Ethics</h5>
                           
 
                             <div class="contant">
                                 <span class="text-check" style="color:#fff;"> Maintain high ethics and integrity for success. </span>
                             </div>
                             
                            
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