// PARALLAX SCROLLING OF BANNER
$(window).scroll(function(e){
  if ($(window).width() > 800) {
    funkyScroll();
  }
});

function funkyScroll(){
	var banner = $('.banner');
	var bannerHeight = banner.innerHeight();
  var scrolled = $(window).scrollTop();
  translate = 'translateY('+ -(scrolled*0.2) + 'px)';
  banner.css({
  	"-webkit-transform": translate,
  	"transform": translate,
  	"opacity": "1"-(scrolled/bannerHeight)
  }) 
}

// function funkyScroll(){
// 	var banner = $('.banner');
// 	var bannerHeight = banner.innerHeight();
//   var scrolled = $(window).scrollTop();
//   translate = -(scrolled*0.2) + 'px';
//   banner.css({
//   	"top" : translate,
//   	"opacity": "1"-(scrolled/bannerHeight)
//   }) 
// }

$('.burgWrapper').bind("click", function(event) {
  $('.mainNav').toggleClass('activeNav');
  $('.burg').toggleClass('activeBurg');
})