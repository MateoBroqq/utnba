<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
 
    <title>Document</title>
</head>
<body>
    
<header class="header">
<nav>
    <ul class="menuSuperior">
     <li> <a href="index.php"> Home </a> </li>
     <li> <a href="tienda.php"> Tienda </a>  </li>
     <li> <a href="nosotros.php"> Nosotros </a>  </li>
     <li> <a href="contacto.php"> Contacto </a>  </li>
    </ul>
</nav>
</header>


<h1> Hola mundo </h1>

<?php 
echo  "<h2> Hola mundo con php </h2>";

// esto es un comentario de una linea
/* esto es un comentario multilinea 
puedo escribir una nueva linea  */


// Variables


$titulo1 = 'Progamador web inicial';
$unidades_curso = 8;
$arancel = 4.666;
$fecha = '20/11/2021';

$titulo2 = 'Progamador web avanzado';
$unidades_curso2 = 6;
$arancel2 = 7066;
$fecha2 = '20/01/2023';


?>

<section>
<h2> Cursos </h2>
<div class="curso1">
<h3> <?php echo $titulo1; ?> </h3>
<ul>
    <li>Duracion: <?php echo $unidades_curso; ?> </li>
    <li>Arancel: <?php echo $arancel; ?> </li>
    <li>Fecha: <?php echo $fecha; ?></li>
</ul>
</div>

<div class="curso2">
<h3> <?php echo $titulo2; ?> </h3>
<ul>
<li>Duracion: <?php echo $unidades_curso2; ?></li>
<li>Arancel: <?php echo $arancel2; ?></li>
<li>Fecha: <?php echo $fecha2; ?></li>
</ul>
</div>
</section>

<?php
$dolar =250;
$duracion_total = $unidades_curso + $unidades_curso2;
$arancel_total = $arancel + $arancel;
$arancel_dolar = $arancel_total * $dolar;
?>


<div class="curso_total">
<ul>
<li>Duracion Total: <?php echo $duracion_total; ?></li>
<li>Arancel Total: <?php echo $arancel_total; ?></li>
<li>Arancel dolar: <?php echo round($arancel_dolar); ?></li>
</ul>
</div>

<?php include('footer.php')?>

</body>
</html>