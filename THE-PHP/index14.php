<!-- checkbox btn manupulation -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index14.php" method="post">
        <label>Select ur fav Food</label> <br>
        <input type="checkbox" value="fast-food" name="foods[]"> fast-food <br>
        <input type="checkbox" value="snacks" name="foods[]"> snacks <br>
        <input type="checkbox" value="sweets" name="foods[]"> sweets <br>
        <input type="checkbox" value="fruits" name="foods[]"> fruits <br>

        <button type="submit" name="submit" value="submit">submit</button>
<br><br>
        <?php
        if (isset ($_POST['submit'])) {
        //  echo "<pre>";
        // print_r($_POST);
         $foods = $_POST['foods']; 
         foreach ($foods as $food) {
            echo "you select : ".$food."<br>";
         }
        }
        ?>
    </form>
    </body>
</html>

<!-- learnig points :- [] in name  -->