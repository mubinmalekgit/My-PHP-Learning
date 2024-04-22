<?php
/*
    ##isset() :- specify php function for check that give thing have value or not 
    Return True, if a variable is declared and not null

    ## empty()
    Return True, if a variable is not declared, null, empty, false
*/

$name = "mubin";
echo isset($name);  // o/p is 1 means true and not show any o/p then its false

// $name = null;
echo isset($name); 

// $name = "";
echo isset($name); 


#use isset on if cond
// if (isset($name)) {
//     echo "name is set";
// }else{
//     echo "name is not set";
// }


// empty() func
if (empty($name)) {
    echo "name is set";
}else{
    echo "name is not set";
}