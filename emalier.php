$nombre = trim($_POST['nombre']);
$telefono = trim($_POST['telefono']);
$sexo = trim($_POST['sexo']);
$fecha = trim($_POST['fecha']);
$asunto = trim($_POST['asunto']);
$mensaje = trim($_POST['mensaje']);

$consulta = " Nombre: " . $nombre . " Telefono: " . $telefono . "Sexo: " . $sexo . "fecha: " . $fecha . "asunto: " . $asunto . "mensaje" . $mensaje;

mail("kdodoo343@yopmail.com", "Contacto desde Formulario", $consulta);
