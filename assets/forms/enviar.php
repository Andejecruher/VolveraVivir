<?php  

// Llamando a los campos
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$city = $_POST['city'];
$message = $_POST['message'];

$to = "contacto@volveravivirlibre.com";
$asunto = "Formulario De Contacto Volver a Vivir Libre";
$carta = "De: $name \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $phone \n";
$carta .= "Estado: $country \n";
$carta .= "Ciudad: $city \n";
$carta .= "Mensaje: $message";
mail($to, $asunto, $carta);
header('Location:../../index.html');
?>