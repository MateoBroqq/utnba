
<?php include('header.php')?>

<section>
    <ul class="btn_nosotros">
        <li> <a href="nosotros.php?nom=hp"> Harry Potter</a></li>
        <li> <a href="nosotros.php?nom=hg"> Hermione</a></li>
        <li> <a href="nosotros.php?nom=rw"> Ron Weasley</a></li>

    </ul>

<div>

<?php

if(isset($_GET['nom'])){
    switch($_GET['nom']){

         case 'hp':
            $nombre = 'Harry Potter';
            $casa = 'Gryffindor';
            $info = 'Harry tenía un rostro delgado, rodillas huesudas, pelo negro y ojos verdes brillantes. Usaba anteojos redondos siempre pegados con cinta adhesiva, por todas las veces que Dudley lo había golpeado en la nariz.';
            $img = './img/75f9fbc728e718398f0d7b1719b83742.jpg';
            break;

            case 'hg':
            $nombre = 'Hermione Granger';
            $casa = 'Gryffindor';
            $info = 'Hermione Jean Granger es un personaje de ficción y una de los tres protagonistas principales de la serie de libros de Harry Potter, publicados por J. K. Rowling. Aparece en la primera novela, Harry Potter y la piedra filosofal, como una nueva estudiante en su camino a Hogwarts.';
            $img = './img/harry-potter-hermione-magne.jpg';
            break;

         case 'rw':
            $nombre = 'Ron Weasley';
            $casa = 'Gryffindor';
            $info = 'Ron apareció por primera vez en Harry Potter y la piedra filosofal (1997), y es descrito como un chico pelirrojo alto y delgado, con manos y pies grandes y una cara cubierta de pecas. Tiene, además, ojos azules y una larga nariz.';
            $img = './img/a735308f96fc7b4f960aa59c804880ae.jpg';
            break;

    }
}
?>

</section>


<?php include('footer.php')?>

</body>
</html>