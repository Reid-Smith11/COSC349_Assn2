<!DOCTYPE HTML>
<html>
    <head>
        <h1>My Saved Videos Playback:</h1>

        
        <?php
        //Connect to database
        $link = mysqli_connect("192.168.2.12", "webuser", "insecure_db_pw", "fvision");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        
        
         
        // Attempt select query execution
        $sql = "SELECT * FROM videos";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                    echo "<tr>";
                        echo "<th>Order</th>";
                        echo "<th>Video Name</th>";
                        echo "<th>Video</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['video_name'] . "</td>";
                        echo "<td>" . $row['embed_url'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Free result set
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }


         
        // Close connection
        mysqli_close($link);
        ?>

        <form action="clear.php" method="post">
            <br><input type="submit" value="Clear Playlist">
        </form><br>
                
            </head>
            <body>
                <br>
                <a href='http://127.0.0.1:8080'>Click here to add more videos</a>
                <br>
       
                <br><br><font size="1">Created by Jack Kearney, Isaac Caruso, and Reid Smith</font>
            </body>
        </html>