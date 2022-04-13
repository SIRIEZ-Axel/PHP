<?php
$gender = 'male';
$age = 12;
$language = 'Chinese';

if ($gender == 'Female'){
	// Instructions here will be ran if gender is "Female"
    echo 'She is female, ';
	if ( $age <= 12 and $language == "English" ) {
		// Instructions here will be ran if gender is Female, age is below 13 and language is English.  
		echo 'she is 12 and speaks English';
	} else{
		// Instructions here will be ran if gender is Female, and age is above 12 or language is not English. 
        echo 'She is not 12 or does not speak English';
	}

} else {
	echo 'He is a male, ';

	if ( $age <= 12 and $language == "Chinese" ) {
		// Instructions here will be ran if gender is not Female, and if age is below 13 and language is Chinese. 
        echo 'he is 12 and speaks Chinese';
	}
}

?>