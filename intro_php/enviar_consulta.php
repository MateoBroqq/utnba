<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];


// Conexion a base de datos q{Q?J&oRO9yP^Yhp


// $conexion = mysqli_connect("localhost", "root", "", "progamador_web_282") or exit ("No se pudo conectar a la base de datos");



$conexion = mysqli_connect("localhost", "id19600033_cosme", "q{Q?J&oRO9yP^Yhp", "id19600033_progamador_web") or exit ("No se pudo conectar a la base de datos");



mysqli_query($conexion, "INSERT INTO alumnos VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$mensaje_form')");


header("Location: contacto.php?ok");