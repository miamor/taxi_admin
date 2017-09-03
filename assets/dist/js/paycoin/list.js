$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/paycoin/readAll.php',
		"columns": [
            { "data": "id" },
            { "data": "type" },
            { "data": "taxi_username" },
            { "data": "tripID" },
            { "data": "coin" },
            { "data": "time" },
			{ "data": "details" }
		]
	})
})
