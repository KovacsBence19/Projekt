<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodmoon_demo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Kapcsolódási hiba: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $user = $_POST["username"];
  $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
  if ($conn->query($sql) === TRUE) {
    echo "Sikeres regisztráció!";
  } else {
    echo "Hiba: " . $conn->error;
  }
}
?>
