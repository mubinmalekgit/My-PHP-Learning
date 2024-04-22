<!-- with while loop repeating html p tag with php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i = 1;
    while ($i <= 10) {
     ?> 
     <!-- ipar php is liye close kia ke hame html likhna tha -->
    <p><?php echo $i ?></p>
    <?php $i++;
    }
    ?>



    <?php
    $w =1;
    while ($w <= 10) {
    ?>
    <p><?PHP echo $w?></p>
    <?php
    $w++;
    }
    ?>
</body>
</html>