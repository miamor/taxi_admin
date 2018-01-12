$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/trip/readAll.php',
		"columns": [
			{ "data": "id" },
			{ "data": "name" },
			{ "data": "phone" },
			{ "data": "addressfrom" },
			{ "data": "addressto" },
			{ "data": "PNR" },
			{ "data": "time" },
			{ "data": "status" },
			{ "data": "seat" },
			{ "data": "coin" },
			{ "data": "taxiid" },
			{ "data": "prioritize" },
			{ "data": "rank" },
			{ "data": "userid" },
			{ "data": "details" }
		]
	})
})
