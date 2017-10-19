function stickyNav(){

	$(window).scroll( function(){

		if( $(window).scrollTop() >= 550 ){

			$( ".section-nav" ).addClass( "is-transformed-sticky" );

		}

		if( $(window).scrollTop() < 550 ){

			$( ".section-nav" ).removeClass( "is-transformed-sticky" );

		}




	});


}


// The function actually applying the offset
function offsetAnchor() {
  if (location.hash.length !== 0) {
    window.scrollTo(window.scrollX, window.scrollY - 100);
  }
}

// Captures click events of all <a> elements with href starting with #
$(document).on('click', 'a[href^="#"]', function(event) {
  // Click events are captured before hashchanges. Timeout
  // causes offsetAnchor to be called after the page jump.
  window.setTimeout(function() {
    offsetAnchor();
  }, 0);
});

// Set the offset when entering page with hash present in the url
window.setTimeout(offsetAnchor, 0);

$(document).ready(function () {

	stickyNav();

});    

/*$(window).on('load', function (e) {


})*/