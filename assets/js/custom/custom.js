/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Lisa DeBona
 */

jQuery(document).ready(function ($) {
	AOS.init();

	/* Mobile Navigation */
	adjustElements();
	$(window).on('orientationchange resize',function(){
	  adjustElements();
	});
  
	function adjustElements() {
	  if( $(window).width() < 1140 ) {
		$('.desktop-navigation .primary-menu-wrap').appendTo('.mobile-navigation');
	  } else {
		$('.mobile-navigation .primary-menu-wrap').appendTo('.desktop-navigation');
		// For new homepage
		$('.desktop-navigation .primary-menu-wrap').appendTo('.navigation-forall');
	  }
	}
  
	$(document).on('click','#mobile-menu-toggle',function(){
	  $('body').toggleClass('mobile-menu-open');
	  $(this).toggleClass('active');
	  $('.mobile-navigation').toggleClass('active');
	});
  
	$(document).on('click','#overlay',function(){
	  $(this).removeClass('active');
	  $('body').removeClass('mobile-menu-open');
	  $('#mobile-menu-toggle').removeClass('active');
	  $('.mobile-navigation').removeClass('active');
	});
	/* Mobile Navigation - end */

	  /* FAQS */
	  $(document).on('click','.faqs .faq-title',function(){
		$(this).parent().toggleClass('active');
		$(this).next().slideToggle();
	  });
	  /* FAQS end */

var params = {}; location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (s, k, v) { params[k] = v });

/*
*
*     Subnaviagation Animation
*
*
*/
$('li.menu-item').hover(function() {
    $(this).toggleClass('active');
    $(this).find('.mega-menu .mega-menu-content .menu-col').toggleClass('is-hovered');
});


var subMenus = $(".mega-menu");

$.each($(".menu-item"), function(index, element) {
  let subMenu = $(element).children('.mega-menu'), tl;
  let subMenuItems = $(subMenu).children('li');
  
  if(subMenu.length != 0) {
    tl = new gsap.timeline({paused:true});
    
    tl.from(subMenu, .05, {height:0});
    // tl.staggerTo(subMenuItems, 0.6, {
    //   top: "0px",
    //   ease: Expo.easeInOut,
    // }, 0.1, "-=0.8");
    
    element.subMenuAnimation = tl;
    
    $(element).hover(menuItemOver, menuItemOut);
  } 
});

function menuItemOver(e) {
  this.subMenuAnimation.play();
}

function menuItemOut() {
  this.subMenuAnimation.reverse();
}

/*
*
*     Fixed Navigation on Scroll up
*
*
*/
// Get the navigation bar element
const navbar = document.getElementById("masthead");

// Initialize the previous scroll position
let prevScrollPosition = window.pageYOffset;

window.addEventListener("scroll", () => {
  // Get the current scroll position
  const currentScrollPosition = window.pageYOffset;

  // Check if the user has scrolled up
  if (currentScrollPosition < prevScrollPosition) {
    // Set the navbar's position to fixed
    navbar.classList.add("fixed");
    navbar.classList.remove("scrolling");
  } else {
    // Optionally, you can unfix the navbar if the user scrolls down
    // Uncomment the following line if you want this behavior
    navbar.classList.remove("fixed");
    navbar.classList.add("scrolling");
    // navbar.classList.remove("start-position");
  }

   // Check if the user is at the top of the page
  if (currentScrollPosition === 0) {
    navbar.classList.add("start-position");
    navbar.classList.remove("fixed");
  } else {
    navbar.classList.remove("start-position");
  }

  // Update the previous scroll position
  prevScrollPosition = currentScrollPosition;
});

$(".header-socials-list a span").each(function(e) {
	let elem = $(this),
	    t = elem.html();
	elem.html("<i><b>"+t+"</b><b>"+t+"</b></i>");
});

$(".mobile-navigation #primary-menu li a span").each(function(e) {
	let elem = $(this),
		b = elem.find("b");
	let i = $("<i>"+b.html()+"</i>");
	i.appendTo(elem);
});

$(".footer-list ul li a").each(function(e) {
	let elem = $(this),
	t = elem.html();
	elem.html("<span>"+t+"</span><span>"+t+"</span>");
});

if( $("#sitemap").length > 0 ) {
	$("ul#sitemap li a").each(function(e) {
		let elem = $(this),
		t = elem.html();
		elem.html("<span>"+t+"</span><span>"+t+"</span>");
	});
}

$(document).on("click", "a.mobile-parent-link", function(e) {
  e.preventDefault();
    $(this).parent().toggleClass('show-submenu');
    $(this).parent().find('.mega-menu-mobile').slideToggle();
    // if ($(this).hasClass('toggled')) {
    //     window.location.href = $(this).attr('href');
    // } else {
    //     e.preventDefault();
    //     $(this).next().slideToggle();
    //     $(this).addClass('toggled');
    // }
});

// Testimonials - Repeatable
if( $(".quote-slider").length > 0 ) {
	$('.quote-slider').owlCarousel({
		items:1,
		nav: true,
		loop:true,
		margin:0,
		dots: false,
		autoplay: false,
		smartSpeed: 1000,
		//autoplayTimeout:5000,
		//autoplayHoverPause:true,
		navContainer: '#quoteNav',
		navText: ["<div class='arrow-wrapper'><i class='arrow-prev right'></i><i class='arrow-prev'></i></div>", "<div class='arrow-wrapper'><i class='arrow-next left'></i><i class='arrow-next'></i></div>"]
	});
}

$(".fs-rest .fs-label-wrap").on("click", function (e) {
    e.preventDefault();
    $(this).toggleClass("fs-open");
    $(this).next('.fs-dropdown').toggleClass('fs-hidden');
  });


// init Isotope
var $container = $('#rest-isotope').isotope({
  itemSelector: '.item'
});

// filter with selects and checkboxes
var $checkboxes = $('#form-ui input');

$checkboxes.change( function() {
  // map input values to an array
  var inclusives = [];
  // inclusive filters from checkboxes
  $checkboxes.each( function( i, elem ) {
    // if checkbox, use value if checked
    if ( elem.checked ) {
      inclusives.push( elem.value );
    }
  });

  // combine inclusive filters
  var filterValue = inclusives.length ? inclusives.join(', ') : '*';

  // $output.text( filterValue );
  $container.isotope({ filter: filterValue })
});



 $("a#inline").fancybox({
    'hideOnContentClick': true
  });

	$('[data-fancybox]').fancybox({
		touch : true,
		hash : false,
    youtube : {
        controls : 0,
        showinfo : 0,
        rel: 0
    },
    vimeo : {
        color : 'ffffff'
    }
	});

	$('.zoom-image').fancybox({
	  buttons : ['fullScreen','close'],
	  hash : false
	});

	var windowHeight = $(window).scrollTop();
	if(windowHeight  > 200) {
		$("body").addClass('scrolled');
	}

	$(window).scroll(function() {    
		var wHeight = $(window).scrollTop();
		if(wHeight  > 200) {
			$("body").addClass('scrolled');
		} else{
			$("body").removeClass('scrolled');
			//$('body').removeClass('subnav-clicked');
		}
	});

	if( $("#banner").length > 0 && $("#pageTabs").length>0 ) {
		$(window).scroll(function() { 
			var tabsHeight = $("#pageTabs").height();
			if( $(".main-description").length>0 ) {
				var main = $(".main-description").height();
				tabsHeight = main;
			}
			var bannerHeight = $("#banner").height();
			var screenOffset = bannerHeight + tabsHeight;
			var wHeight = $(window).scrollTop();
			if(wHeight  > screenOffset) {
				$("#pageTabs").addClass('fixed-top');
			} else {
				$("#pageTabs").removeClass('fixed-top');
			}
		});
	}
  
	// tiny helper function to add breakpoints
	var getGridSize = function() {
	return (window.innerWidth < 600) ? 1 :
			(window.innerWidth < 900) ? 2 : 3;
	}

	if( $(".video__vimeo").length > 0 ) {
		$(".video__vimeo").each(function(){
			var target = $(this);
			var vimeoURL = $(this).attr("data-url");
			var apiURL = 'https://vimeo.com/api/oembed.json?url='+vimeoURL;
			$.get(apiURL,function(data){
				var thumbnail = data.thumbnail_url;
				target.css("background-image","url('"+thumbnail+"')");
			});
		});
	}

	var is_video_playing = false;

	var $slides = $('.flexslider .slides li');
    if ($slides.length > 0) {
        $slides.eq(1).add($slides.eq(-1)).find('img.lazy')
            .each(function () {
                var src = $(this).attr('data-src');
                $(this).removeClass('lazy');
                $(this).attr('src', src).removeAttr('data-src');
            });
    }

    var slideShow = $('.flexslider').flexslider({
		animation: "fade",
		smoothHeight: true,
		before: function (slider) { 
			var $slides = $(slider.slides),
                index = slider.animatingTo,
                current = index,
                nxt_slide = current + 1,
                prev_slide = current - 1;
            if ($slides.length > 0) {
                $slides.eq(current).add($slides.eq(nxt_slide)).add($slides.eq(prev_slide))
                    .find('img.lazy').each(function () {
                        var src = $(this).attr('data-src');
                        $(this).removeClass('lazy');
                        $(this).attr('src', src).removeAttr('data-src');
                    });
                if($slides.eq(current).find('.videoIframe').length > 0){

	    			$(".videoIframeDiv").removeClass("playing");
	    			$(".videoIframe").hide();

                    $("body").addClass("current-slide-is-video");
                } else {
                	$("body").removeClass("current-slide-is-video");
                }
            }
		},
		start: function(slider){
			var $slides = $(slider.slides);
            if ($slides.length > 0) {
                play_flexslider_video(slider);
            }
            
		}
	});

    $(document).on("click",".flex-next, .flex-prev",function(e){
    	e.preventDefault();
    	if( $("iframe.videoIframe").length > 0 ) {
    		$("iframe.videoIframe").each(function(){
    			var type = $(this).attr("data-vid");
    			if(type=='youtube') {
    				var parent = $(this).parents(".videoIframeDiv");
    				var embedURL = parent.find(".playVidBtn").attr("data-embed");
    				if(e.target.outerText=='Next') {
    					$(this).attr("src",embedURL);
    				}
    			} 
    			else if(type=='vimeo') {
 					var iframe = $(this)[0];
					var player = new Vimeo.Player(iframe);
					player.pause();
    			}
    		});
    	}
    });

    function play_flexslider_video(slider) {
		$(document).on("click",".playVidBtn",function(e){
			e.preventDefault();
			var type = $(this).attr("data-type");
			var parent = $(this).parents(".videoIframeDiv");
			if(type=='youtube') {
				var iframeSRC = $(this).attr("data-embed");
				parent.find("iframe.videoIframe")[0].src += "&autoplay=1";
				//parent.find("iframe.videoIframe").attr("src",iframeSRC+"&autoplay=1");
				parent.addClass("playing");
				parent.find("iframe.videoIframe").fadeIn();
				is_video_playing = true;
				slider.stop();
			}
			else if(type=='vimeo') {
				var iframe = parent.find("iframe.videoIframe")[0];
				var player = new Vimeo.Player(iframe);
				parent.addClass("playing");
				parent.find("iframe.videoIframe").fadeIn();
				player.play();
				slider.stop();
			}
		});


    }

	// Button Custom for longer text in button
	if( $('.two_column_image_and_text .button-custom').length > 0 && $(window).width() < 580){
		$('.two_column_image_and_text').each( function(){
			var btn = $(this).find('.button-custom');
			var anchor = btn.children('a');
			var height = btn.find('span').first().height();

			anchor.css('height', (height + 12) + 'px');
			anchor.children('span').css('height', (height + 14.4) + 'px');
			btn.hover(
				function(){
					$(this).find('span').css('transform', 'translateY(-'+ (height + 14.4) +'px)');
				},
				function(){
					$(this).find('span').css('transform', 'translateY(0');
				}
			);
		});
	}

	// $('a[href*="#"]:not([href="#"])').click(function() {
    // var headHeight = $("#masthead").height();
	// 	var offset = headHeight + 140;

    // if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    //     var target = $(this.hash);
    //     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    //     if (target.length) {
    //       $('html, body').animate({
    //           scrollTop: target.offset().top - offset
    //       }, 1000);
    //       return false;
    //     }
    // }
	// });

	// Productivity
	if($('#sticky-filter').length > 0){
		$('a[href*="#"]:not([href="#"])').click(function() {
			var headHeight = $("#sticky-filter").height();
			var offset = headHeight + 96;
		
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
				  $('html, body').animate({
					  scrollTop: target.offset().top - offset
				  }, 1000);
				  return false;
				}
			}
		});
	}

  $('.select-single').select2();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

	$('.js-blocks').matchHeight();
	$('.js-title').matchHeight();

	$(document).on("click","#toggleMenu",function(){
		$(this).toggleClass('open');
		$('body').toggleClass('open-mobile-menu');
	});

	if( $("#filter-form").length>0 ) {
		$(document).on("change",".select-filter",function(e){
			e.preventDefault();
			var opt = $(this).val();
			var name_sel_att = $(this).attr("name");
			var url = $("input#baseurl_input").val();
			var params = '';

			var n=1; $(".select-filter").each(function(){
				var nameAtt = $(this).attr("name");
				var delimiter = (n==1) ? '?':'&';
				var val = $(this).find("option:selected").val();
				params += delimiter + nameAtt +"="+val;
				n++;
			});

			var base_url = url + params;
			$("#loaderDiv").addClass("show");
			
			$("#load-post-div").load(base_url+" #load-data-div",function(){
				$('.select-single').select2();
				setTimeout(function(){
					$("#loaderDiv").removeClass("show");
				},600);
			});

		});
	}

	// if( $("select.js-select").length>0 ) {
	// 	$("select.js-select").each(function(){
	// 		var selectID = $(this).attr("id");
	// 		$("select#"+selectID).select2({
	// 			closeOnSelect : false,
	// 			placeholder : "Select...",
	// 			allowHtml: true,
	// 			allowClear: true,
	// 			tags: true,
	// 			width: 'resolve'
	// 		});
	// 	});
	// }

  $(document).on('click', '.accordion-handle', function(e){
    e.preventDefault();
    var target = $(this);
    var parent = $(this).parent();
    if( $(this).attr('aria-expanded')=='false' ) {
      $(this).attr('aria-expanded', 'true');
    } else {
      $(this).attr('aria-expanded', 'false');
    }
    $(this).toggleClass('active');
    $(this).next().slideToggle();
    //$('.accordion .accordion-item').not(parent).removeClass('active');
    $('.accordion .accordion-item').not(parent).each(function(){
      $(this).removeClass('active');
      $(this).find('.accordion-handle').removeClass('active');
      $(this).find('.accordion-details').slideUp();
    });
    parent.toggleClass('active');
  });

  setTimeout(function() {
	  $('.loading-bar-progress').css('width', '100%');
	  setTimeout(function() {
		  $('body').removeClass('loading');
		  setTimeout(function() {
			$('#loading').remove();			
		}, 500);
	  }, 200);
  }, 1000);
});// END #####################################    END