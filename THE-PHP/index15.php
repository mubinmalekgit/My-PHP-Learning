     <!-- DATABASE CoNNEctions (MySql) -->
<?php
// Connecting MySql with Object Oriented approach

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "01";

//creating database connection
$conn = new mysqli($servername, $username, $password, $dbname);


// check connection
if ($conn->connect_error) {
    echo "connection not stablish".$conn->connect_error;
    exit;
}
    echo "Connection stablish successfully";
?>
<br>








     <!-- DATABASE CoNNEctions 2nd method -->
     <?php
// Connecting MySql with procedural approach

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "01";

//creating database connection  
mysqli_connect($servername, $username, $password, $dbname);
    echo " 2nd methods Connection stablish successfully";
?>