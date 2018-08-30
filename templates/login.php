
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
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/sticky-footer-navbar.css">
		<link rel="stylesheet" href="assets/plugins/pace/pace-theme-flash.css">
		<link rel="stylesheet" href="assets/css/blink.css">
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
						<li class="nav-item">
							<a href="https://github.com/dishitpala" class="mr-3 btn btn-light btn-sm" data-toggle="tooltip" title="my git">
							<img src="https://png.icons8.com/ios/25/000000/github-filled.png">
							</a>
						</li>
						<li class="nav-item active">
							<a role="button" class="mr-3 btn btn-light btn-sm" data-toggle="tooltip" title="Hey! click below button to login">
								<img src="https://png.icons8.com/color/29/cccccc/handshake.png"><b> HOLA!</b>
							</a>
						</li>
					</ul>
				</div>
				
			</div>
			
		</nav>
		<!-- Page Content -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mt-3">
					<div class="text-center">
					<a class=""href="https://dishitpala.github.io">
						<img src="assets/img/me.png" class="mb-4 border rounded-circle">
					</a>
					</div>
					</br>
					<div class="row">
					<div class="col ml-5">
					<h3 class="text-right text-body"><pre>Getting Started  <blink>-></blink></pre></h3>
					</div>
					<div class="col">
					<a  role="button" href="<?=getFacebookURL();?>" class="ml-2 text-left btn btn-light btn-sm">
						<samp><img src="https://png.icons8.com/color/25/000000/facebook.png" > <b>connect to facebook</b></samp>
					</a>
					</div>
					</div>
					
						
				</div>
			</div>
		</div>
		<footer class="footer text-center bg-white static-down mx-auto">
			<div class="container-broad">
			<b>
				<a class="mr-5">	
				<img src="https://png.icons8.com/color/23/000000/heroku.png">Heroku
				</a>
				<a class="mr-5">	
				<img src="https://png.icons8.com/color/25/000000/google-cloud-platform.png"> Google Bucket
				</a>
				<a class="mr-5">
				<img src="https://png.icons8.com/color/25/000000/bootstrap.png"> Bootstrap
				</a>
				<a class="mr-5">	
				<img src="https://png.icons8.com/color/25/000000/php.png"> Php
				</a>
				<a class="">	
				<img src="https://png.icons8.com/ios/22/e74c3c/jquery-filled.png"> jquery
				</a>
			</div>
			</b>
		</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script src="assets/plugins/pace/pace.min.js"></script>
		<script src="assets/plugins/jquery/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
		</script>
		
	</body>
	
</html>