<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    
    // Dirección de correo a la que se enviará el mensaje
    $to = "danielgomez.jajaja8@gmail.com"; // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje de contacto de $nombre";
    $message = "Nombre: $nombre\nEmail: $email";
    $headers = "From: $email";
    
    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>