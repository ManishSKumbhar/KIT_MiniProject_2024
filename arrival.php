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
    <link rel="stylesheet" href="arrival.css">
</head>
<body>
    <div class="wrap">
        <form action="arrival.php">
                <div class="input-box" id="tname">
                    <i>
                        <input type="text" placeholder=" Train Name" name ="tname" required class="one">
                    </i>
                </div>
                
                <div class="input-box" id="tnum">
                    <i>
                        <input type="number" placeholder=" Train Number" name="tno" required class="one">
                    </i>
                </div>
                <div class="input-box2" id="Platform">
                    <i>
                        <input type="number" placeholder="Platform number" name="pno" required class="two">
                    </i>
                </div>
                <div class="input-box2" id="inc_id">
                    <i>
                        <input type="number" placeholder="Id incremental" name="id" required class="two">
                    </i>
                </div>
                <div class="input-box2" id="time">
                    <i>
                        <input type="time" class="two" name="time">
                    </i>
                </div>
            <div class="btn">
                <i>
                    <button type="reset">Reset</button class="three">
                </i>
                <button type = "submit">Announce</button class="three">
            </div>
        </form>
        
            
    </div>
    
</body>
</html>

<?php

$tname = $_GET['tname'];
$tno = $_GET['tno'];
$pno = $_GET['pno'];
$id = $_GET['id'];
$time = $_GET['time'];


$query = "INSERT INTO announce VALUES ('$tname', '$tno', '$pno', '$id','$time')";

$data = mysqli_query($conn, $query);

if($data){
    echo "Data inserted into Database";
}
else{
    echo "Data connection failed.";
}

?>