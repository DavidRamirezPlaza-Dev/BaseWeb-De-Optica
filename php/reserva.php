 <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $sucursal = $_POST['sucursal'];
        $fechaAtencion = $_POST['fechaAtencion'];

        // Dirección de correo electrónico donde se enviará el formulario
        $destinatario = 'DIRECCION DE CORREO';

        // Asunto del correo electrónico
        $asunto = 'Nuevo mensaje de formulario de contacto';

        // Cuerpo del correo electrónico
        $cuerpo = "Nombre: $nombre\n";
        $cuerpo .= "Email: $email\n";
        $cuerpo .= "Telefono: $telefono\n";
        $cuerpo .= "Sucursal: $sucursal\n";
        $cuerpo .= "Fecha Atencion : $fechaAtencion\n";

        // Encabezados del correo electrónico
        $headers = "From: $email" . "\r\n" .
            "Reply-To: $email" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        // Enviar el correo electrónico
        if (mail($destinatario, $asunto, $cuerpo, $headers)) {
            echo '<script> alert("El formulario se ha enviado correctamente. Tu hora ha sido reservada.");</script>';
        } else {
            echo '<script> alert("Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo más tarde.");</script>';
        }
    }
?>