@extends('website.layouts.main-2')
@section('page_title', 'Sivaltech - Life At Sivaltech Page')


@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')



@section('content')

<!--========//:Branding bg part start://=============-->
<div class="explor-page comn-page-wrapper">
    <div class="bg-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h1 style="color:white"><b>Life @ Sivaltech</b></h1>
            </div>
            <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/career">Careers</a></li>
                        <li class="breadcrumb-item dont">Life @ Sivaltech</li>
                    </ol>
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
                    <!--  <span class="se-title">WELCOME</span> -->
                    <h3>TESTIMONIALS </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="testmonial-slide owl-carousel owl-theme">
                    <div class="slide1" style="min-height:480px;">
                        <span class="icon"><i class="fas fa-quote-left"></i></span>
                        <p>Our engagement with Sivaltech has been very smooth. Sivaltech engineers were very responsible towards their assignments and effective to work with. I wish Sivaltech team good luck and more success in coming years.<br><br></p> 
                      
                        <div class="client-contant">
                            <h4>- Sr. Manager -</h4>
                            <h5 class="client-mane">Fortune 500 Company</h5>
                        </div>
                    </div>
                    <div class="slide1" style="min-height:480px;">
                        <span class="icon"><i class="fas fa-quote-left"></i></span>
                        <p>We are extremely satisfied with Sivaltech's differentiated solutions supporting our complex designs.<br><br><br><br><br></p> 
                        <div class="client-contant">
                            <h4>- Design Manager -</h4>
                            <h5 class="client-mane">Data centre startup</h5>
                        </div>
                    </div>
                    <div class="slide1" style="min-height:480px;">
                        <span class="icon"><i class="fas fa-quote-left"></i></span>
                        <p>I have been with Sivaltech for past two year, my experience with
                            Sivaltech has been very good. Being a female employee. I found Sivaltech environment to
                            be safe with good work life balance. Managers are supportive and very helpful.</p>
                        
                        <div class="client-contant">
                            <h4>- Shilpi Gupta -</h4>
                            <h5 class="client-mane">Sr. Design Verification Engineer</h5>
                        </div>
                    </div>
                    <!-- single slide one end -->
                    <div class="slide1" style="min-height:480px;">
                        <span class="icon"><i class="fas fa-quote-left"></i></span>
                        <p>Sivaltech provides great opportunity to its employees to grow and have
                            an impact. According to me work culture, transparency and flexible approach are the
                            biggest strengths of Sivaltech.<br><br><br></p>
                        
                        <div class="client-contant">
                            <h4>- Thejus -</h4>
                            <h5 class="client-mane">Sr. Lead Engineer Design Verification</h5>
                        </div>
                    </div>
                    <!-- single slide one end -->

                    <!-- single slide one end -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<div class="product-bran-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="wrapper">
                    <div class="">
                        <img src="{{ asset("/website/assets/images/essen.png") }}" class="img-thumbnail" alt="procutimg"
                            style="width:100%;">
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-lg-4" hidden>
                <div class="section-title">
                    <div class="research-inner-contant">
                     
                        <h5> Ownership</h5>


                        <div class="contant">
                            <span class="text-check" style="color:#fff;"> Take responsibility of assigned job and
                                deliver without supervision.</span>
                        </div>
                        <br>

                        <h5>Initiatives</h5>


                        <div class="contant">
                            <span class="text-check" style="color:#fff;"> Take initiatives to improve efficiency,
                                quality,schedule.</span>
                        </div>
                        <br>
                        <h5>Execution</h5>


                        <div class="contant">
                            <span class="text-check" style="color:#fff;"> Efficient execution with quality.</span>
                        </div>
                        <br>
                        <h5>Ethics</h5>


                        <div class="contant">
                            <span class="text-check" style="color:#fff;"> Maintain high ethics and integrity for
                                success. </span>
                        </div>


                    </div>

                </div>
            </div>
            <div class="col-md-12 col-lg-12" style="border-top: 2px solid rgba(10, 179, 228, 0.2);">
                    <div class="section-title"><br>
                         <h5>At Sivaltech we believe in doing right investment on our people and giving right opportunities to make them successful.<br><br><i>"Winning companies win because they have good leaders who nurture the development of other leaders at all levels of the organization.” —Noel Tichy</i></h5>
    
                    </div>
                </div>
        </div>
    </div>
</div>


@section('script')
@parent


@endsection
@stop