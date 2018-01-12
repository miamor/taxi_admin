$(document).ready(function () {
    $('.add').submit(function () {
        $.post(MAIN_URL+'/requests/promotion/add.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.href = MAIN_URL+'/promotion';
        })
        return false
    })
})
