<?php

// First PHP Code
echo "1. This is my first PHP code<br>";
print "2.  This is my code for PHP Scripting Language";

// Echo and Print Commands

echo ("hello h r u..?<br>");
echo "Print output with echo command<br>","bye" ;
print("Print output with print command<br>");
// print command cannot take multiple arguments. if do gives error
//print "Print output with print command<br>","bye";


// Comments in PHP

// Single line comment
/* Multiline 
    Comment
*/
# scripting (perl) Format comment




// PHP is case insensitive language.

echo "hello1<br>";
Echo "hello2<br>";
ECHO "hello3<br>";

// VARIBALE IN php is case sensitive

//$abc =5;
$Abc =15;
$ABC =25;
$ABC =35;
//echo $abc."hello world". $Abc. $ABC;


// constants

define("ABC",50,true);   // constant declaration
                        // true makes it case insensitive.
$ABC =25;               // cannot be changes
echo "<br>";
echo abc;


// datatypes in PHP
//PHP is loosly typed language


$dt1 = 'pankaj';
$dt2 = 14;
$dt3 = 3.2;
$dt4 = true;
$dt5 = null;
$dt6 = array(2,3,5);
$dt1="panakj";
echo "<br>datatype: $dt1";

echo $dt6[0];       // to print array single element
                    // loop to print all elements

echo $dt1;
echo $dt2;
var_dump ($dt1);    // var_dump is used 
                    // to display the type of variable

var_dump ($dt6);

// print "hello"

echo '"hello"';
echo '$dt1';        // display $dt1 instead of value
echo "$dt1";        // display value as it is



// String Manipulation Function

//Find string Length
echo "<br><br>";
echo strlen("Hello world");

// string World Count
echo "<br><br>";
echo str_word_count("Hello world");

// String Reverse
echo "<br><br>";
echo strrev("Hello world");

// String Replace

echo "<br><br>";
echo str_replace("Hello","hru..??","Hello World");



// is_int() Function
// is_float() Function
// isset() function

// Casting 

$abcd = 125.5;
$intnum = (int)$abcd;           // cast float to int
echo "<h1>Casting Done: $intnum <br></h1>";
echo "<br><br>";
var_dump(is_float($abcd));      // check wheater the varibale is 
                                // float or not
echo $intnum;



// Arithmatic operator
// +  -  *  /  %  **

$a =10;
$b = 20;

$c = $a + $b;

echo "Sum = $c";



?>