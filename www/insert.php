<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("192.168.2.12", "webuser", "insecure_db_pw", "fvision");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$video_name = mysqli_real_escape_string($link, $_REQUEST['video_name']);
$embed_url = mysqli_real_escape_string($link, $_REQUEST['embed_url']);


// Attempt insert query execution
$sql = "INSERT INTO videos (video_name, embed_url) VALUES ('$video_name', '$embed_url')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
 <br><a href='http://127.0.0.1:8080'>Click here to upload more videos</a>
 <br><a href='http://127.0.0.1:8081'>Click here to go to your playlist</a>
