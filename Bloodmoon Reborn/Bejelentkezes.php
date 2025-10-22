<?php
session_start();
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
  $pass = $_POST["password"];

  $sql = "SELECT * FROM users WHERE username='$user'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row["password"])) {
      $_SESSION["user"] = $row["username"];
      header("Location: game.php");
    } else {
      echo "Hibás jelszó!";
    }
  } else {
    echo "Nincs ilyen felhasználó!";
  }
}
?>
