<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userarrival</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>

        <div class="header">
            <?php
                error_reporting(0);
                include("connection.php");
                $query = "SELECT * FROM announce ORDER BY id DESC LIMIT 1";
                $result = $conn->query($query);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<h2>";
                        echo $row["tname"];
                        echo " with train number ";
                        echo $row["tno"];
                        echo " will arrive on platform number ";
                        echo $row["pno"];
                        echo " at ";
                        echo $row["time"];
                        echo "</h2";    
                    }
            }
                else{
                    echo "No records found";
                }
                $conn->close();
            ?>
        </div>



        



    <div class="second" >
        <?php
            error_reporting(0);
            include("connection.php");
            $query = "SELECT * FROM announce ORDER BY id DESC LIMIT 1";
            $result = $conn->query($query);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $tname = $row["tname"];
                    $tno = $row["tno"];
                    $pno = $row["pno"];
                    $time = $row["time"];    
                }
            }
            else{
                echo "No records found";
            }
            $conn->close();

            error_reporting(0);
            include("connection.php");
            $query_fetch = "SELECT * FROM languageonly ORDER BY id DESC LIMIT 1";
            $result = $conn->query($query_fetch);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $language = $row["language"];    
                }
            }
            else{
                echo "No records found";
            }
            $conn->close();

if($language == "Marathi"){
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
                    'text' => "{$tname}  with train number {$tno} will arrive on platform number {$pno}  at {$time}.",
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
              $translation = $data['translations']['translation'];
              echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
              echo "<h2>$translation</h2>";
              echo "</div>";
              //echo $translation;  // Output the translated text
            } else {
              echo "Error: Could not decode JSON response.";
            }
}

        // else condition for HINDI language
else if($language == "Hindi"){
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
                    'text' => "{$tname}  with train number {$tno} will arrive on platform number {$pno}  at {$time}.",
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
              $translation = $data['translations']['translation'];
              echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
              echo "<h2>$translation</h2>";
              echo "</div>";
              //echo $translation;  // Output the translated text
            } else {
              echo "Error: Could not decode JSON response.";
            }
}

        // Else condition for Japanese language
else if($language == "Japanese"){
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
                    'text' => "{$tname}  with train number {$tno} will arrive on platform number {$pno}  at {$time}.",
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
              $translation = $data['translations']['translation'];
              echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
              echo "<h2>$translation</h2>";
              echo "</div>";
              //echo $translation;  // Output the translated text
            } else {
              echo "Error: Could not decode JSON response.";
            }
}

        // Else condition for Gujarathi language
else if($language == "Gujarathi"){
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
                    'text' => "{$tname}  with train number {$tno} will arrive on platform number {$pno}  at {$time}.",
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
              $translation = $data['translations']['translation'];
              echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
              echo "<h2>$translation</h2>";
              echo "</div>";
              //echo $translation;  // Output the translated text
            } else {
              echo "Error: Could not decode JSON response.";
            }
}

else if($language == "English"){
    
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
            'text' => "{$tname}  with train number {$tno} will arrive on platform number {$pno}  at {$time}.",
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
      $translation = $data['translations']['translation'];
      echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
      echo "<h2>$translation</h2>";
      echo "</div>";
      //echo $translation;  // Output the translated text
    } else {
      echo "Error: Could not decode JSON response.";
    }
}


else{
    echo "Error";
}
        ?>
    </div>
</body>
</html>