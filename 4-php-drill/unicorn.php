<h2>exercice 11.2</h2>
<h3>Are you an human, a cat or an unicorn ?</h3>
<form action="unicorn.php" method="get">
    <input type="radio" name="gender" value="human"> Human 
    <input type="radio" name="gender" value="cat"> Cat
    <input type="radio" name="gender" value="unicorn"> Unicorn 
    <input type="submit" name="submit" value="submit"> 
</form>
<?php
$gender = $_GET['gender'];

$gif2 = file_get_contents("http://path.to/gif/pic.gif");
$gif3 = file_get_contents("http://path.to/gif/pic.gif");

$human = $gender == 'unicorn' ? $gif1 : 'Cat' ;

echo $human;
?>
