function validateLivestock(submitBtn) {
    var cowName = $('#cowName').val();
    var admOutput = $('#admOutput').val();
    var farmerID = $('#livestockFarmer').find(":selected").val();
    var returnVal = 0;

    // post the username field's value
    $.post('/index.php/livestock/validate',
      { 'farmer_id': farmerID, 'cowName': cowName, 'admOutput': admOutput },

      // when the Web server responds to the request
      function(result) {
        // clear any message that may have already been written
        // if the result is TRUE write a message to the page
        $('#addNewLivestockModal .validation_messages').html('');
        if (result != '1') {
          $('#addNewLivestockModal .validation_messages').html('<div class="alert alert-danger"><a class="close" data-dismiss="alert">&times;</a>' + result + '</div>');
        } else {
          if(submitBtn)
          {
              $.post('/index.php/livestock/add', { 'farmer_id': farmerID, 'cowName': cowName, 'admOutput': admOutput },
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
  $('#cowName').blur(function() {
      validateLivestock();
  });

  $('#admOutput').blur(function() {
      validateLivestock();
  });

  $('#addLivestockSubmit').click(function() {
      validateLivestock(true);
  });

  $('.deleteLivestock').click(function() {
      $.post('/index.php/livestock/delete', { 'id' : $(this).attr('livestockid') },
        function(result) {
            bootbox.alert('Livestock deleted sucessfully!', function() {
              location.reload();
            });
        }
      );
  });

});