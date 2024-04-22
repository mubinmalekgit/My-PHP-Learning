<!-- multidimentional Array  - Array inside array  -->
<?php 
$students = array (
    array("name" => "mubin", "class" => "MAC"),
    array("name" => "ahmad", "class" => "MBA")
);

foreach ($students as $key => $value) {
//   print_r($value);
    foreach ($value as $k => $v) {
        echo "<b>$k</b> :". $v ."<br>";
    }
};