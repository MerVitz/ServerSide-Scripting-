<?php
/**
 * Am testing compound assignment operator. 
 * Then Binary and Unary  Kinds of operations.
 * After that I will be testing  Comparison Operators.
 * Am tresting 
 */
$myage=20;
echo('This is my age '.$myage."<br>");
$myage+=1;
echo('This is my age after one year '.$myage.'<br>');
++$myage;
echo("After testing the  unary of addition, this is my present my age ".$myage ."<br>");
echo("Am going to reduce my age by two years." ."<br>");
--$myage;
--$myage;
echo("This is my age after reducing my age y two years. " .$myage ."<br>");
print("I want to test the  postfix and prefix concept on " .$myage ."<br>");
$myage++;
print("Printing my age after postfix" .$myage ."<br>");
--$myage;
print("Printing my age after prefix" .$myage ."<br>");
$mybroage=25;

($mybroage!==$myage)?  $older="My bro is older than me":$older="I'm older than bro";
echo($older ."<br>");
($mybroage == $myage)?  $older="My bro is older than me":$older="I'm older than bro";
echo($older ."<br>");
($mybroage XOR $myage)?  $older="My bro is older than me":$older="I'm older than bro";
echo($older ."<br>");
($mybroage XOR $myage)?  $older="My bro is older than me":$older="I'm older than bro";
echo($older ."<br>");

	echo "<br />";
	
	echo("In this case, the variable x is returned then it value increamented afterwards." ."<br>");	
	$x = 10;
	echo "Let x = " . $x . "<br />";
	echo "x++ = " . $x++ . "<br />";	
	echo "New x = " . $x . "<br />";
	echo "<br />";

	echo("In this case, the The value of x is first increamented then the value is returned" ."<br>");
	$x = 10;
	echo "Let x = " . $x . "<br />";
	echo "++x = " . ++$x . "<br />";	
	echo "New x = " . $x . "<br />";
	echo "<br />";


?>