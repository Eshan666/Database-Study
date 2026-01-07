<?php   include "database.php"; 

$conn = mysqli_connect($db_server, $db_user,$db_pass,$db_name);

if($conn){
    echo "Connected!";
}

$sql = "SELECT * FROM `study`";

$result = mysqli_query($conn,$sql);

// echo var_dump($result);
// echo "<br>";
// print_r($result);
// echo "<br>";
// echo print_r(mysqli_fetch_assoc($result));
// echo "<br>";
// //echo mysqli_num_rows($result);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<li>{$row['id']} {$row['username']} {$row['password']} </li>";
    }

}



?>