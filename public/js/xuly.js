function choice1(select) {
 alert(select.options[select.selectedIndex].text);    
}

$("#province_1").change(function(e) 
  {
    var province_id = e.target.value;
    // ajax
    $.get('/getdistrict?province_id='+ province_id,function(data){
    $('#district_1').empty();
     $('#district_1').append('<option disabled selected value>Chọn địa điểm</option>')
    $.each(data,function(index,subcatObj)
    {
      $('#district_1').append('<option value = "'+subcatObj.id+'">'+subcatObj._name+'</option>')
    });
  });
});
$("#district_1").change(function(e) 
  {
    var district_id = e.target.value;
    //console.log(district_id);
    // ajax
    $.get('/getward?district_id='+ district_id,function(data){
    $('#ward_1').empty();
  $('#ward_1').append('<option disabled selected value>Chọn địa điểm</option>')
    $.each(data,function(index,subcatObj)
    {
      $('#ward_1').append('<option value = "'+subcatObj.id+'">'+subcatObj._name+'</option>')
    });
  });
});
$("#district_1").change(function(e) 
  {
    var district_id = e.target.value;
    //console.log(district_id);
    // ajax
    $.get('/getstreet?district_id='+ district_id,function(data){
    $('#street_1').empty();
  $('#street_1').append('<option disabled selected value>Chọn địa điểm</option>')
    $.each(data,function(index,subcatObj)
    {
      $('#street_1').append('<option value = "'+subcatObj.id+'">'+subcatObj._name+'</option>')
    });
  });
});



$(function() {

  // Get the form.
  var form = $('#contact_form');
  var form1 = $('#address_form');

  // Get the messages div.
  var formMessages = $('#form-messages');

  // Set up an event listener for the contact form.
  $(form).submit(function(e) {

    // Stop the browser from submitting the form.
    e.preventDefault();

    // Serialize the form data.
    var formData = $(form).serialize();

    // Submit the form using AJAX.
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData
    })
    .done(function(response) {
      // Make sure that the formMessages div has the 'success' class.
      // $(formMessages).removeClass('error');
      // $(formMessages).addClass('success');
      $('#contact_div').empty();
      $('#address_form').show();
      // Set the message text.
      $(formMessages).text(response);
      $('#title_contact').text('Nhập địa chỉ');
      // Clear the form.
      $('#name').val('');
      $('#message').val('');
    })
    .fail(function(data) {
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('error');

      // Set the message text.
      if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
      } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
      }
    });

  });

  // Set up an event listener for the contact form.
  $(form1).submit(function(e) {
    // Stop the browser from submitting the form.
    e.preventDefault();
    // Serialize the form data.
    var formData = $(form1).serialize();
    // Submit the form using AJAX.
    $.ajax({
      type: 'POST',
      url: $(form1).attr('action'),
      data: formData
    })
    .done(function(response) {
      // Make sure that the formMessages div has the 'success' class.
      $('#address_div').empty();
     // $('#form-address').empty();
      // Set the message text.
      $('#title_contact').text('Hoàn thành chia sẽ');
        $(formMessages).text("");
      // Clear the form.
      $('#name').val('');
    
      $('#message').val('');
    })
    .fail(function(data) {
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('error');

      // Set the message text.
      if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
      } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
      }
    });

  });

});
