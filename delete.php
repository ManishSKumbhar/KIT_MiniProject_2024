<?php

error_reporting(E_ALL); // Enable error reporting for debugging

include("connection.php");

$id = mysqli_real_escape_string($conn, $_POST['id']); // Sanitize ID from POST

$delete_query = "DELETE FROM delay WHERE id = $id";

if ($conn->query($delete_query) === TRUE) {
  echo "Record deleted successfully";
  header('Location: delay_display.php'); // Redirect back to main page
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
