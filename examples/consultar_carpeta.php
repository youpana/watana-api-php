<?php

require '../vendor/autoload.php';

date_default_timezone_set('America/Lima');

try {
    $URL = "<RUTA>";
    $TOKEN = "<TOKEN>";
    $auth = new WatanaApi\WatanaApiAuth(array('url' => $URL, 'token' => $TOKEN));
  
    $req_body = array(
        "carpeta_codigo" => "DOC0001"
    );
        
    // Consultamos carpeta
    $response = $auth->WatanaApi->ConsultarCarpeta(
        $req_body
    );
    // Respuesta
    echo "<b>RESPUESTA JSON:</b> "."<br>".json_encode($response)."<br>";



} catch (Exception $e) {
  echo json_encode($e->getMessage());
}