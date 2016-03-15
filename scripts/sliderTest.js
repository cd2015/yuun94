$(document).ready(function() {
		var numberOfTexts = $('#slides .slide .slideText').length;
		
		alert ('number of texts is:');
		alert(numberOfTexts);
		
		
		var slideWidthH = $('#slides .slide .slideText').width();
		
		alert('text width is:');
		alert(slideWidthH);
		
		currentText = 1;
		
		currentText = currentText % numberOfTexts;
		
		alert(currentText);
		
		$('#slides .slide .slideText').eq(currentText).animate({left: -slideWeightH}, 2000,function () {
			$(this).css('left: -slideWeightH');
		});
		
		alert('now here');
		//rotatePics(1);
		//rotateText(1);
		//revolveText(1);
	});
	
	/*	function rotatePics(currentPhoto) {
		var numberOfPhotos = $('#slides .slide img').length;
		currentPhoto = currentPhoto % numberOfPhotos;
		
		$('#slides .slide img').eq(currentPhoto).fadeOut(2000,function() {
			//re-order the z-index
			$('#slides .slide img').each(function(i) {
				$(this).css(
					'zIndex',((numberOfPhotos - i) + currentPhoto) % numberOfPhotos
				);
			});
			
			$(this).fadeIn(2000);
			setTimeout(function() {rotatePics(++currentPhoto);}, 4000);
		});
	}
	
	function rotateText(currentText) {
		var numberOfTexts = $('#slides .slide .slideText').length;
		currentText = currentText % numberOfTexts;
		
		$('#slides .slide .slideText').eq(currentText).fadeOut(2000,function() {
			//re-order the z-index
			$('#slides .slide .slideText').each(function(i) {
				$(this).css(
					'zIndex',((numberOfTexts - i) + currentText) % numberOfTexts
				);
			});
			
			$(this).fadeIn(2000);
			setTimeout(function() {rotateText(++currentText);}, 4000);
		});
	}	*/
	
	/*	function revolveText(currentText) {
		var numberOfTexts = $('#slides .slide .slideText').length;
		
		alert('number of texts is:',numberOfTexts);
		
		
		var slideWidthH = $('#slides .slide .slideText').width();
			
		alert('text width is:',slideWidthH);
		
		currentText = currentText % numberOfTexts;
		
		currentText = currentText % numberOfTexts;
		
		alert('currentText executed');
		
		$('#slides .slide .slideText').eq(currentText).animate({
			left: -slideWeightH
		}, 2000
		,function () {
			$(this).css('left: -slideWeightH');
		});
		$this.animate({left: -slideWeightH;});
		setTimeout(function() {revolvveText(++currentText);}, 4000);
		
		}	*/
	
			
	
	
/*	function rotateHeadlines (currentText){
		var slideCountH = $('#slides .slide .slideText').length;
		var slideWidthH = $('#slides .slide .slideText').width();
		var slideHeightH = $('#slides .slide .slideText').height();
		var sliderUlWidthH = slideCountH * slideWeightH ;

			$('.slideText').animate({
            left: - slideWidthH
			}, 1000
			, function () {
            $('.slideText:first-child').appendTo('.slideText');
            $('.slideText').css('left', '');
        });
	}	*/