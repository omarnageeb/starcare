// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.







$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
  
         





$(window).on('load', function () {
              
    
    
    $(".loading-overlay .sk-cube-grid").fadeOut(3000,  function () {
                            
                          
           $(this).parent().fadeOut(3000, function(){
               
               
               $("body").css("overflow", "auto");
               
               $(this).remove();
               
           });                      
                                 
    });                      
        



$('.slickslider').slick({
centerMode: true,
centerPadding: '40px',
slidesToShow: 5,
responsive: [
      {
  breakpoint:1199,
  settings: {
    arrows: false,
    centerMode: true,
    centerPadding: '55px',
    slidesToShow: 4
  }
}, 
{
  breakpoint: 992,
  settings: {
    arrows: false,
    centerMode: true,
    centerPadding: '45px',
    slidesToShow: 3
  }
},
{
  breakpoint: 768,
  settings: {
    arrows: false,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 2
  }
},
{
  breakpoint: 480,
  settings: {
    arrows: false,
    centerMode: true,
    centerPaddinging: '40px',
    slidesToShow: 1
  }
}
]
});


});

{
breakpoint: 48

}




