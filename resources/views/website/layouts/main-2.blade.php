<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="sivaltech">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sivaltech</title>
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("/website/assets/images/favi_icon.png") }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset("/website/assets/css/style.css") }}">
    <!-- For Responsive -->
    <link rel="stylesheet" href="{{ asset("/website/assets/css/responsive.css") }}">
</head>

<body>
    <!-- Preloader Start -->
   











  <div id="page">
<!--     <div class="col-md-12">
 -->    @include('website.layouts.header')

    <!-- End Header -->

    @yield('content')

    <!-- End content -->


    <!-- footer
      ================================================== -->
    @include('website.layouts.footer-2')

    <!-- End footer -->




 </div>












@section('script')


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset("/website/assets/js/jQuery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("/website/assets/js/jQuery.Migrate-v3.0.0.js") }}"></script>
    <script src="{{ asset("/website/assets/js/sPreloader.js") }}"></script>


    <script src="{{ asset("/website/assets/js/bootstrap.min.js") }}"></script>


    <script src="{{ asset("/website/assets/js/mixitup.min.js") }}"></script>


    <script src="{{ asset("/website/assets/js/mixitup.active.js") }}"></script>

    <script src="{{ asset("/website/assets/js/jquery.meanmenu.min.js") }}"></script>


    <script src="{{ asset("/website/assets/js/owl.carousel.min.js") }}"></script>
    
    <script src="{{ asset("/website/assets/js/video.popup.js") }}"></script>
    <script src="{{ asset("/website/assets/js/main.js") }}"></script>
     @show

</body>

</html>
