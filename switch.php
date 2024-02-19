<?php
/**
 * Am going to test and use the Switch fucntionality
 * A rundom generated from 1 to 7
 * When 1 is generated the first day of the week is generated, 
 * And respectively to the last day of the wwek, 7
 * */

//Generating a day of the week.
$Day= rand(1,7);

switch ($Day) {
	case '1':
		// code...
	echo "Today is a Sunday" . "<br>";
		break;
	case '2':
		// code...
	echo "Today is a Monday" . "<br>";
		break;
	case '3':
		// code...
	echo "Today is a Tuesday" . "<br>";
		break;
	case '4':
		// code...
	echo "Today is a Wednesday" . "<br>";
		break;
	case '5':
		// code...
	echo "Today is a Thursday" . "<br>";
		break;
	case '6':
		// code...
	echo "Today is a Friday". "<br>";
		break;
	case '7':
		// code...
	echo "Today is a Saturday". "<br>";
		break;
	default:
		// code...
	echo "You don't have any day, generated". "<br>";
		break;
}


?>