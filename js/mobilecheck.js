console.log("script start");
var isMobile = {
	Android: function() {
		return navigator.userAgent.match(/Android/i);
	},
	BlackBerry: function() {
		return navigator.userAgent.match(/BlackBerry/i);
	},
	iOS: function() {
		return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	},
	Opera: function() {
		return navigator.userAgent.match(/Opera Mini/i);
	},
	Windows: function() {
		return navigator.userAgent.match(/IEMobile/i);
	},
	any: function() {
		return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	}
};

if (isMobile.any()) {
	console.log('mobile detected');
} else {
	console.log('no mobile match, loading scripts...');
	url = 'http://sb.codeanywhere.com/~352996/js/jquery.easing.min.js';
	url2 = 'http://sb.codeanywhere.com/~352996/js/jquery.fittext.js';
	url3 = 'http://sb.codeanywhere.com/~352996/js/wow.min.js';
	url4 = 'http://sb.codeanywhere.com/~352996/js/creative.js';
	url5 = 'http://sb.codeanywhere.com/~352996/js/main.js';
	$.getScript(url);
	$.getScript(url2);
	$.getScript(url3);
	$.getScript(url4);
	$.getScript(url5);
}
