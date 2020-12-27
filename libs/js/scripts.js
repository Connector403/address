$('#btnRun').click(function() {
  $.ajax(
    {
      type: 'POST',
      url: "libs/php/address.php",
      dataType: 'json',
      data: {
        lat: $('#lat').val(),
        lng: $('#lng').val()
      },
      success: function(result){
        console.log(result['data']);

        $('#houseNumber').html(result['data']['houseNumber']);
        $('#street').html(result['data']['street']);
        $('#postalcode').html(result['data']['postalcode']);
        $('#locality').html(result['data']['locality']);
        $('#countryCode').html(result['data']['countryCode']);



      },
       error: function( errorThrown){
        // error code
        console.log("we have reached error ");

        console.log(errorThrown);


       }
    });
});
