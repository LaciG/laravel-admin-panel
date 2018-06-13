/* sticky navbar */
$(document).ready(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 150) {
			$('#nav a').addClass('sticky');
			$('.activeNav').addClass('changed');
			$('#home #nav, #karrier #nav, #job #nav, #startup #nav, #na404 #nav, #gdpr #nav, #services-app #nav, #services-marketing #nav, #services-graphic #nav, #services-webdevelop #nav').css("background-color", "rgba(0, 0, 0, 0.8)");
		} else {
			$('#nav a').removeClass('sticky');
			$('#nav').css("background-color", "transparent");
			$('.dropdown1 a').css("padding", "0px 15px !important");
			$('.activeNav').removeClass('changed');
		}
	});
});
/* sticky navbar end */
/* gdpr modal */
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
/* gdpr modal end*/
/* select */
$(document).ready(function() {
    $('select').material_select();
});
/* select end */
/* lang dropdown */
$(document).ready(function () {
	$('.dropdown-button').dropdown();
});
/* lang dropdown end */

/* navbar mobil */
$(document).ready(function () {
	$(".button-collapse").sideNav();
});
/* navbar mobil end */

/* navbar .active */
function navbar() {
	var bodyId = document.body.id;
	$('#nav li').removeClass('activeNav');
	if (bodyId === 'home') {
		$('#' + bodyId + ' li a:contains(FŐOLDAL)').parent().addClass('activeNav');
		$('#' + bodyId + ' li a:contains(HOME)').parent().addClass('activeNav');
	}
	if (bodyId === 'blog' || bodyId === 'blog-article') {
		$('#' + bodyId + ' li a:contains(BLOG)').parent().addClass('activeNav');
	}
	if (bodyId === 'gdpr' || bodyId === 'gdpr') {
		$('#' + bodyId + ' li a:contains(GDPR)').parent().addClass('activeNav');
	}
	if (bodyId === 'services-app' || bodyId === 'services-marketing' || bodyId === 'services-graphic' || bodyId === 'services-webdevelop') {
		$('#' + bodyId + ' li a:contains(SZOLGÁLTATÁSOK)').parent().addClass('activeNav');
	}
	if (bodyId === 'startup') {
		$('#' + bodyId + ' li a:contains(STARTUP)').parent().addClass('activeNav');
	}
	if (bodyId === 'karrier' || bodyId === 'job') {
		$('#' + bodyId + ' li a:contains(KARRIER)').parent().addClass('activeNav');
		$('#' + bodyId + ' li a:contains(CARRIER)').parent().addClass('activeNav');
	}
}
$(document).ready(function () {
	navbar();
});

/* navbar .active end */

/* blog filter */
$(document).ready(function () {
	$("#blog-buttons .filter-button").click(function () {
		var value = $(this).attr('data-filter');
		$('#blog-buttons .active').removeClass('active');
		$(this).addClass('active');
		if (value == "all") {
			$('.filter').show(1000);
		} else {
			$('.filter').not('.' + value).hide(1000);
			$('.filter').filter('.' + value).show(1000);
		}
	});
});
/* blog filter end */

/* gallery active */
$(document).ready(function () {
	$("#gallery .filter-button").click(function () {
		$('#gallery .active').removeClass("active");
		$(this).addClass('active');
	});
});
/* gallery active end */

/* scrollfire */
$(document).ready(function () {
	var options2 = [{
		selector: '.header-text',
		offset: 250,
		callback: function (el) {
			$('.header-text').addClass('animated zoomInDown');
		}
	}, {
		selector: '#test',
		offset: 250,
		callback: function (el) {
			$('#test').addClass('animated rotateInDownLeft');
		}
	}, {
		selector: '#test2',
		offset: 250,
		callback: function (el) {
			$('#test2').addClass('animated rotateInDownRight');
		}
	}, {
		selector: '#test3',
		offset: 250,
		callback: function (el) {
			$('#test3').addClass('animated rotateInDownLeft');
		}
	}, {
		selector: '#test4',
		offset: 250,
		callback: function (el) {
			$('#test4').addClass('animated rotateInDownRight');
		}
	}, {
		selector: '#test5',
		offset: 250,
		callback: function (el) {
			$('#test5').addClass('animated rotateInDownLeft');
		}
	}, {
		selector: '#test6',
		offset: 250,
		callback: function (el) {
			$('#test6').addClass('animated rotateInDownRight');
		}
	}, {
		selector: '#test7',
		offset: 150,
		callback: function (el) {
			$('#test7').addClass('animated rotateInDownLeft');
		}
	}, {
		selector: '#test8',
		offset: 150,
		callback: function (el) {
			$('#test8').addClass('animated rotateInDownRight');
		}
	}, {
		selector: '#test9',
		offset: 150,
		callback: function (el) {
			$('#test9').addClass('animated rotateInDownLeft');
		}
	}, {
		selector: '#test10',
		offset: 150,
		callback: function (el) {
			$('#test10').addClass('animated rotateInDownRight');
		}
	}, {
		selector: '#test11',
		offset: 150,
		callback: function (el) {
			$('#test11').addClass('animated rotateInDownLeft');
		}
	}, {
		selector: '#test12',
		offset: 150,
		callback: function (el) {
			$('#test12').addClass('animated rotateInDownRight');
		}
	}, {
		selector: '.roundedbg',
		offset: 250,
		callback: function (el) {
			$('.roundedbg').addClass('animated fadeIn');
		}
	}];
	Materialize.scrollFire(options2);
});
/* scrollfire end */

/* carousel */
$(document).ready(function () {
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 30,
		autoWidth: false,
		autoplay: true,
		autoplaySpeed: 1000,
		responsive: {
			0: {
				items: 3
			},
			600: {
				items: 5
			},
			1200: {
				items: 7
			}
		}
	});
});
/* carousel end */

$(document).ready(function(){
	var pageHref = window.location.href;
	if(pageHref === 'https://drukka.hu/gdpr'){
		$('.navbar-contact').attr('href', '#gdpr-sending-form');
	}
});
