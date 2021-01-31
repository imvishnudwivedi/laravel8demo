<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="@yield('description')">



    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('page_title',"Sivaltech")</title>
   
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("/website/assets/images/favi_icon.png") }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset("/website/assets/css/style.css") }}">
    <!-- For Responsive -->
    <link rel="stylesheet" href="{{ asset("/website/assets/css/responsive.css") }}">
</head>

<body>
   



   

  <div id="page">
<!--     <div class="col-md-12">
 -->    @include('website.layouts.header')

    <!-- End Header -->

    @yield('content')

    <!-- End content -->


    <!-- footer
      ================================================== -->
    @include('website.layouts.footer')

    <!-- End footer -->




 </div>












@section('script')


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset("/website/assets/js/jQuery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("/website/assets/js/jQuery.Migrate-v3.0.0.js") }}"></script>
    <script src="{{ asset("/website/assets/js/sPreloader.js") }}"></script>


    <script src="{{ asset("/website/assets/js/bootstrap.min.js") }}"></script>


    

    <script src="{{ asset("/website/assets/js/jquery.meanmenu.min.js") }}"></script>


    <script src="{{ asset("/website/assets/js/owl.carousel.min.js") }}"></script>
    
    <script src="{{ asset("/website/assets/js/video.popup.js") }}"></script>
    <script src="{{ asset("/website/assets/js/main.js") }}"></script>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146576928-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146576928-1');
</script>


     @show

</body>

</html>
