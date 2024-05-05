<?php

    include("connection.php");
    error_reporting(0);

    $webpage_home = array("Arrival", "Departure", "Cancel", "Delay", "Text-to-Speech", "Log-out", "About us", 
    "Select the announcement  to get update of particular update..");

    $translation_home = [];

    $i = 0;

    $query_fetch = "SELECT * FROM languageonly ORDER BY id DESC LIMIT 1";
            $result = $conn->query($query_fetch);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $lang = $row["language"];    
                }
            }
            else{
                echo "No records found";
            }
    
if($lang == "Hindi"){
    for($x=0; $x<8; $x++){
    $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://translate-plus.p.rapidapi.com/translate",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode([
                    'text' => "{$webpage_home[$x]}",
                    'source' => 'en',
                    'target' => 'hi'
                ]),

                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: translate-plus.p.rapidapi.com",
                    "X-RapidAPI-Key: da414f99eamshe0eeddb1df633d8p16c66cjsn7b6b51a5b5f8",
                    "content-type: application/json"
                ],
            ]);
        

            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            /*if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                echo $response;
            }*/
            // Assuming you have the JSON output stored in a variable $response
            $data = json_decode($response, true);  // Decode JSON into an associative array
            
            // Check if decoding was successful
            if (json_last_error() === JSON_ERROR_NONE) {
              // Extract the translation text
              $translation_home[$i] = $data['translations']['translation'];
              $i++;
              /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
              echo "<h2>$translation</h2>";
              echo "</div>";*/
              //echo $translation;  // Output the translated text
            } else {
              echo "Error: Could not decode JSON response.";
            }
    }
}

else if($lang == "Marathi"){
    for($x=0; $x<8; $x++){
        $curl = curl_init();
    
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://translate-plus.p.rapidapi.com/translate",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode([
                        'text' => "{$webpage_home[$x]}",
                        'source' => 'en',
                        'target' => 'mr'
                    ]),
    
                    CURLOPT_HTTPHEADER => [
                        "X-RapidAPI-Host: translate-plus.p.rapidapi.com",
                        "X-RapidAPI-Key: da414f99eamshe0eeddb1df633d8p16c66cjsn7b6b51a5b5f8",
                        "content-type: application/json"
                    ],
                ]);
            
    
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                curl_close($curl);
                
                /*if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    echo $response;
                }*/
                // Assuming you have the JSON output stored in a variable $response
                $data = json_decode($response, true);  // Decode JSON into an associative array
                
                // Check if decoding was successful
                if (json_last_error() === JSON_ERROR_NONE) {
                  // Extract the translation text
                  $translation_home[$i] = $data['translations']['translation'];
                  $i++;
                  /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
                  echo "<h2>$translation</h2>";
                  echo "</div>";*/
                  //echo $translation;  // Output the translated text
                } else {
                  echo "Error: Could not decode JSON response.";
                }
        }
}

else if($lang == "Gujarathi"){
    for($x=0; $x<8; $x++){
        $curl = curl_init();
    
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://translate-plus.p.rapidapi.com/translate",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode([
                        'text' => "{$webpage_home[$x]}",
                        'source' => 'en',
                        'target' => 'gu'
                    ]),
    
                    CURLOPT_HTTPHEADER => [
                        "X-RapidAPI-Host: translate-plus.p.rapidapi.com",
                        "X-RapidAPI-Key: da414f99eamshe0eeddb1df633d8p16c66cjsn7b6b51a5b5f8",
                        "content-type: application/json"
                    ],
                ]);
            
    
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                curl_close($curl);
                
                /*if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    echo $response;
                }*/
                // Assuming you have the JSON output stored in a variable $response
                $data = json_decode($response, true);  // Decode JSON into an associative array
                
                // Check if decoding was successful
                if (json_last_error() === JSON_ERROR_NONE) {
                  // Extract the translation text
                  $translation_home[$i] = $data['translations']['translation'];
                  $i++;
                  /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
                  echo "<h2>$translation</h2>";
                  echo "</div>";*/
                  //echo $translation;  // Output the translated text
                } else {
                  echo "Error: Could not decode JSON response.";
                }
        }
}

else if($lang == "Japanese"){
    for($x=0; $x<8; $x++){
        $curl = curl_init();
    
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://translate-plus.p.rapidapi.com/translate",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode([
                        'text' => "{$webpage_home[$x]}",
                        'source' => 'en',
                        'target' => 'ja'
                    ]),
    
                    CURLOPT_HTTPHEADER => [
                        "X-RapidAPI-Host: translate-plus.p.rapidapi.com",
                        "X-RapidAPI-Key: da414f99eamshe0eeddb1df633d8p16c66cjsn7b6b51a5b5f8",
                        "content-type: application/json"
                    ],
                ]);
            
    
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                curl_close($curl);
                
                /*if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    echo $response;
                }*/
                // Assuming you have the JSON output stored in a variable $response
                $data = json_decode($response, true);  // Decode JSON into an associative array
                
                // Check if decoding was successful
                if (json_last_error() === JSON_ERROR_NONE) {
                  // Extract the translation text
                  $translation_home[$i] = $data['translations']['translation'];
                  $i++;
                  /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
                  echo "<h2>$translation</h2>";
                  echo "</div>";*/
                  //echo $translation;  // Output the translated text
                } else {
                    echo "Error: Could not decode JSON response.";
                  }
                
            }
}
        
else if($lang == "English"){
    for($x=0; $x<8; $x++){
        $curl = curl_init();
    
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://translate-plus.p.rapidapi.com/translate",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => json_encode([
                        'text' => "{$webpage_home[$x]}",
                        'source' => 'en',
                        'target' => 'en'
                    ]),
    
                    CURLOPT_HTTPHEADER => [
                        "X-RapidAPI-Host: translate-plus.p.rapidapi.com",
                        "X-RapidAPI-Key: da414f99eamshe0eeddb1df633d8p16c66cjsn7b6b51a5b5f8",
                        "content-type: application/json"
                    ],
                ]);
            
    
                $response = curl_exec($curl);
                $err = curl_error($curl);
                
                curl_close($curl);
                
                /*if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    echo $response;
                }*/
                // Assuming you have the JSON output stored in a variable $response
                $data = json_decode($response, true);  // Decode JSON into an associative array
                
                // Check if decoding was successful
                if (json_last_error() === JSON_ERROR_NONE) {
                  // Extract the translation text
                  $translation_home[$i] = $data['translations']['translation'];
                  $i++;
                  /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
                  echo "<h2>$translation</h2>";
                  echo "</div>";*/
                  //echo $translation;  // Output the translated text
                }
                 else {
                  echo "Error: Could not decode JSON response.";
                }
        }
}

else{
    echo "Connection Failed Try again";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserHome</title>
    <link rel="stylesheet" href="userhome.css">
</head>
<body>
    <header>
        <img src="railway.png" alt="" class="image">
        <h1>I N D I A N &nbsp  R A I L W A Y S</h1>
        <div class="btn">
            <ul>
                <li><input type="submit" value=<?php echo "$translation_home[5]"; ?> ></li>
                <li><input type="submit" value=<?php echo "$translation_home[6]"; ?> ></li>
            <ul>
        </div>
        
    </header> 
    <div class="announce">
        <h4>
            <marquee direction="left" width="1366">
            <?php echo "$translation_home[7]"; ?>
            </marquee>
        </h4>
    </div>
    <nav>
        <a href="userarrival.php"><?php echo "$translation_home[0]"; ?></a>
        <a href="userdeparature.php"><?php echo "$translation_home[1]"; ?></a>
        <a href="ucancel.php"><?php echo "$translation_home[2]"; ?></a>
        <a href="udelay.php"><?php echo "$translation_home[3]"; ?></a>
        <a href="txt.html"><?php echo "$translation_home[4]"; ?></a>
    </nav>


</body>
</html>
