<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "guillermoandrada@gmail.com";
    $asunto = "Nuevo mensaje de contacto"; // <-- este asunto es predefinido, se puede cambiar desde el formulario, en el caso de ser necesario.

    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje: $mensaje";

    // Enviar el correo
    mail($destinatario, $asunto, $cuerpoMensaje);
    echo "¡Mensaje enviado con éxito!";
    header("Locarion:sent-message.html");
}
?>