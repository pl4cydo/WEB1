<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h1>Socieade do Anel</h1>
    <form action="form-test.php"> 
        <input type="text" name="nome">
        <input type="text" name="complemento">
        <input type="text" name="pokemon">
        <input type="submit">
    </form>
    <ul>
        <?php $sociedade = file('lista.txt'); 
              $pokemon = file('pokemons.txt');  
        ?>
        <?php for($i=0; $i<sizeof($sociedade); $i++){ ?>
            <li>
                <?php  echo $sociedade[$i]; ?>
            </li>
        <?php } ?>
        <?php for($j = 0; $j < sizeof($pokemon); $j++): ?>
            <li>
                <?= $pokemon[$j]; ?>
            </li>
        <?php endfor ?>
    </ul>
</body>
</html>