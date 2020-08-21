$(document).ready(function(){
    $('#hospitalNB').change(function(){
      var hospitalid = $(this).val();
      $('#doctorNB').find('option').not(':first').remove();
      $.ajax({
        url: 'modelo/contactoajax.php',
        type: 'post',
        data: {request: 1, hospitalid: hospitalid},
        dataType: 'json',
        success: function(response){
          var len = response.length;
          for( var i = 0; i<len; i++){
            var id = response[i]['id'];
            var name = response[i]['name'];
            $("#doctorNB").append("<option value='"+id+"'>"+name+"</option>");
          }          
        }
      });      
    });
  });