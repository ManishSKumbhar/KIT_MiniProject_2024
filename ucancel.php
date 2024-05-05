<?php

    include("connection.php");
    error_reporting(0);

    $webpage_home = array("Date", "Train Name", "Train Number", "Serial Number", "Train", "Cancelled", "Details");

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
    for($x=0; $x<7; $x++){
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
    for($x=0; $x<7; $x++){
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
    for($x=0; $x<7; $x++){
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
    for($x=0; $x<7; $x++){
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
    for($x=0; $x<7; $x++){
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
    <title>User Cancel</title>
    <link rel="stylesheet" href="udelay.css">
</head>
<body>
    <form>
        <header>
            <div class="head">
                <?php
                echo"<h2 id='headline'>$translation_home[4] &nbsp $translation_home[5] 
                        &nbsp $translation_home[6]</h2>";
                ?>
            </div>
        </header>
        
        <div class="tb">
            <table>
                <?php
                    echo"<tr>
                        <th>$translation_home[3]</th>
                        <th>$translation_home[0]</th>
                        <th>$translation_home[1]</th>
                        <th>$translation_home[2]</th>
                        </tr>";
                ?>
                    <?php
                        include("connection.php");
                        error_reporting(0);
                        $sql = "SELECT * FROM cancel";
                        $result = mysqli_query($conn, $sql);

                // Check if query execution was successful
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }


                // Loop through each row in the result set and print data
          // Counter for Sr. no.
            $i=1;
                while ($row = mysqli_fetch_assoc($result)) {

                    $train=$row['tname'];

                    if($lang == "Hindi"){
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
                                        'text' => "$train",
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
                                  $trans_train = $data['translations']['translation'];
                                  /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
                                  echo "<h2>$translation</h2>";
                                  echo "</div>";*/
                                  //echo $translation;  // Output the translated text
                                } else {
                                  echo "Error: Could not decode JSON response.";
                                }
                    }

                    else if($lang == "Marathi"){
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
                                            'text' => "$train",
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
                                      $trans_train = $data['translations']['translation'];
                                      /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
                                      echo "<h2>$translation</h2>";
                                      echo "</div>";*/
                                      //echo $translation;  // Output the translated text
                                    } else {
                                      echo "Error: Could not decode JSON response.";
                                    }
                    }
                    
                    else if($lang == "Gujarathi"){
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
                                            'text' => "$train",
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
                                      $trans_train = $data['translations']['translation'];
                                      /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
                                      echo "<h2>$translation</h2>";
                                      echo "</div>";*/
                                      //echo $translation;  // Output the translated text
                                    } else {
                                      echo "Error: Could not decode JSON response.";
                                    }
                    }
                    

                    else if($lang == "Japanese"){
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
                                            'text' => "$train",
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
                                      $trans_train = $data['translations']['translation'];
                                      /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
                                      echo "<h2>$translation</h2>";
                                      echo "</div>";*/
                                      //echo $translation;  // Output the translated text
                                    } else {
                                        echo "Error: Could not decode JSON response.";
                                      }
                                    
                    }
                                                
                    else if($lang == "English"){
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
                                            'text' => "$train",
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
                                      $trans_train = $data['translations']['translation'];
                                      /*echo "<div style='text-align: center; justify-content: center; align-items: center;'>";
                                      echo "<h2>$translation</h2>";
                                      echo "</div>";*/
                                      //echo $translation;  // Output the translated text
                                    }
                                     else {
                                      echo "Error: Could not decode JSON response.";
                                    }
                    }
                                        
                    else{
                        echo "Connection Failed Try again";
                    }

                    echo "<tr>";
                    echo "<td>" . $i . "</td>";  // Print Sr. no.
                    echo "<td>". $row['date'] ."</td>"; // Prints date
                    echo "<td>" . $trans_train . "</td>";  // Replace 'Train Name' with actual column name
                    echo "<td>" . $row['tno'] . "</td>";  // Replace 'Train no.' with actual column name
                    echo "</tr>";

                    $i++;
                }


                // Close database connection
                mysqli_close($conn);

                    ?>
           </table>
        </div>
        
    </form>
</body>
</html>  