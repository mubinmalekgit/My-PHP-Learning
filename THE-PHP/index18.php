<!-- database update query -->
<?php
include("config/database.php");

#Update Query
$sql = "UPDATE ft02 SET username='munir' where id=1  ";
$sql = "UPDATE ft02 SET username='salman ' where id=3  ";

$result = $conn->query($sql);

if (@$result) {
    echo "Updated successfully";
}else
    echo "not updated";

?>