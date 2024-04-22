<!-- operators in php -->
<?php
     #Arithmatic operators +,-,*,/,**,%
     $a = 50;  //addition
     $b = 20;
     $c = $a + $b;
    echo $a."+".$b."=".$c;

    echo"<br><br>"; //sub
    $a = 50;
    $b = 20;
    $c = $a - $b;
   echo $a."-".$b."=".$c;

   echo"<br><br>";  //multiplication
   $a = 5;
   $b = 2;
   $c = $a * $b;
  echo $a."*".$b."=".$c;

  echo"<br><br>";  //devision
  $a = 20;
  $b = 2;
  $c = $a / $b;
 echo $a."/".$b."=".$c;


    #increment/decrement operators
    echo"<br><br>";
    $p = 10;
    echo $p."<br>";
    $p++; //increment
    echo $p;

    //decrement 
    echo"<br><br>";
    $p = 10;
    echo $p."<br>";
    $p--; //decrement ,  only syntax will change
    echo $p;
    // note:- just remember pre and post increment $q = $p++ and $++p (post me line ke baad se increment hoga anf pre me pehle increment fir vo q me store hoga 
    

    #operator precedence :- (), **, * / %, + - 
    //define that which one have more priority

    echo"<br><br>";
    $total = 4 / 2 * 3 + (5 + 10) ** 2; //lets debug this
    // 4 / 2 * 3 + (15) ** 2
    // 4 / 2 * 3 + 225
    // 2 * 3 + 225
    // 6 + 225
    // 231
    echo $total;

?>