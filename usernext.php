<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>language</title>
    <link rel="stylesheet" href="usernext.css">
</head>
<body>
    <form action="">
        <div class="header">
            <h3>English</h3>
            <h3>Hindi</h3>
            <h3>Marathi</h3>
            <h3>Gujarathi</h3>
            <h3>Japanese</h3>
            <div class="input-box" id="">
                <input type="text" name="choilang" placeholder="Select language">
            </div>
            <div class="input-box2" id="submit">
                <input type="submit" name="submit" placeholder="submit">
                <a href="userhome.php">Next</a>
            </div> 
        </div>
    </form>
</body>
</html>

<?php

include("connection.php");
error_reporting(0);


$choice = $_GET['choilang'];
//echo "$choice";

$query = "INSERT INTO languageonly VALUES ('$choice', NULL)";

$data = mysqli_query($conn, $query);

if($data){
    echo "Data inserted into Database";
}
else{
    echo "Data connection failed.";
}

?>