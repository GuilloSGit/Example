<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "guillermoandrada@gmail.com";
    $asunto = "Nuevo mensaje de contacto";

    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje: $mensaje";

    // Enviar el correo
    mail($destinatario, $asunto, $cuerpoMensaje);

    echo "¡Mensaje enviado con éxito!";
}
?>