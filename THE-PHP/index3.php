<!-- some pre define functions in php -->
<!-- string func, number func, Math func -->
<?php
    $name = "Mubin bin farook";
    echo strlen($name); //for see the string quant, it count the space
    echo "<br>";
    echo str_ireplace("U","oo",$name);//to eplace , always use ireplace instead replace
    echo "<br>";
    echo ucfirst($name)."<br>"; //  capitalize first letters of word
    echo ucwords($name); // capitalize all first letters of word


    #Number function
    echo "<br><br>";
    echo var_dump(is_int($name)); //to check int 

    echo "<br>";
    echo var_dump( is_bool($name)); // to check float etc.... 

    echo "<br>";
    $magicnumber = "33";
    echo var_dump( is_numeric($magicnumber)); // double quotes me number likhne se vo string ho jata hai but is_string func sirf number check karta hai fir chahe vo "" me ho but usme koi string nahi hona chahiye



    #Math function
    echo "<br><br>";
    echo pi()."<br>";
    echo abs(-89)."<br>"; //sirf negative value ko psitive me convert kar deta hai
    echo sqrt(25)."<br>"; //find the square root
    echo round(30.49)."<br>";  // to set number in rounde figure
    echo rand()."<br>"; //give you the random number as it want
    echo rand(1,100)."<br>"; //give you the random number between 1 to 100
?>