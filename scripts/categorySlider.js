$(document).ready(function(){
    
     
      // startAnim();
       
    
    
        var slideCount = $('#categorySlider .categoryBox').length; //number of slides
	     var slideWidth =  $('#categorySlider .categoryBox').width(); //length of every slider
        var slideHeight = $('#categorySlider .categoryBox').height(); // heigh of every slide
        
        var sliderUlWidth = slideCount * slideWidth + 330; //total with of sliders
        
	
    //$('#CatSli').css({ width: slideWidth, height: slideHeight });    
    
  $('#categorySlider').css({ width: sliderUlWidth, marginLeft: - slideWidth }); //offset the slide by the length of on slide to left
    
  
   $('.categoryBox:last-child').prependTo('#categorySlider'); // append the fisrt slide to the end of the slider
   
   
        // function for moving the slider to the left
     function moveLeft() {
        $('#categorySlider').animate({
            left: + slideWidth //push slider to the left by the width of one slide
        }, 1000, function () { //transtion of one second
            $('.categoryBox:last-child').prependTo('#categorySlider');
            $('#categorySlider').css('left', '');
        });
    };
    
    function moveRight() {
        $('#categorySlider').animate({
            left: - slideWidth
        }, 1000
        , function () {
            $('.categoryBox:first-child').appendTo('#categorySlider');
            $('#categorySlider').css('left', '');
        });
    };
    
    
    $('#clickleft').click(function () {
        moveLeft();
    });
    
   /*  $('.categoryBox').mouseenter(function () {
       $('#categorySlider').stop();
       $('.categoryBox').stop();
    });
    
     $('#clickright').mouseover (function () {
       $('#categorySlider').stop(); 
       $('.categoryBox').stop();
    }); */
    
    
    $('#clickright').click(function () {
        
        moveRight();
    }); 

    /*
    
    function startAnim(){
        setInterval(function () {
        moveRight();
        }, 5000);
    }*/
});

