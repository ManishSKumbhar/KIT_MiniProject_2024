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
    <link rel="stylesheet" href="delay.css">
</head>
<body>
    <div class="wrap">
        <form action="">
                <div class="input-box" id="tname">
                    <i>
                        <input type="text" placeholder=" Train Name" name = "tname" required class="one">
                    </i>
                </div>
                
                <div class="input-box" id="tnum">
                    <i>
                        <input type="text" placeholder=" Train Number" name = "tno" required class="one">
                    </i>
                </div>

                <div class="input-box" id="cid">
                    <i>
                        <input type="text" placeholder="Date" name = "date" required class="one">
                    </i>
                </div>

                <div class="input-box" id="cid">
                    <i>
                        <input type="number" placeholder="Delay Time" name = "cid" required class="one">
                    </i>
                </div>

                <div class="input-box2" id="time">
                    <i>
                        <input type="time" name = "time" class="two">
                    </i>
                </div>
            <div class="btn">
                <i>
                    <a href="delay_display.php" style="align-items: center; width: 100px; margin-top: 20px; padding: 5px;
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
$dtime = $_GET['cid'];
$time = $_GET['time'];
$dat = $_GET['date'];

$query2 = "INSERT INTO delay VALUES ('$tname', '$tno', NULL ,'$dtime','$time', '$dat')";

$data = mysqli_query($conn, $query2);

if($data){
    echo "Data inserted into Database";
}
else{
    echo "Data connection failed.";
}

?>