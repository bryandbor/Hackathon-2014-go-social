<html>
    <head>
        <title>Go Social</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/index.css" rel="stylesheet">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <script src="./build/react.min.js"></script>
        <script src="./build/JSXTransformer.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="./js/jquery-ui-1.10.4.custom.js"></script>
        <script src="./js/bootstrap.js"></script>
    </head>
    <body>
    	<div id="background-color">
    	</div>
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
    				<h4 class="text-center">About Me</h4>
    			</div>
    			<div class="row">
	    			<div class="col-sm-4 no-padding">
	    				<img src="http://placehold.it/150x210" class="img-responsive center-block">
	    			</div>
	    			<div class="col-sm-8">
		    			<form class="form-horiontal" id="me-form">
		    				<div class="form-group">
		    					<label class="col-sm-2 control-label" for="me-tab-name-input">Name:</label>
		    					<div class="col-sm-10">
		    						<input class="form-control" type="text" id="me-tab-name-input">
		    					</div>
		    				</div>
		    				<div class="form-group">
		    					<label class="col-sm-2 control-label" for="me-tab-name-input">Age Group:</label>
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
		    			</form>
	    			</div>
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
    			<h4 class="text-center">Trips</h4>
    			<button class="btn btn-default" id="trip-tab-new-trip-button">
    				Create A New Trip
				</button>
    		</div>
    	</div>
    	<div class="container-fluid">
    		<h2 class="text-center">Go Social!</h2>
    	</div>
        <script src="./js/index.js"></script>
    </body>
</html>