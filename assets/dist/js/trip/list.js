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
            { "data": "price" },
			{ "data": "is_round" },
			{ "data": "userid" }
		],
        "fnRowCallback": function (nRow, aData, iDisplayIndex) {
            console.log(aData);
            if (aData.taxiid != null) {
                $(nRow).addClass('taken');
            }
        }
	})
})
