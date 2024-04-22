<?php
/*
    select Query for :- database me se data lakar user ko show karvana hai

*/

include("config/database.php");


#select Query
$sql = "select * from ft02";   // *  for selecting all fields/columns
$result = $conn->query($sql);
// echo "<pre>";
// print_r($result);
// exit;

if ($result->num_rows > 0) {  //This condition checks if the query stored in the variable $result returned any rows. num_rows is a property that contains the number of rows in the result set. If num_rows is greater than 0, it means the query returned one or more rows.
    while ($row = $result->fetch_assoc())  //fetches a row from the result set as an associative array
   
        print_r($row);
        echo "<pre>";
        exit;
}
?>






<!-- Revision -->
<?php /*

    $select = "select * from table_name";
    $result = $conn->query($result);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
            echo "<pre>";
            print_r($row);
            exit;
        }
    }*/
?>