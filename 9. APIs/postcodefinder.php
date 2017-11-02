

<!doctype html>
<html>
<head>
    <title>Zipcode Finder</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<style>
		
		html, body {
			height:100%;
		}
		
		.container {
			background-image:url("weather.jpg");
			width:100%;
			height:100%;
			background-size:cover;
			background-position:center;
			padding-top:100px;
		}
		
		.center {
			text-align:center;
		}
		
		.white {
			color:white;
		}
		
		p {
			padding-top:15px;
			padding-bottom:15px;
		}
		
		button {
			margin-top:20px;
		}
		
		.alert {
			margin-top:20px;
			display:none;
		}
		
		.whiteBackground {
			background-color:white;
			padding:20px;
			border-radius:20px;
		}
	</style>

</head>

<body>
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 col-md-offset-3 center whiteBackground">
				<h1 class="center">Zipcode Finder</h1>
				<p class="lead center">Enter any address to find the zipcode.</p>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="address" id="address" placeholder="ie. 1247 Yourmom Street, Yourmom City, YM..." />
					</div>
					<button id="findMyZipcode" class="btn btn-success btn-lg">Find My Zipcode</button>
				
				</form>
				<div id="success" class="alert alert-success">Success!</div>
				<div id="fail" class="alert alert-danger">Could not find zipcode for that address. Please try again!</div>
				<div id="fail2" class="alert alert-danger">Could not connect to server. Please try again!</div>
			</div>
			
		</div>
	
	</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
	$("#findMyZipcode").click(function(event) {
		var result=0;
		$(".alert").hide();
		event.preventDefault();
		
		$.ajax({
			type: "GET",
			url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($('#address').val())+"&key=AIzaSyASUVpocb2LUTj1JDjw0WfqgOOc68ImJZ8",
			dataType: "xml",
			success: processXML
		});
		
		function error() {
			$("#fail2").fadeIn();
		}
		
		function processXML(xml) {
			$(xml).find("address_component").each(function() {
				if ($(this).find("type").text() == "postal_code") {
					
					$("#success").html("I think the zipcode you're looking for is "+$(this).find('long_name').text()).fadeIn();
					result=1;
				}
			});
			
			if (result==0) {
				$("#fail").fadeIn();
			}
		}
		
	});
</script>
</body>
</html>