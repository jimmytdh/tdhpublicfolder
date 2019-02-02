$('.btnPedia').on('click',function(){
    getNumber('pedia',0);
});


function getNumber(destination,priority)
{
    $('#modalNumber .number').html('...');
    $.post(
        "server/getNumber.php",
        {
            destination: destination,
            priority: priority
        },
        function(data){
            var num = jQuery.parseJSON(data);
            console.log(num);
            $('#modalNumber .number').html(num);
            $('#modalNumber').modal();
        }
    );
}