$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/infrienge/readAllOneTaxi.php?taxiid='+taxiID,
		"columns": [
			{ "data": "time" },
			{ "data": "details" }
		]
	})
})
