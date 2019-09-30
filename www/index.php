<!DOCTYPE HTML>
<html>
    <head>
        <h1>Youtube Video Saver</h1>

        <h4>Save links to your favorite Youtube videos to watch in a customized playlist later
        </h4>
    </head>
    <body>
        <form action="insert.php" method="post">
            <p>
                <label for="videoName">Youtube Video Name:</label>
                <input type="text" name="video_name" id="firstName">
            </p>
            <p>
                <label for="embedUrl">Youtube Embed Url*:</label>
                <input type="text" name="embed_url" id="lastName">
            </p>
            <input type="submit" value="Submit">
        </form><br>
        <a href='http://127.0.0.1:8081'>Click here to see your custom playlist</a>
        <br><br><font size="1">Created by Jack Kearney, Isaac Caruso, and Reid Smith <br>
           <b> *Please note the embed url can be found by clicking share on the video's webpage and then clicking embed video. Copy the entire provided code and provide above.
    </body>
</html>
