
$(function () {
				$('#textInput1').placeholder();
				$('.text-input').placeholder({
					activeClass: 'text-input-placeholder_pos_top'
				});
});
		
<!--placeholder End--> 
<!--slideshow--> 
 $("#slideshow .slides li a").click(function(){
	  $("#slideshow .slides li").removeClass("intro");
	  if(!$(this).parent().hasClass('intro')){
     	 $(this).parent().addClass("intro");
	  }
 });
<!--slideshow End-->  


 $(".intro a").click(function(){
	  $("#slideshow .slides li").removeClass("intro");
 
 }); 
 
 


$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
//    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
target = $('#overview');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});



// top menu hover function instead of click
 var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  
    if (mobile) { 
     $('nav #navbarDropdown').removeAttr('data-toggle');
    } 
    else 
    { 
		$('nav #navbarDropdown').removeAttr('data-toggle');
       // alert("NOT A MOBILE DEVICE!!"); 
    }
$(document).ready(function(){
	$("nav .dropdown,nav .btn-group").hover(function(){
		var dropdownMenu = $(this).children(".dropdown-menu");
		if(dropdownMenu.is(":visible")){
			
			dropdownMenu.parent().toggleClass("open");
		}
	});
});

// side menu 
function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
			$("header nav .closebtn").addClass("show");
			$("header nav .closebtn").removeClass("hidden");
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	$("header nav .closebtn").addClass("hidden");
	$("header nav .closebtn").removeClass("show");
}
$(document).ready(function(){
// animation on scroll 
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      //$element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
  });

