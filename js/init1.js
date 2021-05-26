(function ($) {
  $(function () {

    $('.sidenav').sidenav();

    // Slider
    $('.slider').slider({
      fullWidth: true,
      indicators: false,
      transition: 600,
      interval: 3000,
      height: 500



      //Parallax

    });
    $(document).ready(function () {
      $('.parallax').parallax();
    });




  }); // end of document ready
})(jQuery); // end of jQuery name space
