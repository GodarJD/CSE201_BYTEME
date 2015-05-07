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

    $('#loginsubmit').on('click', function() {
        var email = $('#loginemail').val();
        alert('You are now logged in as ' email);
        $('#loginmodalclose').trigger('click');
        $('#loginbutton').html(email);
    });

    $('#appsubmit').on('click', function() {
        alert("We'll review your app and get back to you soon!");
        window.location.replace("index.php");
    })

});

$(document).keypress(function(e) {
    if(e.which == 13) {
        if($("#search").is(":focus")) {
            window.location.replace("search.html");
        }
    }
});
