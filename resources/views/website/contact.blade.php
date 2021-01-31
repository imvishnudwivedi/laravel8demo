@extends('website.layouts.main')
@section('page_title', 'Sivaltech - Contact Page')


@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')



@section('content')

<!--========//:Branding bg part start://=============-->
<div class="gettouch-page comn-page-wrapper" style="padding: 120px 0 50px 0;">
    <div class="bg-overly"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item dont"> Contact Us </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="get-comment">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 offset-md-2 offset-lg-2 mx-auto">
                <div class="row leave-comment">
                    <div class="col-md-12 col-lg-12 comment-h">
                        <h4>Drop Your Message</h4>
                    </div>
                    @if(Session::has('message'))
                    <div class="alert alert-success">Your message was sent successfully. We shall get back to you shortly.</div>
                    @endif
                    <div class="col-md-12 col-lg-12">
                        <form action="/storeContact" method="post">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control form-control-lg" required id="inputname" placeholder="Your Name" name="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control form-control-lg" required id="inputemail" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" required id="inputAddress" placeholder="Subject" name="subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" required id="exampleFormControlTextarea1" rows="3" placeholder="Your Comment" name="comment"></textarea>
                            </div>
                            @if(env('GOOGLE_RECAPTCHA_KEY'))
                            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                            </div>
                            @if($errors->any())
                        @foreach($errors->getMessages() as $this_error)
                        <p style="color: red;">{{$this_error[0]}}</p>
                        @endforeach
                        @endif
                            @endif

                            <button type="submit" class="btn-lg">Send</button>
                        </form>

                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="feature" style="padding:10px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="single-feature-wprapper">
                    <div class="single-inner" style="min-height: 385px;">
                        <div class="overly"></div>

                        <h4> Sivaltech Inc. <br> USA </h4>
                        <div class="contant">
                            <span class="text-check">6170 Cornerstone Ct E
                                ​ Suite 260 San Diego,
                                CA 92121 USA</span>
                        </div>
                        <div class="contant">
                            <span class="text-check">Contact Number :
                                +1 858 939 0020</span>
                        </div>
                        <div class="contant">
                            <span class="text-check">Fax Number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                +1 866 419 6092</span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- single-inner end -->
            <div class="col-md-6 col-lg-4">
                <div class="single-feature-wprapper">
                    <div class="single-inner single-inner-ac " style="min-height: 385px;">
                        <div class="overly"></div>

                        <h4>Sivaltech Pvt. Ltd. <br>Bangalore </h4>
                        <div class="contant">
                            <span class="text-check"># 420, 2nd floor,
                                27th Main,HSR layout 1,
                                Sector 1, Bangalore,
                                Karnataka, India 560102</span>
                        </div>
                        <div class="contant">
                            <span class="text-check">Contact Number:
                                +91 8022582299</span>
                        </div>
                        <div class="contant">
                            <span class="text-check"><br></span>
                        </div>

                    </div>

                </div>
            </div>
            <!-- single-inner end -->
            <div class="col-md-6 col-lg-4">
                <div class="single-feature-wprapper">
                    <div class="single-inner" style="min-height: 385px;">
                        <div class="overly"></div>

                        <h4>Sivaltech Pvt. Ltd. <br>Hyderabad</h4>
                        <div class="contant">
                            <span class="text-check"> E 1006, Ramky Towers,
                                Gachibowli, Hyderabad,
                                India 500032</span>
                        </div>
                        <div class="contant">
                            <span class="text-check"><br></span>
                        </div>
                        <div class="contant">
                            <span class="text-check"><br></span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- single-inner end -->
        </div>
    </div>
</div>
<div class="google-map-wrapper">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.828808495822!2d77.64969831408285!3d12.918721990890596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae148223e3cd89%3A0x3940cc6400a2a6fd!2sSivaltech!5e0!3m2!1sen!2sin!4v1559893038154!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="clearfix"></div>

@section('script')
@parent
<script src='https://www.google.com/recaptcha/api.js'></script>

@endsection
@stop