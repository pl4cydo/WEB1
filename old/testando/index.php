<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
</head>
<body>
    <h1>Melhores Classificados</h1>
    <form action="form-ranking.php">
        <input type="text" name="Name">
        <input type="text" name="Score">   
        <input type="submit">     
    </form>
    <ul>
        <?php $lista = file('ranking.txt') ?>
        <?php for($i=0; $i<sizeof($lista); $i++): ?>
            <li>
                <?= $lista[$i] ?>
            </li>
        <?php endfor ?>
    </ul>
</body>
</html>