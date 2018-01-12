$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/trip/readAll.php',
		"columns": [
			{ "data": "id" },
			{ "data": "customer_info" },
			{ "data": "trip_info" },
			{ "data": "status" },
			{ "data": "coin" },
            { "data": "price" },
            { "data": "prioritize" },
            { "data": "taxi_taken"}
		],
        "fnRowCallback": function (nRow, aData, iDisplayIndex) {
            console.log(aData);
            if (aData.taxiid != null) {
                $(nRow).addClass('taken');
            }
        }
	})
})
