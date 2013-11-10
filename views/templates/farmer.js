function validateAddFarmer(submitBtn) {
    var farmerName = $('#farmerName').val();
    var county = $('#farmerCounty').val();
    var returnVal = 0;

    // post the username field's value
    $.post('/index.php/farmer/validate',
      { 'name': farmerName, 'county': county },

      // when the Web server responds to the request
      function(result) {
        // clear any message that may have already been written
        // if the result is TRUE write a message to the page
        $('#addNewFarmerModal .validation_messages').html('');
        if (result != '1') {
          $('#addNewFarmerModal .validation_messages').html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a>' + result + '</div>');
        } else {
          if(submitBtn)
          {
              $.post('/index.php/farmer/add', { 'name': farmerName, 'county': county },
                function(result) {
                     location.reload();
                }
              );
          }
        }
      }
    );

    return returnVal;
}

$(document).ready(function() {

  // bind our function to the element's onblur event
  $('#farmerCounty').blur(function() {
      validateAddFarmer();
  });

  $('#farmerName').blur(function() {
      validateAddFarmer();
  });

  $('#addFarmerSubmit').click(function() {
      validateAddFarmer(true);
  });

  $('.deleteFarmer').click(function() {
      $.post('/index.php/farmer/delete', { 'id' : $(this).attr('farmerid') },
        function(result) {
            bootbox.alert('Farmer deleted sucessfully!', function() {
              location.reload();
            });
        }
      );
  });

});