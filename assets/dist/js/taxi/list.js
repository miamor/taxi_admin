$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/taxi/readAll.php',
		"columns": [
			{ "data": "username" },
			{ "data": "name" },
			{ "data": "phone" },
			{ "data": "idcard" },
			{ "data": "idcar" },
			{ "data": "seat" },
			{ "data": "typecar" },
			{ "data": "coin" },
			{ "data": "rank" },
			{ "data": "status" }
		]
	})
})
