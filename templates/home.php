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
		<link rel="stylesheet" href="assets/css/fontawesome.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.4.0.0-alpha.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/sticky-footer-navbar.css">
		
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar bg-light static-top">
			<div class="container-broad">
				<a class="ml-3 mr-2" href="https://dishitpala.github.io">	
				<img style="width: 2rem;height: 2rem;"src="assets/img/me.png" class="rounded-circle">
				</a>
				<samp class="ml-2 text-dark"><b>Assignment</b></samp>
				
				
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
							<a role="button" href="templates/logout.php?logout=true" class="mr-3 btn btn-light btn-sm" data-toggle="tooltip" title="Logout from facebook">
							<img src="https://png.icons8.com/color/25/000000/so-so.png"><samp><b> Bye-Bye</b></samp>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<progres id="process"></progres>
		<!-- Page Content -->
		<div class="container-broad">
			<div class="row">
				<div class="col-lg-12 mt-5">
					<div class="col-lg-4 text-center pull-right">
						<form role="form" method="POST" >
							<img src="<?=getPicture();?>"  class="rounded-circle " alt="<?=getBasics()->name;?>">
							<h1 class="mt-4" >
								<pre style="height:40px"><?=getBasics()->name;?></pre>
							</h1>
							<a role="button" href="<?=getGoogleUrl();?>" class="mt-3 mb-3 btn btn-light btn-sm">
							<img src="https://png.icons8.com/color/22/000000/google-logo.png"><samp> <b><?=$google_status;?></b></samp>
							</a>
							<button type="button" class="mt-3 mb-3 btn btn-light btn-sm">
							<samp><img src="https://png.icons8.com/color/25/000000/facebook.png" > <b><?=$facebook_status;?></b></samp>
							</button>
							</br>
							<pre>Multiple Oprations</pre>
							<a class="mr-3"  onclick="multipleToBucket(this.id)" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="store selective/all to bucket"id="selected" href="#zipper" role="button" aria-pressed="true">
							<img src="https://png.icons8.com/color/26/000000/google-cloud-platform.png">
							</a>
							<a class="mr-3" onclick="multipleFromBucket(this.id)" id="" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="download selective/all zips" href="#zipper" role="button" aria-pressed="true">
							<img src="assets/icons8/download.png">
							</a>
							<a class="mr-3" onclick="multipleToDrive(this.id)" id="selected" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="upload selective/all to drive" href="#upload" role="button" aria-pressed="true">
							<img src="assets/icons8/googledrive.png">
							</a>
						</form>
					</div>
					<div class="col-lg-8 pull-left">
						<div class="card-columns pull-left">
							<?php foreach(getAlbums() as $album){?>
							<div class="card" style="width: 15rem;">
								<div class="card-body fmx-auto">
									<h6 class="card-title"><?=$album->name?><a class="pull-right" data-toggle="tooltip" data-placement="bottom" title="View Images" onclick="popAlbum(this.id)" id="<?=$album->id?>" data-target="#myModal"><img src="https://png.icons8.com/color/25/000000/3d-glasses.png"></a></h6>
									<p class="card-text"><small class="text-muted">the album contains <?=$album->count;?> photos.</small></p>
									<a class="mr-3" onclick="singleToBucket(this.id)" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="store to bucket" id="<?=$album->id.'-'.str_replace(' ','_',$album->name).'-zip';?>" href="#zipper" role="button" aria-pressed="true"><img src="https://png.icons8.com/color/26/000000/google-cloud-platform.png"></a>				  
									<?=preg_replace('/(<a\b[^><]*)>/i', '$1 id="'.$album->id.'-'.str_replace(' ','_',$album->name).'">', renderButtons($album->name));?>
									<label class="pull-right custom-control custom-checkbox">
									<input type="checkbox" name="albumNames" value="<?=$album->id.'-'.str_replace(' ','_',$album->name)?>" class="ml-4 pull-right custom-control-input">
									<span class="mt-1 ml-3 pull-right custom-control-indicator"></span>
									<span class="custom-control-description"></span>
									</label>
								</div>
								<div class='progress-ind' id="<?=str_replace(' ','_',$album->name).'progress';?>"></div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer text-center bg-white static-down mx-auto">
			<div class="container-broad text-center">
			<samp><b>
				<a class="mr-5">	
				<img src="https://png.icons8.com/color/23/000000/heroku.png"> Heroku
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
				</b></samp>
			</div>
		</footer>
		<script src="assets/plugins/jquery/jquery.min.js"></script>
		<script src="assets/js/get.selected.js"></script>
		<script src="assets/js/upload.to.bucket.js"></script>
		<script src="assets/js/download.from.bucket.js"></script>
		<script src="assets/js/upload.to.drive.js"></script>
		<script src="assets/js/photoswipe.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script src="assets/js/axios.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();   
			});
		</script>
		
	</body>
</html>