<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $selected_languages = $_POST['selected_languages'];
        $selected_options = $_POST['selected_options'];
        $experience = $_POST['experience'];
        $Certificate = $_POST['Certificate'];
        $description = $_POST['description'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient";

    // creating a connection
    $con = mysqli_connect($host, $username, $pwd, $dbname, 3307);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO practitioner_table (first_name, last_name, dob, gender, selected_languages, selected_options, experience, Certificate, description, phone, email, password) VALUES ('$fname', '$lname', '$dob', '$gender', '$selected_languages', '$selected_options', '$experience', '$Certificate', '$description', '$phone', '$email', '$pwd')";
    
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Practitioner signed up successfully";
    }

    // foreach($selected_languagues as $i){
    //     $selected_languages=$i;
    //     $sql = "INSERT INTO practitioner_table (selected_languages) VALUES ($selected_languages)";
    //     mysqli_query($con, $sql);
    // }

    // foreach($selected_options as $i){
    //     $selected_options=$i;
    //     $sql = "INSERT INTO practitioner_table (selected_options) VALUES ($selected_options)";
    //     mysqli_query($con, $sql);
    // }



  
    // close connection
    mysqli_close($con);

?>