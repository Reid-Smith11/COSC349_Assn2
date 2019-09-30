<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("192.168.2.12", "webuser", "insecure_db_pw", "fvision");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}




// Attempt Playlist deletion
$sql = "TRUNCATE table videos";
if(mysqli_query($link, $sql)){
    echo "Playlist cleared!";
} else{
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
 <a href='http://127.0.0.1:8080'>Click here to upload more videos</a>
