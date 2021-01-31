


@extends('website.layouts.main')
@section('page_title', 'Sivaltech - Our Team Page')


@section('description', 'Sivaltech is a product engineering services company with expertise in Semiconductor Design and Embedded Software Development. With our centres in U.S.A. and India, we are service partners to various fortune 500 companies in the field of Automotive, IOT, Medical Electronics, Consumer Electronics etc.')



@section('content')

    <!--========//:Branding bg part start://=============-->
    <div class="explor-page comn-page-wrapper">
        <div class="bg-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 style="color:white"><b>Our Team</b></h1>
                </div>
                <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/company">Company</a></li>
                            <li class="breadcrumb-item dont"> Our Team </li>
                        </ol>
                    </div>
            </div>
        </div>
    </div>
  
 


  <div class="product-baranding product-bran-bg">
        <div class="container">
            <div class="row">
               
                <div class="col-md-6 col-lg-6">
                    <div class="section-title"> 
                       <font size="10%"> Surjith Reddy</font><br>
<span class="se-title">- CEO</span>
                      
                    </div><br>
                   <p><font color="white">“Surjith Reddy has over 19 years of management experience working across Telecom, Software and industrial sectors in US, Europe and Asia Pacific regions. Surjith held several executive management positions in his career and brings with him extensive experience of being on the Board of large Multi-National Companies and has led teams in incubating new businesses, grow companies in-organically through acquisitions and building global partnerships. He has done his masters in Management from IIM Calcutta and Chemical Engineering from BITS, Pilani.”</font></p>
                
                                
                                
                                </span></a>
                </div>
                 <div class="col-md-6 col-lg-6">
                    <div class="wrapper">
                        <div class="picture1">
                            <img src="{{ asset("/website/assets/images/over-pic-logo.svg") }}" class="img-thumbnail" alt="procutimg">

                        </div>

                        <div class="picture2">
                            <img src="{{ asset("/website/assets/images/new/ceo2.jpg") }}" class="img-thumbnail" alt="procutimg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




  <div class="product-baranding product-bran-bg">
        <div class="container">
            <div class="row">
               
                <div class="col-md-6 col-lg-6">
                    <div class="section-title">
                         <font size="10%"> Vanesh Gaddam</font><br>
<span class="se-title">- Vice President of Business Development</span>
                     
                    </div><br>
                   <p><font color="white">“Vanesh has over 17 years of experience working globally in the semiconductor and technological industries; Vanesh possesses a strong foundation in building C level relationships at some of the world’s leading technological companies. Vanesh has exceptional leadership abilities in sales and marketing roles and has a proven track record in executing successful market penetration strategies. In his past career, he was responsible for driving business development for Smartplay and Aricent. Vanesh earned a post-graduate MBA in International Business from ESC Rennes, France, a B-Tech in Electronic and Telecommunication Engineering from JNTU Hyderabad, India.”</font></p>
                </span></a>
                </div>
                 <div class="col-md-6 col-lg-6">
                    <div class="wrapper">
                        <div class="picture1">
                            <img src="{{ asset("/website/assets/images/over-pic-logo.svg") }}" class="img-thumbnail" alt="procutimg">
                        </div>
                        <div class="picture2">
                            <img src="{{ asset("/website/assets/images/new/vp1.jpg") }}" class="img-thumbnail" alt="procutimg">
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