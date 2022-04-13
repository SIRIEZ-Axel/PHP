<h2>exercice 11</h2>
<form action="ternary.php" method="get">
    <input type="radio" name="gender" value="M">M
    <input type="radio" name="gender" value="F">F
    <input type="submit" name="submit" value="submit">
</form>
<?php
$gender = $_GET['gender'];

$hello = $gender == 'F' ? 'Hello Miss' : 'Hello Mister';
echo $hello;