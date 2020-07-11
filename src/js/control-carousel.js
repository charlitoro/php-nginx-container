$(document).ready( function () {
    "use strict";
    // Auto-scroll
    $('#collections-list').carousel({
      interval: 3000
    });

    $('#albums-list').carousel({
      interval: 3000
    });
  
    // Control buttons
    $('.next-collections').click(function () {
      $('.carousel1').carousel('next');
      return false;
    });
    $('.prev-collections').click(function () {
      $('.carousel1').carousel('prev');
      return false;
    });
    $('.next-lists').click(function () {
      $('.carousel2').carousel('next');
      return false;
    });
    $('.prev-lists').click(function () {
      $('.carousel2').carousel('prev');
      return false;
    });
  
    // On carousel scroll
    $("#collections-list").on("slide.bs.carousel", function (e) {
      carouselOn(e);
    });

    $("#albums-list").on("slide.bs.carousel", function (e) {
      carouselOn(e);
    });

    function carouselOn(e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 3;
      var totalItems = $(".carousel-item").length;
      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide -
            (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end 
          if (e.direction == "left") {
            $(
              ".carousel-item").eq(i).appendTo(".carousel-inner");
          } else {
            $(".carousel-item").eq(0).appendTo(".carousel-inner");
          }
        }
      }
    }
  })