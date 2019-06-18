$(document).ready(function() {


    $("button").click(function() {
        if (($('#pregunta').val().length) > 10) {
            $.get("http://localhost:8085/index.php", function(result) {
                $respuesta = result;
                $("p.respuesta").html("<b>Mi respuesta:</b>" + $respuesta);
                $("p.pregunta").html("<b>Tu pregunta:</b>" + $('#pregunta').val());
                $('#pregunta').val("");
            });

        } else { alert("Que sea  ARTIFICIAL no significa que  sea  TONTA.Por favor escribe una pregunta con mas de 10 caracteres"); }





    });
});