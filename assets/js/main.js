$(document).ready(function(){
    var api = "https://pelatihan-iot.herokuapp.com/api/data/current";

    $.ajax({
        url: api,
        dataType : 'json',
        type: 'post',
        contentType:'application/json',
        data: JSON.stringify({
            "key":"QqCdBeuPvPNzyqQD4Iz4"
        }),
        processData:false,
        success:function( data, textStatus, jQxhr){
            $('.weather-location').html(data.lokasi);
            console.log(data);
            $('.temp').html(data.suhu);
            console.log(data);
        },
        error:function(jrXhr, textStatus, errorThrown){
            console.log(errorThrown);
        }
    });
});