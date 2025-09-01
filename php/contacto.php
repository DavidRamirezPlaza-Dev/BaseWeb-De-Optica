<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Configuración del correo electrónico
    $destinatario = 'tu-correo@example.com'; // Reemplaza con tu dirección de correo electrónico
    $asunto_email = 'Nuevo mensaje de contacto';

    // Construir el cuerpo del mensaje
    $cuerpo_mensaje = "Nombre: $nombre\n";
    $cuerpo_mensaje .= "Correo electrónico: $email\n";
    $cuerpo_mensaje .= "Asunto: $asunto\n";
    $cuerpo_mensaje .= "Mensaje: $mensaje\n";

    // Enviar el correo electrónico
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($destinatario, $asunto_email, $cuerpo_mensaje, $headers)) {
        echo '<script> alert("El formulario se ha enviado correctamente. Pronto nos pondremos en contacto contigo.");</script>';
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
