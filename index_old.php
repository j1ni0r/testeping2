 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Tecnologia da Informação - Página de Status</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="ajax" >



    <script>
    $(document).ready(function (){
        
            var request = $.ajax({
            url: "testePingAjax.php",
            method: "POST",
            beforeSend: function () {
               $("#ajax").html("<img style='margin-left: 34%;margin-top: 5%;' src='load.gif'>");
            },
            data: { acao : 'ajax' },
            dataType: "html"
            });

            request.done(function( msg ) {
                
                $( "#ajax" ).html( msg );
                
            });

            request.fail(function( jqXHR, textStatus ) {
                //alert( "Request failed: " + textStatus );
                alert("Não foi fazer a consulta com ajax");
            });
         
    });
    </script>
</body>
</html> 

