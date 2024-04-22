<!-- associative array -> array with key & value pair -->

<?php

$subjects = array ("mubin" =>"java",
 "jayesh" =>"maths", 
 "kalpesh"=>"python",
 "jayraj" => "rdbms",
"mehul" => "cn");        // ass array ma tame jate index aapi sako chi
#print_r($subjects);      //print_r use developer for debugging
?>


<?php
foreach($subjects as $key => $value){
    ?>
    <p><b><?php echo $key ?></b><?php echo $value ?></p>
<?php } ?>