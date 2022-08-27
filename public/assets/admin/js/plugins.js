
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

        


$(document).ready(function () {
  $('#example').DataTable({
      language: {
          paginate: {
              next: '<span>التالى</span>',
              previous: '<span>السابق</span>'
          }
      }
  });
});


$(function () {
  
  
      
        
        
    $('.mobHead .fa-bars').on('click', function () {
     
      $('.latestFiles .sideMenu').fadeIn(500);
      $('.outing').fadeIn(500);
      
    });

    $('.outing').on('click', function () {
     
      $('.latestFiles .sideMenu').fadeOut(500);
      $('.outing').fadeOut(500);
      
    });




    $('.sideBarCustomize').on('click', function () {

      $(".latestFiles .sideMenu").css("right", "-163px");
      $(".innerContent").css("padding-right", "51px");
      $(".sideBarCustomize").css("display", "none");
      $(".sideBarCustomizeClose").css("display", "block");
  });

  $('.sideBarCustomizeClose').on('click', function () {

    $(".latestFiles .sideMenu").css("right", "0px");
    $(".innerContent").css("padding-right", "213px");
    $(".sideBarCustomize").css("display", "block");
    $(".sideBarCustomizeClose").css("display", "none");

});




});



        
$('.addBtn').on('click', function () {
     
  $('.alert-success').fadeIn(500);
  
});


$('.closeBtn').on('click', function () {
     
  $('.alert-success').fadeOut(500);
  
});


$('.logBtn').on('click', function () {
     
  $('.alert-danger').fadeIn(500);
  
});

$('.passInp').on('click', function () {
     
  $('.alert-danger').fadeOut(500);
  
});


