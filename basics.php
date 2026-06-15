
<?PHP

echo "Hello, This is My First php Web";
echo "\n";
// Variables in php
$var1 = 45;
$var2 = 18;
echo "Hello World";
echo "\n", $var1, "\t", $var2, "\n";
// echo "<br>"; More preferable for next line instead of '\n'  but in online compiler its not working so using '\n'

// Operators in php
//1. Arithmetic Operators
echo "The Value of ", $var1 ," + ", $var2, " = ", $var1+$var2, "\n";
echo "The Value of ", $var1 ," - ", $var2, " = ", $var1-$var2, "\n";
echo "The Value of ", $var1 ," * ", $var2, " = ", $var1*$var2, "\n";
echo "The Value of ", $var1 ," / ", $var2, " = ", $var1/$var2, "\n";

//2. Assignment Operators
$newVar = $var1+ $var2;
echo "Value of newVar = ", $newVar, "\n";
echo "Using += 5 Operator to newVar ", $newVar+= 5, "\n";
echo "Using -= 5 Operator to newVar ", $newVar-= 5, "\n";
echo "Using *= 5 Operator to newVar ", $newVar*= 5, "\n";
echo "Using /= 5 Operator to newVar ", $newVar/= 5, "\n";
//3. Comparison Operators
// It returns boolean value ie 0 or 1
echo $var1 > $var2, "\n"; //It give 1
echo var_dump($var1 == $var2);  //It gives bool(false)
// similarly
echo var_dump($var1 != $var2);
echo var_dump($var1 < $var2);
echo var_dump($var1 > $var2);
echo var_dump($var1 <= $var2);
echo var_dump($var1 >= $var2);

//4. Increment/Decrement Operators
echo $var1++, "\n";
echo $var1--, "\n";
echo ++$var1, "\n";
echo --$var1, "\n";

//5. Logical Operators
//and (&&)
//or (||)
//xor (xor)
//not (!)

$myvar = (true) and (true);
echo var_dump($myvar);
$myvar = (false) && (true);
echo var_dump($myvar);

$myvar = (true) or (true);
echo var_dump($myvar);
$myvar = (false) || (true);
echo var_dump($myvar);

//Use Symbols instead of words  like use && instead of and

$myvar = (true) xor (true);
echo var_dump($myvar);
$myvar = (false) xor (true);
echo var_dump($myvar);
//True when both results are not same

$myvar = (!true);
echo var_dump($myvar);
$myvar = (!false);
echo var_dump($myvar);


// Data types in php
//1. String
$v = "This is a String";
echo var_dump($v);
//2. Integer
$v = 7;
echo var_dump($v);
//3. Float
$v = 7.7;
echo var_dump($v);
//4. Boolean
$v = true;
echo var_dump($v);
//5. Array
$v = [7, 8, 9];
echo var_dump($v);
// Constant in php
// Use at top so we can use anywhere
define('PI', 3.14);
echo "Value of Define Constant PI is ", PI, "\n";
//6. Object
//resource and null also data type we will discuss later about these two.

// Conditional Statements

echo "\n\nYour Party Status is here \|/ \n";

$age = 21;

if ($age > 18){
	echo "You can go to the party \n";
}
else {
	echo "You can't go to the party \n";
}

//Array

$languages = array("C", "C++", "Python", "JS", "php");
echo $languages[0], "\n";
echo count($languages), "\n"; //It Gives Total no. of elements in array

 //Loops in php
 $a = 1;
 
 //While Loop 
 while($a <= 10){
 	echo $a, "\t";
 	$a++;
 }
 echo "\n\n";
 
 $i = 0;
 
 while($i < count($languages)){
 	echo $languages[$i++], "\n";
 } 
 
 // do-while Loop
 $i = 0;
 do{
 	echo $languages[$i++], "\n";
 }while($i < count($languages));
 
 //for loop
  for($i = 0; $i < count($languages); $i++){
  	echo $languages[$i], "\n";
  }
  
  //foreach loop
  foreach($languages as $values){
  	echo $values, "\n";
  }
  
  //function
  /*
  function printName(){
  	echo "Vaibhav Adsul", "\n";
  }
  printName();
  
  function printNumber($n){
  	echo "You Passed ", $n, "\n";
  }
  printNumber(45);
 */ 
 
 $str1 = "This is a String";
 $l = strlen($str1); //Count the total no. of characters in string
 echo $l, "\n";
 $str2 = "This is Another String";
 echo $str1." ".$str2;
 echo "\n";
 // dot(.) is a concatination operator in php which conacts the string
 echo str_word_count($str1); //It prints the total no. of words in string str1. 
 
echo "\n", strrev($str1); //It prints reverese string
echo "\nPosition of is in ", $str1, " is ", strpos($str1, "is"); //It return the position where a searched element is present in string if element is not present then it doesn't return anything

echo "\n", str_replace("i", "I", $str1); //It replace small i with capital I

?>