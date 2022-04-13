<h2>Exercise 1.1</h2>
<?php
// 1.1 Clean your room Exercise 
$room_is_filthy = false;

if( $room_is_filthy == false ){
	echo "Yuk, Room is dirty : let's clean it up !";
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>

<h2>Exercise 1.2</h2>
<?php
$possible_states = [
    0 => 'health hazard',
    1 => 'filthy',
    2 => 'dirty',
    3 => 'clean',
    4 => 'immaculate'
];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

if($room_filthiness == $possible_states[0] ){
	echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness == $possible_states[2] ){
	echo "Yuk, Room is dirty : let's clean it up !";
// ...
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>

<h2>Exercise 2</h2>
<?php
date_default_timezone_set('Europe/Brussels');
$now = date('H:i:s');
echo $now ;

if( $now >= '05:00:00' AND $now <= '09:00:00'){
	echo '<br>Good morning';
} else if ($now >= '09:01:00' AND $now <= '12:00:00') {
	echo '<br>Good day !';
} else if ($now >= '12:01:00' AND $now <= '16:00:00'){
	echo '<br>Good afternoon !';
} else if ($now >= '16:01:00' AND $now <= '21:00:00'){
	echo '<br>Good evening !';
} else if ($now >= '21:01:00' AND $now <= '04:59:00'){
	echo '<br>Good night !';
}
?>

<h2>Exercise 3</h2>
<form method="get" action="./conditions.php">
	<input type="text" name="age" placeholder="Please type your age">
	<input type="submit" name="submit" value="submit">
</form>
<?php
if (empty($_GET['age'])){
	echo 'Please type your age';
} else if($_GET['age'] < 12){
	echo 'Hello kiddo !';
} else if($_GET['age'] >= 12 AND $_GET['age'] <= 18){
	echo 'Hello Teenager !';
} else if($_GET['age'] >= 12 AND $_GET['age'] <= 18){
	echo 'Hello Teenager !';
} else if($_GET['age'] >= 19 AND $_GET['age'] <= 115){
	echo 'Hello Adult !';
} else if($_GET['age'] > 115){
	echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
}
?>

<h2>Exercise 4</h2>
<form method="get" action="conditions.php">
	Gender:
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male

	<br>
	<input type="text" name="age" placeholder="Please type your age">
	<input type="submit" name="submit" value="submit">
</form>
<?php
if (empty($_GET['age']) OR empty($_GET['gender'])){
	echo 'Please type your age or your gender';
} else if ($_GET['age'] < 12 AND $_GET['gender'] =='female'){
	echo 'Hello Kid girl !';
} else if ($_GET['age'] < 12 AND $_GET['gender'] =='male') {
	echo 'Hello Kid boy !';
} else if($_GET['age'] >= 12 AND $_GET['age'] <= 18 AND $_GET['gender'] =='female'){
	echo 'Hello Teen girl !';
} else if ($_GET['age'] >= 12 AND $_GET['age'] <= 18 AND $_GET['gender'] =='male') {
	echo 'Hello Teen boy !';
} else if($_GET['age'] >= 19 AND $_GET['age'] <= 115 AND $_GET['gender'] =='female'){
	echo 'Hello Misses !';
} else if ($_GET['age'] >= 19 AND $_GET['age'] <= 115 AND $_GET['gender'] =='male') {
	echo 'Hello Mister !';
} else if($_GET['age'] > 115 ){
	echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
}
?>

<h2>Exercise 5</h2>
<form method="get" action="conditions.php">
	Gender : 
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male

	<br> <input type="text" name="age" placeholder="Please type your age">
	<br>Do you speak english ?  
	<input type="radio" name="language" value="yes">yes
	<input type="radio" name="language" value="no">no
	<br><input type="submit" name="submit" value="submit">
</form>
<?php
if (empty($_GET['age']) OR empty($_GET['gender']) OR empty($_GET['language'])){
	echo 'Please type your age or your gender';
} else if ($_GET['age'] < 12 AND $_GET['gender'] =='female' AND $_GET['language'] == 'yes'){
	echo 'Hello Kid girl !';
} else if ($_GET['age'] < 12 AND $_GET['gender'] =='female' AND $_GET['language'] == 'no'){
	echo 'Aloha Kid girl !';
} else if ($_GET['age'] < 12 AND $_GET['gender'] =='male'AND $_GET['language'] == 'yes') {
	echo 'Hello Kid boy !';
} else if ($_GET['age'] < 12 AND $_GET['gender'] =='male'AND $_GET['language'] == 'no') {
	echo 'Aloha Kid boy !';
} else if($_GET['age'] >= 12 AND $_GET['age'] <= 18 AND $_GET['gender'] =='female' AND $_GET['language'] == 'yes'){
	echo 'Hello Teen girl !';
} else if($_GET['age'] >= 12 AND $_GET['age'] <= 18 AND $_GET['gender'] =='female' AND $_GET['language'] == 'no'){
	echo 'Aloha Teen girl !';
} else if ($_GET['age'] >= 12 AND $_GET['age'] <= 18 AND $_GET['gender'] =='male' AND $_GET['language'] == 'yes' ) {
	echo 'Hello Teen boy !';
} else if ($_GET['age'] >= 12 AND $_GET['age'] <= 18 AND $_GET['gender'] =='male' AND $_GET['language'] == 'no' ) {
	echo 'Aloha Teen boy !';
} else if($_GET['age'] >= 19 AND $_GET['age'] <= 115 AND $_GET['gender'] =='female' AND $_GET['language'] == 'yes'){
	echo 'Hello Miss !';
} else if($_GET['age'] >= 19 AND $_GET['age'] <= 115 AND $_GET['gender'] =='female' AND $_GET['language'] == 'no'){
	echo 'Aloha Miss !';
} else if ($_GET['age'] >= 19 AND $_GET['age'] <= 115 AND $_GET['gender'] =='male' AND $_GET['language'] == 'yes') {
	echo 'Hello Mister !';
} else if ($_GET['age'] >= 19 AND $_GET['age'] <= 115 AND $_GET['gender'] =='male' AND $_GET['language'] == 'no') {
	echo 'Aloha Mister !';
} 
else if($_GET['age'] > 115 ){
	echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
}
?>

<h2>Exercise 6</h2>
<form action="conditions.php" method="get">
	<input type="text" placeholder="Enter your name">
	<br>Gender : <input type="radio" name="gender" value="female">female
	<input type="radio" name="gender" value="male">male
	<br><input type="text" placeholder="Type your age" name="age">
	<br><input type="submit" name="submit" value="submit">
</form>
<?php

$AGE = $_GET['age'];
$GENDER = $_GET['gender'];

if (empty($AGE) OR empty($GENDER)){
	echo 'Something is missing';
} else if (($AGE) >= 21 AND ($AGE) <= 40 AND ($GENDER) == 'female'){
	echo 'Welcome to the team !!';
} else {
	echo 'Sorry you do not fit the criteria';
}
?>

<h2>Exercise 7</h2>
<form action="conditions.php" method="get">
	<input type="text" placeholder="Enter your name">
	<br>Gender : <input type="radio" name="gender" value="female">female
	<input type="radio" name="gender" value="male">male
	<br><input type="text" placeholder="Type your age" name="age">
	<br><input type="submit" name="submit" value="submit">
</form>
<?php
$AGE = $_GET['age'];
$GENDER = $_GET['gender'];

if ($AGE >= 21 AND $AGE <= 40 AND $GENDER == "female") {
	echo 'Welcome to the team !';
} else  {
	echo 'Sorry you do not fit the criteria';
}
?>

<h2>Exercise 8</h2>
<form action="conditions.php" method="get">
	<input type="text" placeholder="Student name" name="name">
	<input type="text" placeholder="Note" name="note">
	<input type="submit" name="submit" value="submit"> 
</form>
<?php
if (empty($_GET['name']) or empty($_GET['note'])){
	echo 'Something is missing';
} else if ($_GET['note'] <= 4){
	echo 'This work is really bad. What a dumb kid!';
} else if ($_GET['note'] >=5 and $_GET['note'] <= 9){
	echo 'This is not sufficient. More studying is required.';
}
?>