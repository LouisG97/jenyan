<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
    $fecha = filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
    $codigo_descuento = filter_input(INPUT_POST, 'codigo-descuento', FILTER_SANITIZE_STRING);
    $paquete_seleccionado = filter_input(INPUT_POST, 'paquete-seleccionado', FILTER_SANITIZE_STRING);

    // Aquí puedes agregar la lógica para almacenar los datos en la base de datos o enviarlos por correo electrónico
    // Por ejemplo, puedes usar mail() para enviar los detalles de la reserva por correo electrónico

    $to = 'gmzluiis@gmail.com';
    $subject = 'Nueva Reserva de Fotografía';
    $message = "Nombre: $nombre\nTeléfono: $telefono\nFecha: $fecha\nCódigo de Descuento: $codigo_descuento\nPaquete Seleccionado: $paquete_seleccionado";
    $headers = "From: sitio@jenyan.com";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Reserva enviada exitosamente.';
    } else {
        echo 'Error al enviar la reserva.';
    }
}
?>
