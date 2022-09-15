<?php 
    // Declarar variavel que vai ter o valor de abertura do arquivo php
    // Essa abertura vai ser feita pela função fopem() ?file open?
    // O primeiro parametro da função é o nome do arquivo e o segundo é como o parametro é aberto
    // 'a' vai escrever na ultima linha e pular uma linha
    $fp = fopen('lista_filmes.txt', 'a');

    //A função fwrite vai ler os valores recebido em colocar dentro da variavel fp
    fwrite($fp, $_GET['nome'] . " " . $_GET['ano'] . "\n");

    // Aparentemente esse header manda informação para a aplicação que faz request no servidor
    header('location: lista.php');
    // esse header da permissão para que o svelte possa pegar as informações dessa parte do servidor
    header('Access-Control-Allow-Origin: *');
    // ???????/?
    header('Content-Type: text/json');
?>