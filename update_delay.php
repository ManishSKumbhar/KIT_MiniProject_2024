<?php
    include("connection.php");
    error_reporting(0);

    $id = $_GET['id'];
    $query = "SELECT * FROM delay WHERE id = '$id'";
            $result = $conn->query($query);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $tna = $row["tname"];
                    $tnu = $row["tno"];
                    $del = $row["delay_t"];
                    $ot = $row["oritime"];    
                }
            }
            else{
                echo "No records found";
            }
            $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delay Update </title>
    <link rel="stylesheet" href="delay.css">
</head>
<body>
    <div class="wrap">
        <form action="">
                <div class="input-box" id="tname">
                    <i>
                        <input type="text" placeholder=" Train Name" value="<?php echo $tna ?>" name = "tname" required class="one">
                    </i>
                </div>
                
                <div class="input-box" id="tnum">
                    <i>
                        <input type="number" placeholder=" Train Number" value="<?php echo $tnu ?>" name = "tno" required class="one">
                    </i>
                </div>

                <div class="input-box" id="cid">
                    <i>
                        <input type="number" placeholder="Delay Time" value="<?php echo $del ?>" name = "delay" required class="one">
                    </i>
                </div>

                <div class="input-box2" id="time">
                    <i>
                        <input type="time" name = "time" value="<?php echo $ot ?>" class="two">
                    </i>
                </div>
            <div class="btn">
                <i>
                    <button type="reset">Reset</button class="three">
                </i>
                <button type="submit">Update</button class="three">
            </div>
        </form>
        
            
    </div>
    
</body>
</html>

<?php

$tname = $_GET['tname'];
$tno = $_GET['tno'];
$idelay = $_GET['delay'];
$time = $_GET['time'];

$query2 = "UPDATE delay SET 'tname'='$tname' , 'tno'='$tno' ,'delay_t'='$idelay' ,'oritime'='$time'";

$data = mysqli_query($conn, $query2);

if($data){
    echo "Record Updated";
}
else{
    echo "Data connection failed.";
}

?>