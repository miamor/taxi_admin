$(document).ready(function () {
    $('#reservation').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    $('.add').submit(function () {
        $.post(MAIN_URL+'/requests/trip/add.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/trip';
        })
        return false
    })
})
