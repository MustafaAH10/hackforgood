<?php

$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Get form data
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$selected_languages = implode(", ", $_POST["selected_languages"]);
$specialities = implode(", ", $_POST["selected_options"]);
$experience = $_POST["experience"];
$certificate = $_POST["Certificate"];
$description = $_POST["description"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO practitioners (first_name, last_name, dob, gender, languages, specialities, experience, certificate, description, phone, email, password) 
VALUES ('$first_name', '$last_name', '$dob', '$gender', '$selected_languages', '$specialities', '$experience', '$certificate', '$description', '$phone', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
