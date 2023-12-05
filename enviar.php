<?php

header("Access-Control-Allow-Origin: *"); // Permitir solicitudes desde cualquier origen
header("Access-Control-Allow-Methods: POST"); // Permitir solo solicitudes POST
header("Access-Control-Allow-Headers: Content-Type"); // Permitir solo el encabezado Content-Type

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "guillermoandrada@gmail.com";
    $asunto = "Nuevo mensaje de contacto"; // <-- este asunto es predefinido, se puede cambiar desde el formulario, en el caso de ser necesario.

    $headers = "MIME-Version: 1.0 \r\n";
    $headers .= "Content-type: text/html";

    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje: $mensaje";

    // Enviar el correo con la función "mail"
    mail($destinatario, $asunto, $cuerpoMensaje, $headers);
    echo "¡Mensaje enviado con éxito!";
    header("Locarion:sent-message.html");
}
?>