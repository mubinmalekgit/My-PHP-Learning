<!-- array and foreach loop -->

<?php
$fruits = ["apple", "banana", "orange", "mango", "chreery"];
// echo $fruits[0]; ye tarika bhi he lekin isme aapko index no. dena padta hai jo efficient way nahi  hai

array_push($fruits,"coconut"); // to add an element
array_pop($fruits); // to remove last element of arr
array_shift($fruits); // to remove first element of arr

foreach($fruits as $fruit){
    echo $fruit . "<br>";
}