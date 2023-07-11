$(function(){
	'use-strict';

	// side nav left
	$(".side-nav-left").sideNav({
		edge: 'left',
		closeOnClick: false,
	});

	// slider
	$(".slider").slider({
		full_width: true,
	});

	// properties
	$("#owl-properties").owlCarousel({
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,
	})

	// testimonial
	$("#owl-testimonial").owlCarousel({
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,
	})

	// latest-news
	$(".latest-news-owl").owlCarousel({
		autoPlay : false,
		singleItem: true,
	})

	// loader
    $("#fakeLoader").fakeLoader({
	    zIndex: 999,
	    spinner: 'spinner1',
	    bgColor: '#ffffff',
    });

    // collapsible
    $('.collapsible').collapsible({
		accordion: false,
	});

	// date
	$('.datepicker').pickadate({
	    selectMonths: true,
	    selectYears: 15 
	});

    // select
	$('select').material_select();

});