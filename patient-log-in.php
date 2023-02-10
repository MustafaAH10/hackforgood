<?php

echo "Hello";


$email = $_POST["email"];
$password = $_POST["password"];

if ($email == "example@email.com" && $password == "password") {
  header("Location: listings.html");
  exit;
} else {
  echo "Invalid email or password. Please try again.";
}
?>
