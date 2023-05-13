<?php
//PASO #1: SELECCIONAR EL MÉTODO DE ENVÍO
// DE DATOS, UTILIZANDO EL COMANDO "POST"
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nombre= $_POST['nombre'];
    $apellido= $_POST['apellido'];
    $dni= $_POST['dni'];
    $celular= $_POST['celular'];
    $email= $_POST['email'];
    $lista= $_POST['lista'];
    $campus= $_POST['campus'];





// Paso #2: Debemos de especificar el
// Correo de destino.
$destinatario= 'gbarboza@senati.pe';

// Paso #3: Diseñamos el mensaje del
// formulario.
$cuerpo= "Nombre: " . $nombre . "\n";
$cuerpo.= "Apellido: " . $apellido . "\n";
$cuerpo.= "DNI: " . $dni. "\n";
$cuerpo.= "Celular: " . $celular . "\n";
$cuerpo.= "Correo electronico" . $email . "\n";
$cuerpo.= "Carrera: " . $lista. "\n";
$cuerpo.= "Campus: " . $campus . "\n";

 
// Paso #4:Asunto del correo
$asunto= 'Cliente Sitio Web';

// Paso #5: Envío del correo
if (mail($destinatario, $asunto, $cuerpo)){
    echo "El mensaje se envió satisfsctoriamente";
} else {
    echo "Hubo un error al enviar el mensaje";
}
}
?>