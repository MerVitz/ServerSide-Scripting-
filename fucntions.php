<?php
/**
 * 			******What this Script entail******
 * In this Task I will be doing the functions concepts.
 * Functions are also called Methods in Java
 * Jav is an Object Oriented Language
 * While PHP is a Server side scrpting language
 * I will have to call the functions that I have created
 * By value and referencing them
 * */

/**
 * 1. I will implement the normal  functions syntax.
 * 2. I will be implementing the Value returning  fucntions
 * 3. For the value returning functions I will be testing for two things.
 * 			a) Calling by Value.
 * 			b) Calling by referencing. 
 * 4. Test the global and Local variables.
 **/

// [1]. Will implement using Perimeter. normal one.
$length = 4;
$width = 4;
$radius = 2;
define("PI", 3);

 function perimeter(){
 	global $length, $width;
 	$peri = ($length+$width)*2;
 	echo "The perimeter is ".$peri." I have found it by using normal syntax of a simple function is PHP". "<br>";
 }
 //Calling the perimeter function to execute it 
 echo "First Function below this line". "<br>";
 perimeter(). "<br>";
 echo "<br>"; echo "<br>"; echo "<br>";


// [2]. Implementing the Value returning  fucntions.
function perimeter2(){
	global $length, $width;
	$perim = ($length+$width)*2;
	return $perim;
}
//Calling the function Perimeter2 to executre it.
echo "Second Function below this line". "<br>";
echo perimeter2(). "<br>";
print "Here above the perimeter have been called from a  value returnig function which is having a return value". "<br>";
 echo "<br>"; echo "<br>"; echo "<br>";


// [2]. Implementing the Value returning  fucntions using parameters to get area of a circle.
 function area ($q,$e) {
 	$Area = $q*$e*$e;
 	return $Area;
 }
 echo "Third Function below this line". "<br>";
 echo "The answer below is supposed to be 12". "<br>";
  //The PI $radius are arguments  as references of the values they hol.
 echo area(PI, $radius). "<br>";
 print "I have called this area  by using of parameters and arguments this is referencing". "<br>";
 echo "<br>"; echo "<br>"; echo "<br>";

// [2]. Implementing the Value returning  fucntions using parameters to get area of a circle.
 function eraat ($q,$e) {
 	// The $q & $e are the parameters 
 	$Area = $q*$e*$e;
 	return $Area;
 }
 echo "Fourth Function below this line". "<br>";
  echo "The answer below is supposed to be 16". "<br>";
  //The 4,2 are arguments  in values.
 echo eraat(4,2). "<br>";
 print "I have called this area  by using of parameters and arguments this is by passing values values to the functions". "<br>";
?>