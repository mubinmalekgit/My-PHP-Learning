<?php
//logical operators = combine conditional statements
// like if(condition1 && condition2)

// && = True, if both conditions are true
// || = True, if atleast one condition is true
// ! True if false, false if true 


//simple if condition
$temp = 31;
if ($temp < 0 ) {
    echo "tempracher is not goood";
}else {
    echo "tempracher is goood";
}echo "<br><br>";

// ab muje zyada condditions lagani hai tab logical oerators use aate hai
$temp = 0;
if ($temp > 0 && $temp < 35 ) {  //dono conditions sahi honi chahiye
    echo "tempracher is goood";
}else {
    echo "tempracher is not goood";
}


# || or cond...
echo "<br><br>";
$temp = 0;
if ($temp > 0 || $temp < 35 ) {  //koi ek conditions sahi honi chahiye
    echo "tempracher is goood";
}else {
    echo "tempracher is not goood";
}

//switch case is same as else if 

?>