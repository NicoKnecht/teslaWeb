<?php
var_dump($_POST);
// exit;


if (empty($_POST['nombre'])) {
    header("Location: ../contact.php?status=errorEmpty_name");
    exit;
} elseif (strlen($_POST['nombre']) < 2) {
    header("Location: ../contact.php?status=errorLength_nombre");
    exit;
}
if (empty($_POST['apellido'])) {
    header("Location: ../contact.php?status=errorEmpty_lastName");
    exit;
} elseif (strlen($_POST['apellido']) < 2) {
    header("Location: ../contact.php?status=errorLength_apellido");
    exit;
}
if (empty($_POST['mail'])) {
    header("Location: ../contact.php?status=errorEmpty_mail");
    exit;
} elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    header("Location: ../contact.php?status=errorNotValidate_mail");
    exit;
}
if (empty($_POST['telefono'])) {
    header("Location: ../contact.php?status=errorEmpty_telefono");
    exit;
} elseif (!is_numeric($_POST['telefono'])) {
    header("Location: ../contact.php?status=errorNotNumber_telefono");
    exit;
}
if (empty($_POST['mensaje'])) {
    header("Location: ../contact.php?status=errorEmpty_mensaje");
    exit;
} elseif (strlen($_POST['mensaje']) < 10 || strlen($_POST['mensaje']) > 130) {
    header("Location: ../contact.php?status=errorLength_mensaje&mensaje=$_POST[mensaje]");


    exit;
}

if (isset($_POST['Enviar'])) {
    header("Location: ../contact.php?nombre=$_POST[nombre]&apellido=$_POST[apellido]&mail=$_POST[mail]&telefono=$_POST[telefono]&mensaje=$_POST[mensaje]");
    exit;
}
