function singleFromBucket(id_name) {
		var id_array = id_name.split('-');
		var id = id_array[0];
		var name = id_array[1];
		// Make a request for a user with a given ID
		$("#" + name + "progress").html("<div class='indeterminate' id='" + name + "-progressbar'></div>");
		axios({
				method: 'get',
				url: 'includes/ziparchive/zipdownload.php?name=' + name,
			})
			.then(function(response) {
				window.location = 'includes/ziparchive/zipdownload.php?name=' + name;
				$("#" + name + "-progressbar").remove();
				console.log(response);
			})
			.catch(function(error) {
				// handle error
				console.log(error);
				$("#" + name + "-progressbar").remove();
				$('#30seconds').modal('show');
			});
}
function multipleFromBucket(processid) {
		if (multipleName.length == 0) {
			multipleName = ["downloadAll"];
		}
		console.log(multipleName);
			$("#process").html("<div class='progress-ind' id='processall'><div class='indeterminate' id='progressbar'></div>");
		axios({
				method: 'get',
				url: 'includes/ziparchive/zipdownloadselected.php?name=' + multipleName.toString(),
			})
			.then(function(response) {
				window.location = 'includes/ziparchive/zipdownloadselected.php?name=' + multipleName.toString();
				$("#processall").remove();
				console.log(response);
			})
			.catch(function(error) {
				// handle error
				$("#processall").remove();
				$('#30seconds').modal('show');
				console.log(error);
			});
}
