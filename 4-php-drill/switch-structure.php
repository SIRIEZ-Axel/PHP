<h2>exercice 9</h2>

<form action="switch-structure.php" method="get">
	<input type="text" placeholder="Student name" name="name">
	<input type="text" placeholder="Note" name="note">
	<input type="submit" name="submit" value="submit"> 
</form>
<?php
$note = $_GET['note'];

switch ($note) {
	case 1:
	case 2:
	case 3:
    case 4:
        echo 'Your note : ';
        echo $note;
        echo '<br>';
        echo ('This work is really bad. What a dumb kid!');
		break;
	case 5:
	case 6:
	case 7:
	case 8:
    case 9:
        echo 'Your note : ';
        echo $note;
        echo '<br>';
        echo 'This is not sufficient. More studying is required.';
		break;
    case 10:
        echo 'Your note : ';
        echo $note ; 
        echo '<br>';
        echo ' barely enough!';
        break;
    case 11:
    case 12:
    case 13:
    case 14:
        echo 'Your note : ';
        echo $note ;
        echo '<br>';
        echo 'Not bad!';
        break;
    case 15:
    case 16:
    case 17:
    case 18:
        echo 'Your note : ';
        echo $note;
        echo '<br>';
        echo 'Bravo, bravissimo!';
        break;
    case 19:
    case 20:
        echo 'Your note : ';
        echo $note;
        echo '<br>';
        echo 'Too good to be true : confront the cheater!';
        break;
	default:
        echo 'Something is missing';
}
?>

<h2>exercie 10</h2>
<?php
$age = 24;
$is_adult = ($age >= 18) ? true : false;
echo $is_adult;
?>
