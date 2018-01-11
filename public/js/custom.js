
/*** Loader ***/
jQuery(window).on('load', function(e) {  // executes when complete page is fully loaded, including all frames, objects images
  jQuery(".body-wrapper").css("display", "block");
  jQuery(".preload").fadeOut(3000);
});

  var ypos, image;
  function parallax () {
      ypos = window.pageYOffset;
      image = document.getElementById('image');
      image.style.top = ypos * .8 + 'px'; //don't go above 1
  }

  //when window detect the user is scrolling, call the function parallax
  window.addEventListener('scroll', parallax);  // first parameter is event, second parameter is the function call


/* Profile Page - Smmoothing move to the anchor (Profile Section) */
  jQuery(window).on('load', function(e) {
    if(jQuery("#main-content").length > 0) {
        $('html, body').animate({
          scrollTop: $("#main-content").offset().top
        }, 3000);
      }
  });
