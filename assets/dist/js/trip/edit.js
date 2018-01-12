$(document).ready(function () {
    $('#reservation').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    $('.edit').submit(function () {
        $.post(MAIN_URL+'/requests/trip/edit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/trip';
            else if (data == 2) location.href = MAIN_URL+'/trip?mode=waiting';
        })
        return false
    });

    $('#delete_trip').click(function () {
        $.get(MAIN_URL+'/requests/trip/delete.php?id='+$('.edit [name="id"]').val(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/trip';
        })
        return false
    })
})
