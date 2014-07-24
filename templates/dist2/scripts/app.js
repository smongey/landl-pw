// SEAN FUN
function l(o){ console.log(o) }

// var home = {
// 	container : $('.home'),
// 	headerHeight : $('header').height(),
// 	navHeight : $('nav').outerHeight(),
// 	wH : $(window).height(),

// 	remainingHeight : function(){
// 		return	Math.round(this.wH - (this.headerHeight + this.navHeight))

// 	},
// 	scaleHome : function(){
// 		this.container.css({
// 		 'height' : this.remainingHeight()
// 		});
// 	}
// }

var nav = {
	isClosed : true,
	studioPos : $('#studio').offset().left
}	


$(window).on('resize', function(){
	wH = $(window).height();

	nav.studioPos = $('#studio').offset().left;
	$('ul.studio').css({
		'left' : nav.studioPos
	});
});

$('#studio').on('click', function(event){
	event.preventDefault();
	$('ul.studio').css({
		'left' : nav.studioPos
	});
	l('clicked ' + nav.isClosed);
	if(nav.isClosed) {
		$('ul.studio').addClass('open');
		nav.isClosed = false;
	} else {
		$('ul.studio').removeClass('open');
		nav.isClosed = true;
	}
});


$(document).ready(function($) {
	var si = $('#gallery-1').royalSlider({
		addActiveClass: true,
		arrowsNav: false,
		slidesSpacing:0,
		controlNavigation: 'none',
		autoScaleSlider: false, 
		//autoScaleSliderWidth: 960,     
		//autoScaleSliderHeight: 340,
		loop: false,
		fadeinLoadedSlide: false,
		globalCaption: true,
		keyboardNavEnabled: true,
		globalCaptionInside: false,

		visibleNearby: {
			enabled: true,
			centerArea: .9,
			center: true
			//breakpoint: 650,
			//breakpointCenterArea: 0.64,
			//navigateByCenterClick: true
		}
	}).data('royalSlider');


	var si = $('#gallery-2').royalSlider({
		addActiveClass: true,
		arrowsNav: false,
		slidesSpacing:0,
		controlNavigation: 'none',
		autoScaleSlider: false, 
		loop: false,
		fadeinLoadedSlide: false,
		globalCaption: true,
		keyboardNavEnabled: true,
		globalCaptionInside: false,

		visibleNearby: {
			enabled: true,
			centerArea: .9,
			center: true
		}
	}).data('royalSlider');

	var si = $('#gallery-3').royalSlider({
		addActiveClass: true,
		arrowsNav: false,
		slidesSpacing:0,
		controlNavigation: 'none',
		autoScaleSlider: false, 
		loop: false,
		fadeinLoadedSlide: false,
		globalCaption: true,
		keyboardNavEnabled: true,
		globalCaptionInside: false,

		visibleNearby: {
			enabled: true,
			centerArea: .9,
			center: true
		}
	}).data('royalSlider');

	var si = $('#gallery-4').royalSlider({
		addActiveClass: true,
		arrowsNav: false,
		slidesSpacing:0,
		controlNavigation: 'none',
		autoScaleSlider: false, 
		loop: false,
		fadeinLoadedSlide: false,
		globalCaption: true,
		keyboardNavEnabled: true,
		globalCaptionInside: false,

		visibleNearby: {
			enabled: true,
			centerArea: .9,
			center: true
		}
	}).data('royalSlider');


	var si = $('#project').royalSlider({
        autoScaleSlider: true,
        autoScaleSliderWidth: 600,
        autoplay:{
			enabled:true,
			stopAtAction:true,
			delay:2000
		},
		imageScaleMode: 'fit-if-smaller', 
        keyboardNavEnabled: true,
       	imageScalePadding: 0,
        arrowsNav: true,
        controlNavigation: 'none',
        arrowsNavAutoHide: false,
        slidesSpacing: 0,
        transitionSpeed: 400,
        controlsInside: false
    }).data('royalSlider');


	var si = $('.royalSlider-home').royalSlider({
		autoScaleSlider:true,
		transitionType:"fade",
		autoplay:{
			enabled:true,
			stopAtAction:false,
			delay:2000
		},
		autoScaleSliderWidth: 1280,
		autoScaleSliderHeight: 580,
		imageScaleMode:"fit",
		keyboardNavEnabled:false,
		imageScalePadding:0,
		arrowsNav:false,
		controlNavigation:"none",
		arrowsNavAutoHide:!1,
		slidesSpacing:0,
		transitionSpeed:1000,
		controlsInside:!1
	}).data('royalSlider');

	var si = $('#sustainability').royalSlider({
		autoScaleSlider:true,
		transitionType:"fade",
		autoplay:{
			enabled:true,
			stopAtAction:false,
			delay:2000
		},
		autoScaleSliderWidth: 1280,
		autoScaleSliderHeight: 580,
		imageScaleMode:"fit",
		keyboardNavEnabled:false,
		imageScalePadding:0,
		arrowsNav:false,
		controlNavigation:"none",
		arrowsNavAutoHide:!1,
		slidesSpacing:0,
		transitionSpeed:1000,
		controlsInside:!1
	}).data('royalSlider');



	var si = $('#people').royalSlider({
		addActiveClass: true,
		slidesSpacing:0,
		controlNavigation: 'none',
		autoScaleSlider: false,
		autoScaleSliderHeight: 1000, 
		loop: false,
        arrowsNav: false,
        arrowsNavAutoHide: false,
		fadeinLoadedSlide: false,
		globalCaption: true,
		keyboardNavEnabled: true,
		globalCaptionInside: false,

		visibleNearby: {
			enabled: true,
			centerArea: .9,
			center: false
		}
	}).data('royalSlider');

});