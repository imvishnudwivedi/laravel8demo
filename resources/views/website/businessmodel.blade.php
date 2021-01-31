@extends('website.layouts.main')
@section('page_title', 'Sivaltech - Business Model Page')

@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')



@section('content')
    <!--========//:Branding bg part start://=============-->
    <div class="Branding-page-wrapper comn-page-wrapper">
        <div class="bg-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 style="color:white"><b>Business Models</b></h1>
                </div>
                <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/company">Company</a></li>
                            <li class="breadcrumb-item dont">Business Models</li>
                        </ol>
                    </div>
            </div>
        </div>
    </div>
  
    <div class="feature" style="padding:10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-wprapper">
                        <div class="single-inner" style="min-height: 525px;">
                            <div class="overly"></div>
                            <img src="website/assets/images/time-material-pricing.png" style="width:100%;height:auto">
                            <h4>Time and Material!</h4>
                            <div class="contant">
                                <span class="text-check">Resource/Expertise Augmentation</span>
                            </div>
                            <div class="contant">
                                <span class="text-check">Working with customer at client premises</span>
                            </div>
                            <div class="contant">
                                <span class="text-check">Good for Short term engagements<br><br></span>
                            </div>
                        </div>
                         
                    </div>
                </div>
                <!-- single-inner end -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-feature-wprapper">
                        <div class="single-inner single-inner-ac" style="min-height: 525px;">
                            <div class="overly"></div>
                            <img src="website/assets/images/offshore.jpg" style="width:100%;height:auto">
                            <h4>Offshore Development Centre!</h4>
                            <div class="contant">
                                <span class="text-check">Task based execution</span>
                            </div>
                            <div class="contant">
                                <span class="text-check">Execution at Sivaltech premises</span>
                            </div>
                            <div class="contant">
                                <span class="text-check">Good for long term engagements</span>
                            </div>
                        </div>
                         
                    </div>
                </div>
                <!-- single-inner end -->
               <div class="col-md-6 col-lg-4">
                    <div class="single-feature-wprapper">
                        <div class="single-inner" style="min-height: 525px;">
                            <div class="overly"></div>
                            <img src="website/assets/images/Turnkey-Solutions.jpg" style="width:100%;height:auto">
                            <h4>Turnkey!</h4>
                            <div class="contant">
                                <span class="text-check">Milestone based delivery</span>
                            </div>
                            <div class="contant">
                                <span class="text-check">Execution at Sivaltech premises</span>
                            </div>
                            <div class="contant">
                                <span class="text-check">Fixed price and predictability on cost</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- single-inner end -->
            </div>
        </div>
    </div>
    
   
      @section('script')
@parent


@endsection
@stop