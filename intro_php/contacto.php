<?php include('header.php')?>


<section class="contacto_formulario">
<h1> Contacto</h1>

<div>
    <form action="enviar_consulta.php" method="POST">
        <input type="text" name="nombre" class="contacto__input" placeholder="Nombre">
        <input type="text" name="apellido" class="contacto__input" placeholder="Apellido">
        <input type="text" name="email" class="contacto__input" placeholder="Ingresa tu email">
        <textarea name="mensaje" id="" cols="30" rows="10"class="contacto__input"></textarea>
        
        <input type="submit" value="Enviar consulta" class="contacto_btn">

        <?php
        if (isset($_GET['ok']))
        echo "<h3> Su mensaje a sido enviado con exito </h3>"
        ?>

    </form>
</div>




</section>