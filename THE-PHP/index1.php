              <!-- variables in php 
variable means :- reusable container that holds the data
data types :- string, integer, float, boolean -->
<?php 
$name = "mubin"; //string data
$age = 23; //integer 
$marks = 8.5; //float
$married = true;  //boolean


echo "my name is ".$name; //using . get the variable
echo "<br>my age is".$age;
echo "<br>marks is $marks%"; // second method if dont wnna use .
echo "<br>im not ".$married;

// cheking data type and lenth
echo "<br><br><br>"; 
echo var_dump($name) . "<br>";
echo var_dump($age) . "<br>";
echo var_dump($marks) . "<br>";
var_dump($married) . "<br>";
?>
