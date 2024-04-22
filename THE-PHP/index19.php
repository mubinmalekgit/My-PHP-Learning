<!-- MySql Delete Query -->

<?php

include("config/database.php");

#delere query
$sql = "delete from ft02 where id=5";
$result = $conn->query($sql);

if ($result == true) {
    echo "data deleted secessfully";
}else echo "data not deleted";
    

?>