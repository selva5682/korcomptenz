// Header Scroll down to see the sticky effect start.
// Scroll Top Script  
var btn = $('#buttontop');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

window.onscroll = function() {myFunction()};

var header = document.getElementById("kor_header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
// Header Scroll down to see the sticky effect end.

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

 $(".openmenu1").click(function(){
		  $(".opensubmenu1").toggleClass("show");
	  $(".openmenu1").toggleClass('special');
  });
 $(".openmenu2").click(function(){
		  $(".opensubmenu2").toggleClass("show");
	 $(".openmenu2").toggleClass('special');
  });
 $(".openmenu3").click(function(){
		  $(".opensubmenu3").toggleClass("show");
	 $(".openmenu3").toggleClass('special');
  });
 $(".openmenu4").click(function(){
		  $(".opensubmenu4").toggleClass("show");
	 $(".openmenu4").toggleClass('special');
  });
  
