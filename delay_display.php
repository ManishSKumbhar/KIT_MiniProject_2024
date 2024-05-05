<?php

error_reporting(E_ALL); // Enable error reporting for debugging

include("connection.php");

$query = "SELECT * FROM delay ORDER BY id LIMIT 1000";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  ?>
  <h2 align="center"><mark> Delay records </mark></h2>
  <table border=3 cellspacing=10 width="100%">
    <tr>
      <th width="10%">Sr. No.</th>
      <th width="25%">Train Name</th>
      <th width="10%">Train Number</th>
      <th width="10%">Delay</th>
      <th width="20%">Original Time</th>
      <th width="25%">Operations</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['tname'] . "</td>
            <td>" . $row['tno'] . "</td>
            <td>" . $row['delay_t'] . "</td>
            <td>" . $row['oritime'] . "</td>
            <td>
              <form action='delete.php' method='post'>
                <input type='hidden' name='id' value='" . $row['id'] . "'>  <button type='submit'>DELETE</button>
              </form>
            </td>
          </tr>";
    }
  } else {
    echo "No records found";
  }
  $conn->close();

  ?>
</table>
