function del (itemID) {
    $a = $('a[attr-id="'+itemID+'"]');
    var title = $a.closest('tr').find('td:nth-child(2)').text();
    if (itemID) {
        if (confirm("Are you sure want to remove "+itemID+" permanently?")) {
            /*var row = table.row($a.closest('tr'));
            var rowNode = row.node();
            row.remove();*/

            $.get(MAIN_URL+'/requests/trip/delete.php?id='+itemID, function (data) {
                console.log(data);
                if (data == 1) $a.closest('tr').remove();
            })

        }
    }
    return false
}

function approve (itemID) {
    $a = $('a[attr-id="'+itemID+'"]');
    var title = $a.closest('tr').find('td:nth-child(2)').text();
    if (itemID) {
        $.get(MAIN_URL+'/requests/trip/confirm.php?type=unconfirm&id='+itemID, function (data) {
            console.log(data);
            if (data == 1) $a.closest('tr').remove();
        })
    }
    return false
}

$(document).ready(function () {
    $('#buyList').DataTable({
		"ajax": MAIN_URL+'/requests/trip/readAll.php',
		"columns": [
			{ "data": "id" },
			{ "data": "taxi_sell_info" },
			{ "data": "customer_info" },
			{ "data": "trip_info" },
			{ "data": "status" },
			{ "data": "coin" },
            { "data": "price" },
            { "data": "prioritize" },
            { "data": "taxi_taken"},
            {
                data: "trip_info",
                render : function (data, type, row) {
                    approveCls = '';
                    if (row.approve == 1) approveCls = 'text-success';
                    return '<div class="row-btns"> <a attr-id="'+row.id+'" class="row-btn-confirm '+approveCls+'" href="#" onclick="javascript:approve(\''+row.id+'\'); return false"><i class="fa fa-check"></i></a> <a attr-id="'+row.id+'" class="row-btn-edit" href="'+location.href+'/'+row.id+'"><i class="fa fa-pencil"></i></a> <a attr-id="'+row.id+'" class="row-btn-del text-danger" href="#" onclick="javascript:del(\''+row.id+'\'); return false"><i class="fa fa-trash"></i></a></div>'
                }
            }
		],
        "fnRowCallback": function (nRow, aData, iDisplayIndex) {
            console.log(aData);
            if (aData.taxiid != null) {
                $(nRow).addClass('taken');
            }
        }
	})
})
