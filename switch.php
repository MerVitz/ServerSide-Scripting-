<?php
/**
 * Am going to test and use the Switch fucntionality
 * A rundom generated from 1 to 7
 * When 1 is generated the first day of the week is generated, 
 * And respectively to the last day of the wwek, 7
 * */

//Generating a day of the week.
$Day= rand(1,7);


$Sunday='Today is a Sunday';
$Monday='Today is a Monday';
$Tuesday='Today is a Tuesday';
$Wednesday='Today is a Wednesday';
$Thursday='Today is a Thursday';
$Friday='Today is a Friday';
$Saturday='Today is a Saturday';

switch ($Day) {
	case '1':
		// code...
	echo "$Sunday" . "<br>";
		break;
	case '2':
		// code...
	echo "$Monday" . "<br>";
		break;
	case '3':
		// code...
	echo "$Tuesday" . "<br>";
		break;
	case '4':
		// code...
	echo "$Wednesday" . "<br>";
		break;
	case '5':
		// code...
	echo "$Thursday" . "<br>";
		break;
	case '6':
		// code...
	echo "$Friday". "<br>";
		break;
	case '7':
		// code...
	echo "$Saturday". "<br>";
		break;
	default:
		// code...
	echo "You don't have any day, generated". "<br>";
		break;
}


if ($Day==5) {
	// code...
	echo "<br>";
	echo "Today is prayer and fasting for the Evangelistic Teams"; 
} elseif ($Day== 1) {
	// code...
	echo "<br>";
	echo "Today is the day of resting and you will be going to church";
} elseif ($Day==2) {
	// code...
	echo "<br>";
	echo "Attend your lectures today most of the time you are free.";
} elseif ($Day==3) {
	// code...
	echo "<br>";
	echo "Prayer and Fasting for the second years Committee";
} elseif ($Day==4) {
	// code...
	echo "<br>";
	echo "Today is the Prayer and fasting for Christian Union";
} elseif ($Day==6) {
	// code...
	echo "<br>";
	echo "Today is the Christian Union Fellowship";
} elseif ($Day==7) {
	// code...
	echo "<br>";
	echo "Today you ares upposed to go Evangelistci Team Felloship.";
}



?>