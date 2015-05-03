$(document).ready(function() {
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});
    var _intervalId;
    
    function fadeInLastImg()
    {
        var backImg = $('.header img:first');
        backImg.hide();
        backImg.remove();
        $('.container' ).append( backImg );
        backImg.fadeIn();
    }
        
    _intervalId = setInterval( function() {
        fadeInLastImg();
    }, 3000 );
});
