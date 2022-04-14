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
$gif1 = '<iframe src="https://giphy.com/embed/lN1MTl03Qls145LJ3w" width="480" height="480"</iframe>';
$gif2 = '<iframe src="https://giphy.com/embed/BzyTuYCmvSORqs1ABM" width="480" height="480"></iframe>';
$gif3 = '<iframe src="https://giphy.com/embed/JmgHQ8YJrfs5F6RpK4" width="480" height="480" ></iframe>';

$human = ($gender == 'unicorn' ? $gif1 : ($gender == 'cat' ? $gif2 : $gif3));

echo $human;
?>

