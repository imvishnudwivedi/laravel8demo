/*=======================================================================================
* Author        : Graph Theme
* Template Name : Turn Digital Agency html Template 
* File          : Main js files
* Version       : 1.0
*=============================================================================================*/

(function ($) {

	if ($(window).width() < 814) {	
    	$('#video-slide-big').remove();
    }else{
		$('#video-slide-small').remove();
	}

	"use strict";

				/*preloader*/

				// $('body').jpreLoader({
    	        //    preMainSection:     '#main-preloader',
    	        //    prePerText:         '.preloader-percentage-text',
    	        //    preBar:             '.preloader-bar',
	       		// });    

			
			  /*scroll to  top*/
			
			 $(window).on('scroll', function () {
				    if ($(this).scrollTop() >=700) {
				        $('.top_to').fadeIn(500);
				    }
				    else {
				        $('.top_to').fadeOut(500);
				    }
				}
				);

				$('.top_to').on('click', function () {
				    $('body,html').animate( {
				        scrollTop: 0
				    }
				    , 500);
				}
				);

			/*mobile menu*/
			    $('.main-manu').meanmenu({
			         meanScreenWidth: "991",
			         meanMenuContainer: '.mobile-manu-container'
			    });

			/*site bar toggle*/

			$('.toggle-menu').on('click', function(){
				$('.add').toggleClass('active');
			})

			$('.mobile-munu-cross,.sitebar-cross').on('click',function(){
				$('.add').removeClass('active');
			});
			
			/*navar sticky*/
			$(window).on('scroll',function () {
			    if ($(this).scrollTop() > 5) {
			        $('.navbarr').addClass("my_sticky");
			    } 
			    else {
			        $('.navbarr').removeClass("my_sticky");
			    }
			    if ($(this).scrollTop() > 500) {
			        $('.navbarr').addClass("my_sticky1");
			    } 
			    else {
			        $('.navbarr').removeClass("my_sticky1");
			    }

			});



	jQuery(document).ready(function($){


		/*home page activation*/
		$('.homepage-slide').owlCarousel({
		    items:1,
		    loop:true,
		    // margin:10,
			dots:false,
			video:true,
			autoplay:true,
    		autoplayTimeout:10000,
    		autoplayHoverPause:true,
		    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		    responsive:{
		       768:{
		            items:1,
		            nav:true,
		            loop:true
		        },
		        300:{
		            items:1,
		            nav:true,
		            loop:true
		        }
		    }
		});

		$(".homepage-slide").on("translate.owl.carousel", function(){
			$(".single-slide-item h2,.single-slide-item p,.btn-explor,.video1").removeClass("animated fadeInUp").css("opacity","0");
		});
		$(".homepage-slide").on("translated.owl.carousel", function(){
			$(".single-slide-item h2,.single-slide-item p,.btn-explor,.video1").addClass("animated fadeInUp").css("opacity","1");
		});

		/*what do owl carosusel activation*/
		$('.what-do').owlCarousel({
		    items:1,
		    loop:true,
		    margin:10,
		    nav:true,
		    dots:false,
		    navText : ['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
		    responsive:{
		       
		    }
		});

		/*tesimonial owl carosusel activation*/
		$('.testmonial-slide').owlCarousel({
		    items:3,
		    loop:true,
		    margin:10,
		    nav:false,
		    dots:true,
		    responsive:{
		       992:{
		            items:3,
		            nav:true,
		            loop:true
		        },
		        768:{
		            items:2,
		            loop:true
		        },
		        100:{
		            items:1,
		            loop:true
		        }
		    }
		});

		/*testimonial-one-1 slide activation*/
		$('.testmonial-one').owlCarousel({
		    items:1,
		    loop:true,
		    margin:10,
		    nav:true,
		    dots:false,
		    navText : ['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
		    responsive:{
		       992:{
		            items:1,
		            nav:true,
		            loop:true
		        },
		        768:{
		            items:1,
		            loop:true
		        },
		        100:{
		            items:1,
		            loop:true
		        }
		    }
		})

		/*partner blog owl carousel activation*/
		$('.pertner-slide').owlCarousel({
		    items:5,
		    loop:true,
		    center:true,
		    nav:false,
		    dots:false,
		    autoplay:true,
		    responsive:{
		       992:{
		            items:5,
		            loop:true
		        },
		        768:{
		            items:4,
		            loop:true
		        },
		        385:{
		            items:3,
		            loop:true
		        },
		        100:{
		            items:2,
		            loop:true
		        }
		    }
		});

		/*Counter Up activation*/
	    // $('.counter').counterUp({
	    //     delay: 10,
	    //     time: 1000
	    // });
	});

	/*vidoe active*/
	$(".video1").videoPopup({
                autoplay: 1,
                controlsColor: 'white',
                showVideoInformations: 0,
                width: 1000,
                customOptions: {
                    rel: 0,
                    end: 60
                }
        });
	$("#video").videoPopup({
                autoplay: 1,
                controlsColor: 'white',
                showVideoInformations: 0,
                width: 1000,
                customOptions: {
                    rel: 0,
                    end: 60
                }
        });
    

})(jQuery);


















