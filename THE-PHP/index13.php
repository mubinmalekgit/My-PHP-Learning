<!-- radio btn manupulation -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index13.php" method="post">
        <label>Select any course</label> <br>
        <input type="radio" name="course" value="BCA"> BCA <br>
        <input type="radio" name="course" value="MCA"> MCA <br>
        <input type="radio" name="course" value="Btech"> Btech <br>

        <button type="submit" name="submit">submit</button>
    </form>

    <?php
        if (isset ($_POST['submit'])) {
            $_course = $_POST['course'];

            if ($_course == 'BCA') {
                echo "YOU SELECT THE ".$_course;
            }
            if ($_course == 'MCA') {
                echo "YOU SELECT THE ".$_course;
            }
            if ($_course == 'Btech') {
                echo "YOU SELECT THE ".$_course;
            }else {
                echo "please select the course";
            }
        }
    ?>
</body>
</html>