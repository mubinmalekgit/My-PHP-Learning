<?php
/* 
    #Insert Query/Operation for :- data , database me store kis tarike se hota hai 
*/

include("config/database.php");  //file path

// Insert Query
$date = date("Y-m-d H:i:s");  //predefine php func for date&time
$sql = "insert into ft02 (username, password, created)
         values ('mubinmalek', 'mm123', '$date')";


//database file mathi already banelo $conn obj no use karyo
$conn->query($sql);

if ($conn == true) {
    echo "record created";
}else{
    echo "record not created error";
}
?>