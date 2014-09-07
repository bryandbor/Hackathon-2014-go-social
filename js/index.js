var meTabOpen = false;
var tripTabOpen = false;
var tripCounter = 0;
var depart = '';
var retrn = '';
var sendButtonVisible = false;
var backgroundImgCounter = 1;
var accessToken = '';
var userID = '';
var roomID = '';
var endT = '';

var messages = Array();

$(document).ready(function(){
	shiftBackground();
	logIntoMatrix();
	$('#me-tab-age-select').val('25-32');
	$('#me-tab-name-input').val('Bryan Bor');
	$('#me-tab-email-input').val('bryandbor@gmail.com');
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
	$('#trip-tab-new-trip-button').click(function(){
		tripCounter++;
		$('#trip-tab-contents').append('<div class="thumbnail container-fluid no-margin no-padding" id="trip-container-'+(tripCounter)+'"><form class="form-horizontal"></form></div>');
		$('#trip-container-'+tripCounter).children('.form-horizontal').append('<div class="form-group"><label class="col-sm-2 control-label">Country</label><div class="col-sm-10"><input class="form-control" type="text" id="trip-'+tripCounter+'-country-input" placeholder="Ex: \'Netherlands\'"></div></div>');
		$('#trip-container-'+tripCounter).children('.form-horizontal').append('<div class="form-group"><label class="col-sm-2 control-label">State/Province</label><div class="col-sm-10"><input class="form-control" type="text" id="trip-'+tripCounter+'-state-input" placeholder="Ex: \'Gelderland\'"></div></div>');
		$('#trip-container-'+tripCounter).children('.form-horizontal').append('<div class="form-group"><label class="col-sm-2 control-label">City</label><div class="col-sm-10"><input class="form-control" type="text" id="trip-'+tripCounter+'-city-input" placeholder="Ex: \'Utrecht\'"></div></div>');
		$('#trip-container-'+tripCounter).children('.form-horizontal').append('<div class="col-sm-6 no-padding-left"><div class="form-group"><label class="col-sm-4 control-label">Departure</label><div class="col-sm-8"><input class="form-control" type="text" id="trip-'+tripCounter+'-departure-input" placeholder="Click to change"></div></div></div>');
		$('#trip-container-'+tripCounter).children('.form-horizontal').append('<div class="col-sm-6 no-padding-right"><div class="form-group"><label class="col-sm-4 control-label">Return</label><div class="col-sm-8"><input class="form-control" type="text" id="trip-'+tripCounter+'-return-input" placeholder="Click to change"></div></div></div>');
		$('#trip-container-'+tripCounter).children('.form-horizontal').append('<div class="col-sm-6"><button class="btn btn-success new-trip-submit-button one-hundred-width disabled" type="button" id="trip-'+tripCounter+'-submit-button">Create Trip</button></div>');
		$('#trip-container-'+tripCounter).children('.form-horizontal').append('<div class="col-sm-6"><button class="btn btn-danger new-trip-cancel-button one-hundred-width" type="button">Cancel</button><div>');
		$('#trip-'+tripCounter+'-country-input').keyup(function(){
			$('#trip-'+tripCounter+'-country-input').val('Netherlands');
		});
		$('#trip-'+tripCounter+'-state-input').keyup(function(){
			$('#trip-'+tripCounter+'-state-input').val('Gelderland');
		});
		$('#trip-'+tripCounter+'-city-input').keyup(function(){
			$('#trip-'+tripCounter+'-city-input').val('Utrecht');
		});
		$('#trip-'+tripCounter+'-departure-input').pickadate({
			container: 'body',
			min: new Date()
		}).change(function(){
			depart = $('#trip-'+tripCounter+'-departure-input').pickadate('picker').get('select');
			$('#trip-'+tripCounter+'-return-input').pickadate('picker').set('min', [depart.year, depart.month, depart.date+1]);
		});
		$('#trip-'+tripCounter+'-return-input').pickadate({
			container: 'body'
		}).change(function(){
			retrn = $('#trip-'+tripCounter+'-return-input').pickadate('picker').get('select');
			$('.new-trip-submit-button').removeClass('disabled');
		});
		$('#trip-'+tripCounter+'-submit-button').click(function(){
			$('#display-trip-destination').text($('#trip-'+tripCounter+'-city-input').val() + ', ' + $('#trip-'+tripCounter+'-country-input').val());
			$('#display-trip-departure').text(depart.month + '/' + depart.date + '/' + depart.year);
			$('#display-trip-return').text(retrn.month + '/' + retrn.date + '/' + retrn.year);
			$('#trip-container-'+tripCounter).slideUp(function(){
				$('#display-trip-finished-example').slideDown(function(){
					$('#no-active-trips-message').hide();
					$('#available-user-list').slideDown();
				});
			});
		});
	});
	$('#chat-window').draggable({
		containment: 'window',
		cursor: 'move'
	});
	$('#minimize-chat-window').click(function(){
		$('#chat-window-content').slideUp('fast', function(){
			$('#chat-window').animate({
				padding: 0,
				top: $('#active-chat-list').offset().top + 10,
				left: $('#active-chat-list').offset().left + 10
			}, 500, function(){
				$('#chat-window').hide();
				$('#active-chat-example-link').slideDown();
			});
		});
	});
	$('#active-chat-example-link').click(function(){
		$('#active-chat-example-link').slideUp(function(){
			$('#chat-window').show().animate({
				padding: 15,
				top: '10%',
				left: '10%'
			}, 500, function(){
				$('#chat-window-content').slideDown();
			});
		});
	});
	$('#chat-window-message-input').keyup(function(){
		if ($(this).val().substr(-1) == '\n') {
			$(this).val($(this).val().substr(0, $(this).val().length-1));
			if ($(this).val().length > 0) {
				$('#chat-window-send-button').click();
			}
		}
		if ($(this).val().length > 0) {
			if (!sendButtonVisible) {
				$(this).animate({
					width: '-=34'
				}, 300);
				$('#chat-window-send-button').animate({
					width: 34
				}, 300);
				sendButtonVisible = true;
			}
		} else if (sendButtonVisible) {
			$(this).animate({
				width: '+=34'
			}, 300);
			$('#chat-window-send-button').animate({
				width: 0
			}, 300);
			sendButtonVisible = false;
		}
	}).change(function(){
		$(this).keyup();
	});
	$('.online').click(function(){
		$('#no-active-chats-message').hide();
		$('#chat-window').fadeIn();
	});
	$('#chat-window-send-button').click(function(){
		sendNewChatMessage();
	});
	$('#active-chat-display').scroll(function(){
		console.log($('#active-chat-display').scrollTop());
	});
});

function openMeTab () {
	$('.tooltip').hide();
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
	$('.tooltip').hide();
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
	$('.tooltip').hide();
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
	$('.tooltip').hide();
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

function shiftBackground(){
	$('#bg-img-'+backgroundImgCounter++).fadeOut(2000);
	if (backgroundImgCounter == 7) {
		backgroundImgCounter = 1;
	}
	$('#bg-img-'+backgroundImgCounter).fadeIn(2000, function(){
		setTimeout(shiftBackground, 3000);
	});
}

function sendNewChatMessage(){
	$.ajax({
        url: "http://matrix.org:8080/_matrix/client/api/v1/rooms/" + roomID + "/send/m.room.message?access_token=" + accessToken,
        type: "POST",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify({ 
        	body: $('#chat-window-message-input').val(), 
        	roomId: roomID, msgtype:"m.text", 
        	access_token: accessToken}),
        dataType: "json",
        success: function(data) {
            //console.log(data);
			$('#chat-window-message-input').val('');
        },
        error: function(jq, status, err) {
            //alert(err);  
        }
    });
}

function logIntoMatrix() {
	$.ajax({
		url: 'http://matrix.org:8080/_matrix/client/api/v1/login',
		type: 'POST',
		data: JSON.stringify({
			user: 'rtid',
			password: 'mypass',
			type: 'm.login.password'
		}), 
		dataType: 'json',
		success: function(data){
			//console.log(data);
			accessToken= data.access_token;
			userID= data.user_id;
			loadMessageInfo(data.access_token);
		},
		error: function(jq, status, e) {
			//alert(e);
			console.log(e);
		}
	});
}

function loadRoomMessages(){
	$.ajax({
		url: 'http://matrix.org:8080/_matrix/client/api/v1/events',
		type: 'GET',
		data: {
			from: endT,
			timeout: 30000,
			access_token: accessToken
		},
		dataType: 'json',
		success: function(data) {
			//console.log(data);
			endT = data.end;
			if (data.chunk.length > 0) {
				for (m in data.chunk) {
					if (data.chunk[m].type=='m.room.message') {
						messages.push(data.chunk[m]);
					}
				}
				fillChatWindow();
			}
			setTimeout(loadRoomMessages, 1000);
		},
		error: function (jq, status, e) {
			//alert(e);
			console.log(e);
		}
	});
}

function loadMessageInfo(at) {
	$.ajax({
		url: 'http://matrix.org:8080/_matrix/client/api/v1/initialSync',
		type: 'GET',
		data: {
			access_token: at,
			limit: 1024
		},
		dataType: 'json',
		success: function(data){
			//console.log(data);
			endT = data.end;
			loadRoomMessages();
			$('#active-chat-display').html('');
			roomID = data.rooms[2].room_id;
			for (m in data.rooms[2].messages.chunk) {
				if (data.rooms[2].messages.chunk[m].type == 'm.room.message' && data.rooms[2].messages.chunk[m].content.msgtype == 'm.text') {
					messages.push(data.rooms[2].messages.chunk[m]);
				}
			}
			fillChatWindow();
		},
		error: function(jq, status, e) {
			//alert(e);
			console.log(e);
		}
	});
}

function fillChatWindow() {
	$('#active-chat-display').html('');
	for (m in messages) {
		if (messages[m].user_id == userID) {
			$('#active-chat-display').append('<p class="text-right no-margin my-message">Me: '+messages[m].content.body+'</p>');
		} else {
			$('#active-chat-display').append('<p class="text-left no-margin your-message">YourNextBestFriend: '+messages[m].content.body+'</p>');
		}
	}
	$('#active-chat-display').scrollTop(1000000);
}