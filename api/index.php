<?php
$http_origin = $_SERVER['HTTP_ORIGIN'];

if ($http_origin == "http://localhost:8081" )
{  
    header("Access-Control-Allow-Origin: $http_origin");
        header("Content-Type: text/html; charset=utf-8");
}





$respuesta= array(
    "1"=>"En mi opinion,sí",
    "2"=>"Lo siento estoy almorzando. Pregúntale  a Juan",
    "3"=>"Es decididamente sí",
    "4"=>"Probablemente",
    "5"=>"Buen pronóstico",
    "6"=>"Todo apunta a que sí",
    "7"=>"Sin duda",
    "8"=>"Te respondo mañana. Ya me piro",
    "9"=>"Debes confiar en ello",
    "10"=>"Vuelve a intentarlo",
    "11"=>"Pregunta en otro momento",
    "12"=>"Será mejor que no te lo diga",
    "13"=>"No puedo predecirlo ahora",
    "14"=>"Concetrate y vuelve a preguntar",
    "15"=>"Puede ser",
    "16"=>"No cuentes con ello",
    "17"=>"Mi respuesta es no",
    "18"=>"Mis fuentes me dicen que no",
    "19"=>"Las perspectivas no son buenas",
    "20"=>"Muy dudoso"
    );
 
    $key= array_rand($respuesta,1);
    
    echo $respuesta[$key];

?>