/*global $ */
$(document).ready(function () {

    "use strict";

    $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
    //Checks if li has sub (ul) and adds class for toggle icon - just an UI


    $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
    //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

    $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");

    //Adds menu-mobile class (for mobile toggle menu) before the normal menu
    //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
    //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
    //Done this way so it can be used with wordpress without any trouble

     $(".menu > ul > li").mouseenter(function (e) {
        if ($(window).width() > 943) {
            $(this).children("ul").stop(true, false).fadeIn(150);
            e.preventDefault();
        }
    });
	
	$(".menu > ul > li").mouseleave(function (e) {
        if ($(window).width() > 943) {
            $(this).children("ul").stop(true, false).fadeOut(150);
            e.preventDefault();
        }
    });
    //If width is more than 943px dropdowns are displayed on hover

    $(".menu > ul > li").click(function () {
        if ($(window).width() <= 943) {
            $(this).children("ul").fadeToggle(150);
        }
    }); 
    //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

    $(".menu-mobile").click(function (e) {
		if(!$(".menu-mobile").hasClass('mobCloseBtn')){
		$(".menu-mobile").addClass('mobCloseBtn');
		}else{
			$(".menu-mobile").removeClass('mobCloseBtn');
		}
        $(".menu > ul").toggleClass('show-on-mobile');
        e.preventDefault();
		
		 
    });
	
     $('.menu li').click(function(e) {
        if (!e) e = window.event;
        e.stopPropagation();
		if($(this).hasClass('toggle-sub')){
			$('.menu li.toggle-sub ul').hide();
			$(this).removeClass('toggle-sub');
 		}else{
			$('.menu li').removeClass('toggle-sub');
			$('.menu li').children('ul').hide();
			$(this).addClass('toggle-sub');
 			$(this).children('ul').show();
		}

  /* if ($(this).find('ul').length) {
		$('.menu li.toggle-sub ul').hide();
		  $('.menu li').removeClass('toggle-sub');
            $(this).toggleClass('toggle-sub');
        } else {
            $(this).parents('.toggle-sub').removeClass('toggle-sub');
        } */ 
    });  
    //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

});