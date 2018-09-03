function singleToBucket(id_name_postfix) {
    
        var id_array = id_name_postfix.split('-');
        var id = id_array[0];
        var name = id_array[1];
        // Make a request for a user with a given ID
        $("#" + name + "progress").html("<div class='indeterminate' id='" + id + "-" + name + "-progressbar'></div>");
        axios({
                method: 'get',
                url: 'includes/ziparchive/zipper.php?albumid=' + id + '&name=' + name,
            })
            .then(function(response) {
                $("#" + response.data + "-progressbar").remove();
                console.log(response);
                window.location.href = 'index.php';
            })
            .catch(function(error) {
                // handle error
				$("#" + id + "-" + name + "-progressbar").remove();
				$('#30seconds').modal('show');
                console.log(error);
            });
}
function multipleToBucket(processid) {
		if (multipleID.length == 0) {
			multipleID = ["zipAll"];
		}
		console.log(tmp.toString());
		// Make a request for a user with a given ID
		$("#process").html("<div class='progress-ind' id='processall'><div class='indeterminate' id='progressbar'></div>");
		axios({
				method: 'get',
				url: 'includes/ziparchive/zipselected.php?albumid=' + multipleID.toString(),
			})
			.then(function(response) {
				$("#processall").remove();
				window.location.href = 'index.php';
				console.log(response);
			})
			.catch(function(error) {
				// handle error
				$("#processall").remove();
				$('#30seconds').modal('show');
				console.log(error);
			});
}
