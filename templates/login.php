
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Bare - Start Bootstrap Template</title>
		<!-- Bootstrap core CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/progress-style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar bg-light static-top">
			<div class="container-broad">
				<a class="navbar-brand text-dark ml-3" href="#"><img src="https://png.icons8.com/color/30/000000/facebook.png"><samp class="ml-2"><b>Assignment</b></samp></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="text-dark navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a role="button" class="mr-3 btn btn-light btn-sm" data-toggle="tooltip" data-original-title="Tooltip on right">
								<img src="https://png.icons8.com/color/25/000000/so-so.png"><samp><b>Bye-Bye<b></samp>
							</a>
						</li>
					</ul>
				</div>
				
			</div>
			
		</nav>
		<!-- Page Content -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mt-5 text-center">
					<a  role="button" href="<?=getFacebookURL();?>" class="btn btn-light btn-sm">
						<samp><img src="https://png.icons8.com/color/25/000000/facebook.png" > <b>connect to facebook</b></samp>
					</a>
				</div>
			</div>
		</div>
		<div id="myDiv">
    <a id="pop" 
        href="#" 
        class="btn btn-lg btn-danger" 
        data-toggle="popover" 
        data-content="And here's some amazing content. It's very engaging. right?"
    >Hover to toggle popover</a>

    <input type="submit" class="btn" id="userNameField" value="Sign in">
</div>
		<script>
		$('[data-toggle="tooltip"]').tooltip({
			'placement': 'top'
		});
		$('[data-toggle="popover"]').popover({
			trigger: 'hover',
				'placement': 'top'
		});

		$('#userNameField').tooltip({
			'show': true,
				'placement': 'bottom',
				'title': "Please remember to..."
		});

		$('#userNameField').tooltip('show');
		</script>
		<footer class="footer static-bottom mt-5">
			<div class="container text-center mt-2">
				<a class="mr-3">
					<img src="https://png.icons8.com/color/25/000000/bootstrap.png"> Bootstrap
				</a>
				<a class="mr-3">	
					<img src="https://png.icons8.com/color/25/000000/php.png"> Php
				</a>
				<a class="mr-3">	
					<img src="https://png.icons8.com/color/30/000000/stackoverflow.png">
				</a>
				<a class="">	
					<img style="width: 2rem;height: 2rem;"src="https://avatars0.githubusercontent.com/u/25063903?s=400&u=cb053722364a87ca751d8a6797abf742758a44a9&v=4" class="rounded-circle">
				</a>	
			</div>
		</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script src="assets/plugins/jquery/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>