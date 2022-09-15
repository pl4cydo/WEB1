<?php
    // $_GET é uma variável superglobal
    // var_dump($_GET);
?>
<?php
    $fp = fopen('lista.txt', 'a');
    $fp2 = fopen('pokemons.txt', 'a');
    fwrite($fp, $_GET['nome'] . " " . $_GET['complemento'] . "\n");
    fwrite($fp2, $_GET['pokemon']);
?>
 
<!-- <a href="index.php">voltar</a> -->
<!-- <?php
    header('location: lista.php');
?> -->