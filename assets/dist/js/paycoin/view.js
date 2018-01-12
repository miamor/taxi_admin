function getTimeRemaining (endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock (id, endtime) {
  var clock = document.getElementById(id);
  var timeinterval = setInterval(function() {
    var t = getTimeRemaining(endtime);
    console.log(t);
    $('#'+id).val(t.days+'d '+t.hours+'h '+t.minutes+'m '+t.seconds+'s');
    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }, 1000);
}

$(document).ready(function () {
    if ($('[name="status"]').val() == 1) {
        initializeClock('clockdiv', $('[name="openday"]').val());
    }
    $('.open-account').click(function () {
        $.post(MAIN_URL+'/requests/taxi/openaccount.php', {username: $('[name="username"]').val()}, function (data) {
            if (data == 1) location.reload();
        })
    })
    $('.edit').submit(function () {
        console.log($(this).serialize());
        $.post(MAIN_URL+'/requests/taxi/edit.php', $(this).serialize(), function (data) {
            console.log(data);
            if (data == 1) location.reload();
        })
        return false
    })
})
