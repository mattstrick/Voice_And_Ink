$(document).ready(function() {
	setNavForPage();
});

var setNavForPage = function () {
	var path = location.pathname;
	if (path.indexOf('yourstory') !== -1) {
		$('#navigation .yourstory').addClass('on');
	} else if (path.indexOf('services') !== -1) {
		$('#navigation .services').addClass('on');
	} else if (path.indexOf('campers') !== -1) {
		$('#navigation .campers').addClass('on');
	} else if (path.indexOf('ourstory') !== -1) {
		$('#navigation .ourstory').addClass('on');
	} else if (path.indexOf('contact') !== -1) {
		$('#navigation .contact').addClass('on');
	} else {
		// Do Nothing
	}
};