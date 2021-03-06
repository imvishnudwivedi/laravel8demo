<nav class="navbar navbar-default navbar-header-full navbar-dark yamm navbar-static-top" role="navigation" id="header" >

    <div >
 

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="background-color: #952B22;" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a id="ar-brand" class="navbar-brand hidden-lg hidden-md hidden-sm" href="index.html"><img src="website/img/logo6.png" alt=""></a>
        
     
               
        </div> <!-- navbar-header -->
        
      
              
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >

            <ul  class="nav navbar-nav" >
             
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{URL::route('home')}}">Home</a></li>
                 <li class="dropdown {{ Request::is('about') ? 'active' : '' }} || {{ Request::is('milestones') ? 'active' : '' }} || {{ Request::is('facilities') ? 'active' : '' }} || {{ Request::is('associates') ? 'active' : '' }} "  class="">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">About</a>
                            <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                             <li><a href="{{URL::route('about')}}">About</a></li>
                                <li><a href="{{URL::route('milestones')}}">Milestone</a></li>
                                <li><a href="{{URL::route('facilities')}}">Facilities</a></li>
                                <li><a href="{{URL::route('associates')}}">Associates</a></li>
                              
                            </ul>
                        </li>

                        <li  class="dropdown {{ Request::is('design_engineering') ? 'active' : '' }} || {{ Request::is('manufacturing') ? 'active' : '' }} || {{ Request::is('product_packages') ? 'active' : '' }} || {{ Request::is('brownfield_engineering') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Capability </a>
                            <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                                <li><a href="{{URL::route('design_engineering')}}">Design & Engineering</a></li>
                            <li><a href="{{URL::route('manufacturing')}}">Manufacturing</a></li>
                                <li><a href="{{URL::route('product_packages')}}">Products/ Packages </a></li>
                                <li><a href="{{URL::route('brownfield_engineering')}}">Brownfield Engineering </a></li>
                              
                            </ul>
                        </li>
                        <li  class="dropdown {{ Request::is('engineering') ? 'active' : '' }} || {{ Request::is('design_to_manufacturing') ? 'active' : '' }} || {{ Request::is('sourcing_to_procurement') ? 'active' : '' }} || {{ Request::is('special_services') ? 'active' : '' }} ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Services & Solutions </a>
                            <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                                <li><a href="{{URL::route('engineering')}}">Engineering</a></li>
                                <li><a href="{{URL::route('design_to_manufacturing')}}">Design to Manufacturing</a></li>
                                <li><a href="{{URL::route('sourcing_to_procurement')}}">Sourcing & Procurement </a></li>
                                <li><a href="{{URL::route('special_services')}}">Special Services </a></li>
                              
                            </ul>
                        </li>
                        <li  class="dropdown {{ Request::is('engineered_packages') ? 'active' : '' }} || {{ Request::is('gas_turbine_package') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Turnkey Packages</a>
                            <ul class="dropdown-menu dropdown-menu-left animated-2x animated fadeIn">
                                <li><a href="{{URL::route('engineered_packages')}}">Engineered Packages</a></li>
                                <li><a href="{{URL::route('gas_turbine_package')}}">Gas Turbine Package</a></li>
                               
                            </ul>
                        </li>
                  
                        <li class="{{ Request::is('products') ? 'active' : '' }}"  ><a href="{{URL::route('products')}}">Products</a></li>

                         <li class="{{ Request::is('experience') ? 'active' : '' }}" ><a href="{{URL::route('experience')}}">Experience</a></li>
                           <li class="{{ Request::is('career') ? 'active' : '' }}"  ><a href="{{URL::route('career')}}">Career</a></li>


                             <li class="{{ Request::is('contact_us') ? 'active' : '' }}" ><a href="{{URL::route('contact_us')}}">Contact Us</a></li>
               
              
            
             </ul>
        </div><!-- navbar-collapse -->
    </div><!-- container -->
</nav>
