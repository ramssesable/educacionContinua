jQuery(document).ready(function($) {
    $('#load').hide();

    $('#submit').click(function(e) {
      //e.preventDefault();

      $('#load').show();

      //$('#submit').submit();


      
        var parametros = {
                "email" : $('#email').val(),
                "password" : $('#password').val()
        };
        $.ajax({
                data:  parametros,
                url:   'ajax.php',
                type:  'post',
                beforeSend: function () {
                  $("#respuesta").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                  $('#load').hide();
                  $("#respuesta").html(response);
                }
        });
      
      

    });
});