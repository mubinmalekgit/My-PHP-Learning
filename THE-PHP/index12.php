<!-- //   $_GET, $_POST Methods
// PHP global variables used to collect data from html form, 
// when data is sent to a file via action atribut in the <form> tag. -->

   <!-- // <form action="xyz.php" method="GET/POST"> -->
<?php
    // echo "<pre>";
   // echo print_r($_GET);   //jese hi ham form ko submit kar rahe hai get req page pe ja rahi he or jo bhi data aa raha hai use ek-ek keys me le rahi hai, name attribute ko hi read karta ha so sab me name attribute assign kare
    // echo $_GET["username"];    // for print 


    // below code for check that username is empty or not
    
    
        if (empty($_GET['username'])) {
            echo "user name is empty";
         
        echo "<br>";
        } else if (empty ($_GET['password'])) {
            echo "Password is empty";
        }else{ 
            echo "All Good";
        }

       echo "<br>","<br>";
?>




    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index12.php" method="get"> 
            <div>
                <label>username:</label>
                <input type="text" name="username">
            </div> <br>

            <div>
                <label> PAssword</label>
                <input type="password" name="password">
            </div> <br>

            <div>
                <button type="submit">Log in</button>
            </div>
        </form>

        <br><br><br>

        <a href="index12.php">Home</a>
    </body>
    </html>


    <!-- jis tarha get method he usi trha post method he app sirf get ki jagha post kardo -->
  
    <!-- diffrence:-
     #get method :- data append to the url,
     not secure,,
     char limit,
     bookmark possible,
     better for search page    * post is better for submit data in database
              -->