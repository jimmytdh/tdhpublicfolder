function getNumbers()
{
    $.get('get.php',function(data) {
        if(data.length > 2){
            var r = jQuery.parseJSON(data);
            $('.list_number').html(r[4]);
            $('.list_window').html('at Window '+r[2]);
            $('.window_'+r[2]).html(r[4]);
        }

    });
}

setInterval(getNumbers,2000);