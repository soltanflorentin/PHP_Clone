$(window).on('load', function () {
    if ($('#preloader').length) {
        $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
});
 }
});



$(document).ready(function(){

    $("#but1").click(function(){
        $.ajax({url: "php/index.php",
        type: 'POST',
		dataType: 'json',
        data: {country: $("#countrys").val()}, 
        success: function(result){
            $("#result").html("Capital: " + result["data"][0]['capital'] + "<br>" + "Population: " + result["data"][0]["population"]);
   }});
   });
    $("#but2").click(function(){
        $.ajax({url: "php/index2.php",
        type: 'POST',
		dataType: 'json',
        data: {lat: $('#inputLat').val(), lng: $('#inputLon').val()}, 
        success: function(result){
            $("#result").html("Sunrise: " + result["sunrise"] + "<br>" + "Sunset: " + result["sunset"]);
   }});
   });
    $("#but3").click(function(){
        $.ajax({url: "php/index3.php",
        type: 'POST',
		dataType: 'json',
        data: {q: $("#inputCity").val()}, 
        success: function(result){
            $("#result").html("Country: " + result["geonames"][0]["countryCode"] + "<br>" + "Population: " + result["geonames"][0]["population"]  );
   }});
   });
});


