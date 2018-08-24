
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

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
							<a role="button" class="mr-3 btn btn-light btn-sm" data-toggle="tooltip" title="Logout from facebook">
								<img src="https://png.icons8.com/color/25/000000/so-so.png"><samp><b>Bye-Bye<b></samp>
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
						<a class="mr-3"  onclick="zipSelected(this.id)" id="selected" href="#zipper" role="button" aria-pressed="true">
								<img src="assets/icons8/zip.png">
							</a>
						<a class="mr-3" onclick="zipAlbums(this.id)" id="" href="#zipper" role="button" aria-pressed="true">
								<img src="assets/icons8/download.png">
							</a>
						<a class="mr-3" onclick="uploadSelected(this.id)" id="selected" href="#upload" role="button" aria-pressed="true">
								<img src="assets/icons8/googledrive.png">
							</a>
					  </form>
					  
					</div>
					<div class="col-lg-8 pull-left">
						<div class="card-columns pull-left">
						  <?php foreach(getAlbums() as $album){?>
							<div class="card" style="width: 15rem;">
								<div class="card-body fmx-auto">
									<h6 class="card-title"><?=$album->name?><a class="pull-right" data-toggle="modal" data-target="#myModal"><img src="https://png.icons8.com/color/25/000000/3d-glasses.png"></a></h6>
									<p class="card-text"><small class="text-muted">the album contains <?=$album->count;?> photos.</small></p>								
									<a class="mr-3" onclick="zipAlbums(this.id)" id="<?=$album->id.'-'.str_replace(' ','_',$album->name).'-zip';?>" href="#zipper" role="button" aria-pressed="true"><img src="assets/icons8/zip.png"></a>				  
									<?=preg_replace('/(<a\b[^><]*)>/i', '$1 id="'.$album->id.'-'.str_replace(' ','_',$album->name).'">', renderButtons($album->name));?>
									<label class="pull-right custom-control custom-checkbox">
										  <input type="checkbox" name="albumNames" value="<?=$album->id?>" class="ml-4 pull-right custom-control-input">
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
		
		<footer class="footer static-bottom mt-5">
			<div class="container-broad text-center mt-2">
				<a class="mr-3">
					<img src="https://png.icons8.com/color/25/000000/bootstrap.png"> Bootstrap
				</a>
				<a class="mr-3">	
					<img src="https://png.icons8.com/color/25/000000/php.png"> Php
				</a>
				<a class="mr-3">	
					<img src="https://png.icons8.com/ios/22/e74c3c/jquery-filled.png"> jquery
				</a>
				<a class="">	
					<img style="width: 2rem;height: 2rem;"src="https://avatars0.githubusercontent.com/u/25063903?s=400&u=cb053722364a87ca751d8a6797abf742758a44a9&v=4" class="rounded-circle">
				</a>	
			</div>
		</footer>
		<script src="assets/plugins/jquery/jquery.min.js"></script>
		<script>
		 var tmp = [];
		$(document).ready(function () {
		  $("input[name='albumNames']").change(function() {
		  var checked = $(this).val();
			if ($(this).is(':checked')) {
			  tmp.push(checked);
			  console.log(tmp);
			}else{
				tmp.splice($.inArray(checked, tmp),1);
				console.log(tmp);
			}
		  });
		});
		</script>
		<script>
		function zipSelected(processid){
				if(tmp.length == 0){
					tmp = ["zipAll"];
				}
				console.log(tmp.toString());
				// Make a request for a user with a given ID
				$("#process").html("<div class='progress-ind' id='processall'><div class='indeterminate' id='progressbar'></div>");
				axios({
					method: 'get',
					url: 	'includes/ziparchive/zipselected.php?albumid='+tmp.toString(),
					})
				  .then(function (response) {
					$("#processall").remove();
					window.location.href = 'index.php';
					console.log(response);
				  })
				  .catch(function (error) {
					// handle error
					console.log(error);
				  });			  
		}
		function uploadSelected(processid){
				if(tmp.length == 0){
					tmp = ["uploadAll"];
				}
				$("#process").html("<div class='progress-ind' id='processall'><div class='indeterminate' id='progressbar'></div>");
				axios({
					method: 'get',
					url: 	'includes/google/drive/uploadMultipleImages.php?albumid='+tmp.toString(),
					})
				  .then(function (response) {
					$("#processall").remove();
					console.log(response);
				  })
				  .catch(function (error) {
					// handle error
					console.log(error);
				  });			  
		}
		</script>
		<script type="text/javascript">
		function zipAlbums(id_name_postfix){
				var id_array = id_name_postfix.split('-');
				var id = id_array[0];
				var name = id_array[1];
				// Make a request for a user with a given ID
				$("#"+name+"progress").html("<div class='indeterminate' id='"+id+"-"+name+"-progressbar'></div>");
				axios({
					method: 'get',
					url: 	'includes/ziparchive/zipper.php?albumid='+id+'&name='+name,
					})
				  .then(function (response) {
					$("#"+response.data+"-progressbar").remove();
					$("#"+response.data+"-download").css("display","inline");
					$("#"+response.data+"-googledrive").css("display","inline");
					console.log(response);
					window.location.href = 'index.php';
				  })
				  .catch(function (error) {
					// handle error
					console.log(error);
				  });

		}
		function uploadAlbums(id_name_postfix){
				var id_array = id_name_postfix.split('-');
				var id = id_array[0];
				var name = id_array[1];
				// Make a request for a user with a given ID
				$("#"+name+"progress").html("<div class='indeterminate' id='"+id+"-"+name+"-progressbar'></div>");
				axios({
					method: 'get',
					url: 	'includes/google/drive/saveImages.php?albumid='+id+'&name='+name,
					})
				  .then(function (response) {
					$("#"+response.data+"-progressbar").remove();
					$("#"+response.data+"-download").css("display","inline");
					$("#"+response.data+"-googledrive").css("display","inline");
					console.log(response);
				  })
				  .catch(function (error) {
					// handle error
					console.log(error);
				  });

		}
		function downloadAlbums(id_name){
				var id_array = id_name.split('-');
				var id = id_array[0];
				var name = id_array[1];
				// Make a request for a user with a given ID
				$("#"+name+"progress").html("<div class='indeterminate' id='"+name+"-progressbar'></div>");
				axios({
					method: 'get',
					url: 	'includes/ziparchive/zipdownload.php?name='+name,
					})
				  .then(function (response) {
					window.location = 'includes/ziparchive/zipdownload.php?name='+name;
					$("#"+name+"-progressbar").remove();
					
					console.log(response);
				  })
				  .catch(function (error) {
					// handle error
					console.log(error);
				  });

		}
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		</script>
		
		<!-- Bootstrap core JavaScript -->
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>