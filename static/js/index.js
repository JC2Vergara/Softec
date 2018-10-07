$(document).ready(function() {
  var $slider = $(".slider"), $bullets = $(".bullets");
    function calculateHeight(){
      var height = $(".slide.active").outerHeight();
      $slider.height(height);
    }

    $(window).resize(function() {
      calculateHeight();
        clearTimeout($.data(this, 'resizeTimer'));
    });
    
    function resetSlides(){
      $(".slide.inactive").removeClass("inactiveRight").removeClass("inactiveLeft");
    }

    function gotoSlide($activeSlide, $slide, className){
       $activeSlide.removeClass("active").addClass("inactive "+className);
       $slide.removeClass("inactive").addClass("active");
       calculateHeight();
       resetBullets();
       setTimeout(resetSlides, 300);
    }

    $(".next").on("click", function(){
       var $activeSlide = $(".slide.active"),
         $nextSlide = $activeSlide.next(".slide").length != 0 ? $activeSlide.next(".slide") : $(".slide:first-child");
         // console.log($nextSlide);
         gotoSlide($activeSlide, $nextSlide, "inactiveLeft");
    });
    $(".previous").on("click",  function(){
       var $activeSlide = $(".slide.active"),
         $prevSlide = $activeSlide.prev(".slide").length != 0 ? $activeSlide.prev(".slide") : $(".slide:last-child");

         gotoSlide($activeSlide, $prevSlide, "inactiveRight");
    });
    $(document).on("click", ".bullet", function(){
      if($(this).hasClass("active")){
        return;
      }
      var $activeSlide = $(".slide.active");
      var currentIndex = $activeSlide.index();
      var targetIndex = $(this).index();
      // console.log(currentIndex, targetIndex);
      var $theSlide = $(".slide:nth-child("+(targetIndex+1)+")");
      gotoSlide($activeSlide, $theSlide, currentIndex > targetIndex ? "inactiveRight" : "inactiveLeft");
    })
    function addBullets(){
      var total = $(".slide").length, index = $(".slide.active").index();
      for (var i=0; i < total; i++){
        var $bullet = $("<div>").addClass("bullet");
        if(i==index){
          $bullet.addClass("active"); 
        }
        $bullets.append($bullet);
      }
    }
    function resetBullets(){
      $(".bullet.active").removeClass("active");
      var index = $(".slide.active").index()+1;
      // console.log(index);
      $(".bullet:nth-child("+index+")").addClass("active");
    }
    addBullets();
    calculateHeight();


    // vars
'use strict'
var testim = document.getElementById("testim"),
    testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
    touchStartPos,
    touchEndPos,
    touchPosDiff,
    ignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");            
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
    
    testim.addEventListener("touchstart", function(e) {
        touchStartPos = e.changedTouches[0].clientX;
    })
  
    testim.addEventListener("touchend", function(e) {
        touchEndPos = e.changedTouches[0].clientX;
      
        touchPosDiff = touchStartPos - touchEndPos;
      
        console.log(touchPosDiff);
        console.log(touchStartPos); 
        console.log(touchEndPos); 

      
        if (touchPosDiff > 0 + ignoreTouch) {
            testimLeftArrow.click();
        } else if (touchPosDiff < 0 - ignoreTouch) {
            testimRightArrow.click();
        } else {
          return;
        }
      
    })
}

});


