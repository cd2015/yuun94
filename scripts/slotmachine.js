jQuery(document).ready(function ($) {
	
/*
  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 5000);
  }); */
  
  /*
 	var slideCountH = $('.slide').length;
	var slideWidthH = $('.slide').width();
	var slideHeightH = $('.slide').height();
	var sliderUlHeightH = slideCountH * slideHeightH ;
	
              
        for(var i =1; i<=slideCountH; i++){
            
           alert("we are here on:");
           alert (i);
           
           //alert("we are here on:");
           //alert (".show");
            $("#sli"+[i]).slideUp(5000,function(){
                
                alert("we are here on:");
                alert ("fading in the image");
                $("#slidImg"+[i]).fadeIn(5000);
                
                alert("we are here on:");
                alert ("sliding in the Headline");
                $('#hd'+[i]).animate({
            left: - 1000
        }, 3000, function () {
            $('.slotText').css({display:true});
        });
            });
            
            $("#sli"+[i]).hide();
            
            //delay(1000);
            if (i === slideCountH){
                i = 0;
                $('.slide').show();
            }
            alert ("getting out of loop");
	}
	/*
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');
    

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 1000, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 1000, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });
    
    */

});    
