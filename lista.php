<?php 
    // esse header da permissão para que o svelte possa pegar as informações dessa parte do servidor
    header('Access-Control-Allow-Origin: *');
    // ???????/?
    header('Content-Type: text/json');
    
    // Pegar a lista que ta dentro dfo arquivo txt:
    // Foi declarado uma varialve que o valor dela é um array do arquivo txt
    // Essa transformação é feita pela funçãop file()
      $leitura = file('lista_filmes.txt');

    // Imprimir a leitura do arquivo em json que é entendi por outras linguagens
    // O array é transformado em json que é compreendido pelo SVELTE 
      echo json_encode($leitura);
?>