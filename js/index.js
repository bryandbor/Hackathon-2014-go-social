var meTabOpen = false;
var tripTabOpen = false;

$(document).ready(function(){
	$('#me-tab-age-select').val('25-32');
	$('#me-tab-name-input').val('Bryan Bor')
	$('[data-toggle="tooltip"]').tooltip();
	$('#me-tab-open-button').click(function(){
		if (!meTabOpen) {
			if (tripTabOpen) {
				closeTripTab();
			}
			openMeTab();
		} else {
			closeMeTab();
		}
	});
	$('#trip-tab-open-button').click(function(){
		if (!tripTabOpen) {
			if (meTabOpen) {
				closeMeTab();
			}
			openTripTab();
		} else {
			closeTripTab();
		}
	});
});

function openMeTab () {
	$('#me-tab').css('opacity', .7);
	$('#me-tab').animate({
		width: '60%',
		left: '20%',
	}, 400, function(){
		$('#me-tab').animate({
			top: '10%',
			height: '80%'
		}, 400, function(){
			$('#me-tab').css('opacity', 1);
			$('#me-tab-contents').slideDown();
			$('#me-tab-open-button').children('span').removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-left');
			meTabOpen = true;
		});
	});
}

function closeMeTab(){
	$('#me-tab').css('opacity', .7);
	$('#me-tab-contents').slideUp(function(){
		$('#me-tab').animate({
			height: '15%',
		}, 400, function(){
			$('#me-tab').animate({
				width: 70,
				left: -30
			}, 400);
			meTabOpen = false;
			$('#me-tab').css('opacity', 1);
			$('#me-tab-open-button').children('span').removeClass('glyphicon-chevron-left').addClass('glyphicon-chevron-right');
		});
	});
}

function openTripTab () {
	$('#trip-tab').css('opacity', .7);
	$('#trip-tab').animate({
		width: '60%',
		left: '20%',
	}, 400, function(){
		$('#trip-tab').animate({
			top: '10%',
			height: '80%'
		}, 400, function(){
			$('#trip-tab').css('opacity', 1);
			$('#trip-tab-contents').slideDown();
			$('#trip-tab-open-button').children('span').removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-left');
			tripTabOpen = true;
		});
	});
}

function closeTripTab(){
	$('#trip-tab').css('opacity', .7);
	$('#trip-tab-contents').slideUp(function(){
		$('#trip-tab').animate({
			height: '15%',
			top: '27%',
		}, 400, function(){
			$('#trip-tab').animate({
				width: 70,
				left: -30
			}, 400);
			tripTabOpen = false;
			$('#trip-tab').css('opacity', 1);
			$('#trip-tab-open-button').children('span').removeClass('glyphicon-chevron-left').addClass('glyphicon-chevron-right');
		});
	});
}