<html>
    <head>
        <title>Go Social</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/index.css" rel="stylesheet">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./plugins/pickadate.js-3.5.3/lib/themes/default.css">
        <link rel="stylesheet" href="./plugins/pickadate.js-3.5.3/lib/themes/default.date.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="./js/jquery-ui-1.10.4.custom.js"></script>
        <script src="./js/bootstrap.js"></script>
        <script src="./plugins/pickadate.js-3.5.3/lib/compressed/picker.js"></script>
        <script src="./plugins/pickadate.js-3.5.3/lib/compressed/picker.date.js"></script>
    </head>
    <body>
    	<img src="./images/waterfalls.jpg" class="background-img" id="bg-img-1">
    	<img src="./images/beachchairs.jpg" class="background-img" id="bg-img-2">
    	<img src="./images/egypt.jpg" class="background-img" id="bg-img-3">
    	<img src="./images/football.jpg" class="background-img" id="bg-img-4">
    	<img src="./images/kayak.jpg" class="background-img" id="bg-img-5">
    	<img src="./images/mountain.jpg" class="background-img" id="bg-img-6">
    	<div id="me-tab">
    		<button class="btn btn-default" 
    			type="button" 
    			id="me-tab-open-button" 
    			data-toggle="tooltip" 
    			data-placement="right" 
    			data-container="body" title="Open/Close the Me Tab">
    			<span class="glyphicon glyphicon-chevron-right"></span>
    		</button>
    		<div class="container-fluid" id="me-tab-contents">
    			<div class="row">
    				<h3 class="text-center">About Me</h3>
    			</div>
    			<div class="row">
	    			<div class="col-sm-4 no-padding">
	    				<img src="./images/my-pic.jpg" class="img-responsive center-block">
	    			</div>
	    			<form class="form-horiontal" id="me-form">
	    				<div class="col-sm-8">
	    					<div class="row">
			    				<div class="form-group">
			    					<label class="col-sm-2 control-label me-tab-label" for="me-tab-name-input">Name:</label>
			    					<div class="col-sm-10">
			    						<input class="form-control" type="text" id="me-tab-name-input">
			    					</div>
			    				</div>
		    				</div>
	    					<div class="row">
			    				<div class="form-group">
			    					<label class="col-sm-2 control-label me-tab-label" for="me-tab-name-input">Email:</label>
			    					<div class="col-sm-10">
			    						<input class="form-control" type="text" id="me-tab-email-input">
			    					</div>
			    				</div>
		    				</div>
		    				<div class="row">
			    				<div class="form-group">
			    					<label class="col-sm-2 control-label me-tab-label" for="me-tab-name-input">Age Group:</label>
			    					<div class="col-sm-10">
			    						<select class="form-control" type="text" id="me-tab-age-select">
			    							<option>18-24</option>
			    							<option>25-32</option>
			    							<option>33-40</option>
			    							<option>41-50</option>
			    							<option>51-65</option>
			    							<option>65+</option>
			    						</select>
			    					</div>
			    				</div>
		    				</div>
							<h4 class="text-center" id="me-tab-languages-title">Languages</h4>
							<div class="row">
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> English
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Spanish
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> French
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> German
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Mandarin
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Dutch
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Farsi/Persian
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Japanese
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Korean
	    								</label>
	    							</div>
	    						</div>
    						</div>
    						<h4 class="text-center" id="me-tab-activity-title">Activities</h4>
    						<div class="row">
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Adventure Racing
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Arts &amp; Crafts
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Bird Watching
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Bicycling
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Bowling
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Camping
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Climbing
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Clubbing/Night Life
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Concerts/Live Performances
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Cross-country Skiing
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Dining/Food
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Education/Museums
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Festivals
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Fishing
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Hiking
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Horseback Riding
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Hunting
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Kareoke
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Kayaking
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Padding
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Running
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Sailing
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Scuba Diving
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Sightseeing
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Skateboarding
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Skiing
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Snowboarding
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Snowshoeing
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Snorkeling
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Surfing
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Triathalon
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Volunterring
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language" checked="true"> Whitewater Rafting
	    								</label>
	    							</div>
	    						</div>
	    						<div class="col-sm-6 col-md-4">
	    							<div class="checkbox no-margin-bottom">
	    								<label>
	    									<input type="checkbox" id="me-tab-english-language"> Windsurfing
	    								</label>
	    							</div>
	    						</div>
    						</div>
	    				</div>
	    			</form>
    			</div>
    		</div>
    	</div>
    	<div id="trip-tab">
    		<button class="btn btn-default" 
    			type="button" 
    			id="trip-tab-open-button" 
    			data-toggle="tooltip" 
    			data-placement="right" 
    			data-container="body" title="Open/Close the Trip Tab">
    			<span class="glyphicon glyphicon-chevron-right"></span>
    		</button>
    		<div class="container-fluid" id="trip-tab-contents">
    			<button class="btn btn-default" id="trip-tab-new-trip-button">
    				Create A New Trip
				</button>
    			<h4 class="text-center">Trips</h4>
    			<div class="thumbnail no-margin" id="display-trip-finished-example">
    				<button class="close">
    					<span class="glyphicon glyphicon-pencil"></span>
    				</button>
    				Trip to <span id="display-trip-destination"></span> from <span id="display-trip-departure"></span> to <span id="display-trip-return"></span>
    			</div>
    		</div>
    	</div>
    	<div class="container">
    		<h1 class="text-center"><span class="white-text">Go Social!</span></h1>
    		<div class="col-sm-8">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<h4 class="text-center panel-title">Available Travel Friends</h4>
    				</div>
    				<div class="panel-body">
    					<p class="text-center" id="no-active-trips-message">You have no active trips, add a trip to start looking for friends where you're headed.</p>
    					<div class="list-group" id="available-user-list">
    						<a class="list-group-item online">
    							<strong>CandyCrushMaster</strong> Female 18-24
    							<span class="pull-right">Online!</span>
    						</a>
    						<a class="list-group-item">
    							<strong>FatherTime</strong> Male 65+
    						</a>
    						<a class="list-group-item">
    							<strong>LegallyBlonde</strong> Female 25-32
    						</a>
    						<a class="list-group-item">
    							<strong>Autumn75</strong> Female 33-40
    						</a>
    						<a class="list-group-item online">
    							<strong>YourNextBestFriend</strong> Male 25-32
    							<span class="pull-right">Online!</span>
    						</a>
    						<a class="list-group-item">
    							<strong>HarleyDavidson28</strong> Male 65+
    						</a>
    						<a class="list-group-item online">
    							<strong>ILoveCaptainCrunch</strong> Female 25-32
    							<span class="pull-right">Online!</span>
    						</a>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-sm-4">
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<h4 class="text-center panel-title">Active Chats</h4>
    				</div>
    				<div class="panel-body" id="active-chat-list">
    					<p class="text-center" id="no-active-chats-message">
    						You don't have any communications yet, start a conversation with a fellow traveler
						</p>
    					<div class="list-group">
    						<a class="list-group-item one-hundred-width" id="active-chat-example-link">
    							YourNextBestFriend
    						</a>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="alert alert-info" id="chat-window">
    			<div id="chat-window-content">
	    			<button class="close" id="minimize-chat-window" data-toggle="tooltip" title="Hide this chat window">
	    				<span class="glyphicon glyphicon-minus"></span>
					</button>
	    			<h4 class="text-center no-margin">Chat with <strong>YourNextBestFriend</strong></h4>
	    			<div class="thumbnail no-margin no-padding" id="active-chat-display">

	    			</div>
	    			<div id="message-container">
						<textarea class="form-control" rows="2" id="chat-window-message-input"></textarea>
						<button class="btn btn-primary no-padding" id="chat-window-send-button">Send</button>
					</div>
    			</div>
    		</div>
    	</div>
        <script src="./js/index.js"></script>
    </body>
</html>