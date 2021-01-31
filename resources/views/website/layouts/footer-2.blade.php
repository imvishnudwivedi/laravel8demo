    <!--========//:Footer part start://=============-->
    <div class="footer">
        <div class="container">
            <div class="row footer-top">
                <div class="col-md-8 col-lg-8">
                    <h3>Be part of Sivaltech Family</h3>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="contact-right">
                        <a href="career" class="contact-us">Join Us <span class="icon"><i
                                    class="fa fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-lg-4">
                    <div class="section-title">
                        <h4>Vision</h4>
                        <p style="font-size:15px;line-height:20px;"><font color="white">To become a leading service provider in VLSI & Embedded
                            Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements</font></p><br>
                        <span class="email">E-mail :</span><span> sales@sivaltech.com</span>
                        <ul class="social-media footer-social-media" style="text-align:center;">
                            
                            <li><a target="_blank" href="https://www.facebook.com/sivaltech/"> <i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank"
                                    href="https://www.linkedin.com/company/sivaltech-inc?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A12906613%2Cidx%3A2-1-3%2CtarId%3A1477115489443%2Ctas%3Asivaltech"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <!--  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li> -->
                        </ul>
                    </div>
                </div>
              <div class="col-md-3 col-lg-3 offset-lg-1">
                    <div class="section-title">
                        <h4>Pages</h4>
                        <ul class="page">
                            <li><a href="/">Home</a></li>
                            <li><a href="company">Company</a></li>
                            <li><a href="service">Services</a></li>
                            <li><a href="career">Careers</a></li>
                           <!--  <li><a href="blog.html">Blog</a></li> -->
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="section-title">
                        <h4>Contact Us</h4>
                        @if(Session::has('message'))
                        <div class="alert alert-success">Your message was sent successfully. We shall get back to you shortly.</div>
                    @endif
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
                        <!-- <div class="g-recaptcha" 
   data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
</div> -->
                        <button type="submit" class="btn-lg">Send</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="footer-botom-area">
                <div class="copyright-text">
                   <div class="copyright-text" style="color: white;">
                    &copy;<script>new Date().getFullYear()>2010&&document.write(""+new Date().getFullYear());</script>, Sivaltech. Developed by <a href="https://dooziesoft.com" target="_blank">DoozieSoft</a>
                </div>
                </div>
                <!--  <ul class="list">
                    <li><a href="#">privacy</a></li>
                    <li><a href="#">faq</a></li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="top_to">
        <span><i class="fa fa-angle-up" aria-hidden="true"></i></span>
    </div>
  