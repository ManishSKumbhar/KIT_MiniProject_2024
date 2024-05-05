<?php
    include("connection.php");
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cancel.css">
</head>
<body>
    <div class="wrap">
        <form action="cancel.php">
                <div class="input-box" id="tname">
                    <i>
                        <input type="text" placeholder=" Train Name" name = "tname" required class="one">
                    </i>
                </div>
                
                <div class="input-box" id="tnum">
                    <i>
                        <input type="number" placeholder=" Train Number" name = "tno" required class="one">
                    </i>
                </div>

                <div class="input-box2" id="date">
                    <i>
                        <input type="date" name = "date" class="two">
                    </i>
                </div>
                

            <div class="btn">
                <i>
                    <a href="cancel_display.php" style="align-items: center; width: 100px; margin-top: 20px; padding: 5px;
                            background-color: whitesmoke;text-align: center; font-weight: bold; box-sizing: border-box;
                            border: 2px solid black; border-radius: 5px; outline: none; color: black; 
                            text-decoration: none; ">Updatation</a>
                </i>
                <button type="submit">Announce</button class="three">
            </div>
            
        </form>
        
            
    </div>
    
</body>
</html>

<?php

$tname = $_GET['tname'];
$tno = $_GET['tno'];
$id = $_GET['id'];
$date = $_GET['date'];




$query1 = "INSERT INTO cancel VALUES ('$tname', '$tno', '$id','$date')";

$data = mysqli_query($conn, $query1);

if($data){
    echo "Data inserted into Database";
}
else{
    echo "Data connection failed.";
}

?>