 <!--========//:header manu part start://=============-->
 <div class="header navbarr">
     <div class="container">
         <div class="row">
             <div class="col-md-3">
                 <div class="logo" >
                     <a href="/">
                         <img src="{{ asset("/website/assets/images/sivaltech_logo.png") }}">

                     </a>
                 </div>
             </div>
             <div class="col-md-8">
                 <div class="add main-manu" >
                     <ul id="menu1">
                         <li><a href="/" class="{{ (request()->is('/')) ? 'page-active' : '' }}">Home
                             </a>
                         </li>
                         <li class="page-hover"><a href="company" class="{{ (request()->is('overview')) || (request()->is('whyus')) || (request()->is('businessmodel')) || (request()->is('ourteam')) || (request()->is('company')) ? 'page-active' : '' }}">Company<i class="fas fa-caret-down"></i></a>
                             <ul class="mega-menu">
                                 <li><a href="overview">Overview</a></li>
                                 <li><a href="whyus">Why Us</a></li>
                                 <li><a href="businessmodel">Business Models</a></li>
                                 <li><a href="ourteam">Management Team</a></li>


                             </ul>


                         </li>
                         <li class="page-hover"><a href="service" class="{{ (request()->is('asic')) || (request()->is('analog')) || (request()->is('embedded')) || (request()->is('service'))   ? 'page-active' : '' }}">Services<i class="fas fa-caret-down"></i></a>
                             <ul class="mega-menu">
                                 <li><a href="asic">ASIC/FPGA Design</a></li>
                                 <li><a href="analog">Analog Mixed Signal</a></li>
                                 <li><a href="embedded">Embedded Software</a></li>
                             </ul>
                         </li>
                         <li class="page-hover"><a href="career" class="{{ (request()->is('opportunities')) || (request()->is('lifeatsivaltech')) || (request()->is('career'))? 'page-active' : '' }}"  >Careers<i
                                     class="fas fa-caret-down"></i></a>
                             <ul class="mega-menu">
                                 <li><a href="opportunities">Opportunities </a> </li>
                                 <li><a href="lifeatsivaltech">Life @ Sivaltech</a> </li>
                                 <li><a href="gallery">Gallery</a></li>


                             </ul>



                         </li>


                         <li><a href="contact" class="{{ (request()->is('contact')) ? 'page-active' : '' }}">Contact Us</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-md-1">
                 <div class="f-change">
                    
                     <span class="toggle-menu">
                         <span class="toggle-tile"></span>
                     </span>
                 </div>
             </div>
         </div>
         <div class="add mobile-manu-container">
             <div class="mobile-munu-cross"><img src="{{ asset("/website/assets/images/side-bar/side-cross.svg") }}"
                     alt="site-logo" class="img-thumbnail"></div>
         </div>
         <!-- side bar part strat -->
         <div class="add sidebar">
             <div class="add sidebar-overly"></div>
             <div class="row">
                 <div class="col-md-8 side-bar-left">
                     <span class="side-logo"><img src="{{ asset("/website/assets/images/sivaltech_logo.png") }}"
                             alt="site-logo" class="img-thumbnail" style="margin-left: 50px;"></span>
                     <p class="text-justify">Sivaltech aims to be a leading service provider in VLSI and Embedded Software by exceeding
                         expectations on delivery, meeting stringent design schedules and demonstrating intelligence
                         to tackle complex design challenges.</p>
                     <div class="site-gettouch">
                         <h4>Get in touch</h4>
                         
                         <div class="logo-site">
                             <img src="{{ asset("/website/assets/images/side-bar/mail.svg") }}" alt="location"
                                 class="img-thumbnail">
                         </div>
                         <div class="contant-site">
                             <h5>Mail us</h5>
                             <a href="mailto:sales@sivaltech.com"><h6>sales@sivaltech.com</h6></a>
                         </div>
                         <div class="logo-site">
                             <img src="{{ asset("/website/assets/images/side-bar/phone-call.svg") }}" alt="location"
                                 class="img-thumbnail">
                         </div>
                         <div class="contant-site">
                             <h5>Call us</h5>
                             <h6>USA &nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;+1 858 939 0020</h6>
                             <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;India : &nbsp;&nbsp;+91 802 258 2299</h6>
                         </div>

                         <br>
                         <a href="{{ asset("/website/assets/images/download/downloadbrochure.pdf") }}" target="_blank"
                             class="contact-us">
                             <h6>DOWNLOAD BROCHURE</h6> <span class="icon"></span>
                         </a>

                     </div>
                     <!-- logo and contact part end -->
                     <div class="site-share">
                         <h4>Follow Us</h4>
                         <ul class="social-media">
                             <li><a href="https://www.facebook.com/sivaltech/"><i class="fab fa-facebook-f"></i></a>
                             </li>
                        
                             <li><a
                                     href="https://www.linkedin.com/company/sivaltech-inc?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A12906613%2Cidx%3A2-1-3%2CtarId%3A1477115489443%2Ctas%3Asivaltech"><i
                                         class="fab fa-linkedin-in"></i></a></li>
                         
                         </ul>
                     </div>
                     <!-- social midia share part end -->
                 </div>
                 <div class="col-md-4 side-bar-right">
                     <!-- site bar cross -->
                     <div class="sitebar-cross"><img src="{{ asset("/website/assets/images/side-bar/side-cross.svg") }}"
                             alt="site-logo" class="img-thumbnail"></div>
                   
                 </div>
             </div>
         </div>
     </div>
 </div>