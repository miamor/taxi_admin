$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/paycoin/readAllOneTaxi.php?taxiid='+taxiID,
		"columns": [
			{ "data": "coin" },
			{ "data": "time" },
			{ "data": "details" }
		]
	})
})
