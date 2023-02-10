<?php
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $dob = $_POST['dob'];
        $disabilities = $_POST['disabilities'];
        $description = $_POST['description'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        


    }
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient";

    
    $con =mysqli_connect($host, $username, $pwd, $dbname, 3307);

    
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO patient_table (first_name, last_name, dob, disabilities, description, phone, email, pwd) VALUES ('$first_name', '$last_name', '$dob', '$disabilities', '$description', '$phone', '$email', '$pwd')";
  
    
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    
    mysqli_close($con);

?>
