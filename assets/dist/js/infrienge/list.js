$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/infrienge/readAll.php',
		"columns": [
            { "data": "id" },
            { "data": "taxiID" },
            { "data": "taxi_username" },
            { "data": "time" },
			{ "data": "details" }
		]
	})
})
