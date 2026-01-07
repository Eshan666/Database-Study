
<?php    include "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Study</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
    echo "Hello world";
    ?>
    <form action="" method = "POST">

    <label name="username">Username</label>
    <input type="username" name="username"></input>
    <br>

    <label name="password">Password</label>
    <input type="password" name="password"></input>
    <br>
    <input type="submit"></input>
    </form>    

    <?php
     $username  = $_POST["username"];
     $password  = $_POST["password"];
      if($username == "" || $password == ""){
        die("Username or password cant be null!");
     }
     echo "{$username} is the name and password is {$password}" ;

    


     ?>
</body>
</html>