<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h1>Loop exercices</h1>
    <h2>exercice 1</h2>
    <?php
        $n = 1;

        while($n <= 120){
            echo $n ++;
        }
    ?>

<h2>exercice 2</h2>
    <?php
        for($m = 1; $m <= 120; $m ++){
            echo $m;
        }
    ?>

<h2>exercice 3</h2>
    <?php
        $names = array(
            'axel',
            'arnaud',
            'Simon',
            'mathieu',
            'Oceane',
            'radouane'
        );

        foreach($names as $name){
            echo '<pre>';
            print_r($name);
            echo '</pre>';
        }
    ?>

<h2>exercice 4</h2>
<form action="loop.php" method="get">
    <select name="">
        <option name="list" value="list"></option>
    </select>
</form>

    <?php
        $countries = $_GET['list'];
        $countries = array(
            'BE' => 'Belgium',
            'FR' => 'France',
            'ES' => 'Espagne',
            'PB' => 'Pays-bas',
            'DE' => 'Allemagne',
            'IT' => 'Italie',
            'US' => 'USA',
            'EN' => 'Angleterre',
            'SU' => 'Suisse',
            'AU' => 'Autriche',
        );

        foreach($countries as $country){
            echo '<pre>';
            print_r($country);
            echo '</pre>';
        }
    ?>
</body>
</html>