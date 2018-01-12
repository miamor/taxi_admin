$(document).ready(function () {
    $('.edit').submit(function () {
        console.log($(this).serialize());
        $.post(MAIN_URL+'/requests/taxi/editpasword.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.reload();
        })
        return false
    })
})
