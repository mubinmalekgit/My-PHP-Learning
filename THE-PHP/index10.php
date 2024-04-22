<!-- functions in php -->
<?php

?>
<?php
#simple function 
function hii(){
    echo "kya bolti public" ."<br>";
}
hii();

#function with parametr 
function names($fname){
  echo "$fname .<br>";
}
names("mubin");
names("faruk");
names("muhammad");


//function with parametr 2 time (do some examples)
function fname($name){
    echo "$name ";
}
fname("aba");
fname("kadar");


echo "<br><br>";
#function with double parametr 
function ikbal($khala, $ka){
    echo "$khala $ka";
}
ikbal("assalamualaykum","ikbalbhai <br>");
ikbal("hello","ikbalbhai"); //same func with deffrent arg


echo "<br><br>";
#function call without parametr/argm
function detail($fname="mubin", $lname="malek"){
    echo "$fname $lname";
}
detail();


echo "<br><br>";
#func in calculation
function sum($a, $b){
    echo $a + $b;
}
sum(15,25);

