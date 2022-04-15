<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="icon" href="favicon.png">
    <title>Consolidation</title>
</head>
<body>    
<header>
    <h1>Objet : Excuse</h1>
</header>

<form action="excuse.php" method="get" class="form" id="form">
    Name of the child : <input type="text" name="name" class="child" id="child"><br>
    Gender of the child : <input type="radio" name="gender" value="M" class="m-gender" id="m-gender">boy <input type="radio" name="gender" value="F" class="f-gender" id="f-gender">girl<br>
    Name of the teacher : <input type="text" name="teacher" class="teacher" id="teacher"><br>
    Reason of the absence : <br>
    <input type="radio" name="absence" value="covid" class="radio" id="radio">Covid<br>
    <input type="radio" name="absence" value="clamidia" class="radio" id="radio">Clamidia<br>
    <input type="radio" name="absence" value="cancer" class="radio" id="radio">Cancer<br>
    <input type="radio" name="absence" value="intercostal" class="radio" id="radio">Douleur intercostale<br>
    <input type="radio" name="absence" value="torsion" class="radio" id="radio">Torsion testiculaire<br>
    <input type="radio" name="absence" value="diamant" class="radio" id="radio">Je dois monter diams sur lol<br>
    <input type="submit" name="submit" value="Submit" class="submit">
</form>


<?php
    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $teacher = $_GET['teacher'];
    $absence = $_GET['absence'];
    
    $gender_choice1 = $gender == 'F' ? 'absente' : 'absent';
    $gender_choice2 = $gender == 'F' ? 'fille' : 'fils';
    
    $date = date("d-m-Y");
    
    if(empty($name) or empty($gender) or empty($teacher) or empty($absence)){
        echo 'Something is missing';
    } else 
    echo '<p>Monsieur le Proviseur,<br>
    Notre enfant, '. $name .', sera '.$gender_choice1.' et n’assistera donc pas aux cours du professeur '.$teacher.' du '.$date.'.<br>
    Notre '.$gender_choice2.' sera absente et n’ira pas au lycée pour des raisons familiales et personnelles.<br>
    
    Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable.<br>
    
    Cordialement</p>'
    ?>


<!-- <style>
    body{
        max-width: 1200px;
        font-family: 'Roboto', sans-serif;
        margin: 0 auto;
        background-color: beige;
    }
    h1{
        text-decoration: underline;
    }
    form{
        background-color: rgba(136, 20, 20, 0.5);
        border-radius: 10px;
        line-height: 35px;
    }
    p{
        background-color: rgba(63, 151, 163, 0.5);
        border-radius: 10px;
        line-height: 35px;
        display: flex;
        justify-content: center;
    }
    .submit{
    display: flex;
    justify-content: center;
    border-radius: 8px;
    border: none;
    padding: 15px 15px;
}
</style> -->

<footer>
    <img src="favicon.png" alt="croix rouge" width="300">
</footer>

</body>
</html>