


@extends('website.layouts.main')
@section('page_title', 'Sivaltech- Gallery Demo Page')


@section('description', 'Sivaltech was founded with a vision of becoming a leading service provider in VLSI and Embedded Software by exceeding expectations on delivery, meeting stringent schedules, demonstrating integrity and intelligence in all our engagements.')




	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset("/website/gallery/css/vendor/bootstrap.min.css") }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset("/website/gallery/css/vendor/font-awesome.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/website/gallery/css/vendor/owl.carousel.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/website/gallery/css/vendor/owl.theme.default.min.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/website/css/vendor/magnific-popup.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("/website/gallery/css/vendor/animate.min.css") }}">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
@section('content')
   <!-- OUR GALLERY -->
   <div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="supheading text-center">Our Gallery</p>
						<h2 class="section-heading text-center mb-5">
							Moment from kids
						</h2>
					</div>
				</div>
				
				<div class="row popup-gallery gutter-5">
					<!-- Item 1 -->
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="{{ asset("/website/assets/images/sliderimg4.jpg") }}" title="Gallery #1">
								<img src="{{ asset("/website/assets/images/sliderimg4.jpg") }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 2 -->
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="{{ asset("/website/assets/images/sliderimg4.jpg") }}" title="Gallery #2">
								<img src="{{ asset("/website/assets/images/sliderimg4.jpg") }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="{{ asset("/website/assets/images/sliderimg4.jpg") }}" title="Gallery #3">
								<img src="{{ asset("/website/assets/images/sliderimg4.jpg") }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 4 -->
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="{{ asset("/website/assets/images/sliderimg4.jpg") }}" title="Gallery #4">
								<img src="{{ asset("/website/assets/images/sliderimg4.jpg") }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 5 -->
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="{{ asset("/website/assets/images/sliderimg4.jpg") }}" title="Gallery #5">
								<img src="{{ asset("/website/assets/images/sliderimg4.jpg") }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- Item 6 -->
					<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="{{ asset("/website/assets/images/sliderimg4.jpg") }}" title="Gallery #6">
								<img src="{{ asset("/website/assets/images/sliderimg4.jpg") }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					





<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="{{ asset("/website/assets/images/sliderimg4.jpg") }}" title="Gallery #6">
								<img src="{{ asset("/website/assets/images/sliderimg4.jpg") }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>


<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="{{ asset("/website/assets/images/sliderimg4.jpg") }}" title="Gallery #6">
								<img src="{{ asset("/website/assets/images/sliderimg4.jpg") }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>


<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box-gallery">
							<a href="{{ asset("/website/assets/images/sliderimg4.jpg") }}" title="Gallery #6">
								<img src="{{ asset("/website/assets/images/sliderimg4.jpg") }}" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>



				</div>
				
			</div>
		</div>
	</div>
  @section('script')

<!-- 
gellery end -->

<script src="{{ asset("/website/gallery/js/vendor/modernizr.min.js") }}"></script>
<script src="{{ asset("/website/gallery/js/vendor/jquery.min.js") }}"></script>
	<script src="{{ asset("/website/gallery/js/vendor/bootstrap.min.js") }}"></script>
	<script src="{{ asset("/website/gallery/js/vendor/owl.carousel.js") }}"></script>
	<script src="{{ asset("/website/gallery/js/vendor/jquery.magnific-popup.min.js") }}"></script>

	<!-- SENDMAIL -->
	<script src="{{ asset("/website/gallery/js/vendor/validator.min.js") }}"></script>
	<script src="{{ asset("/website/gallery/js/vendor/form-scripts.js") }}"></script>

	<script src="{{ asset("/website/gallery/js/script.js") }}"></script>
	<script src="{{ asset("/website/gallery/js/custom.js") }}"></script>

@parent


@endsection
@stop