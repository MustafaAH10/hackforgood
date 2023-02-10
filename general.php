<?php
    if(isset($_GET["selected_options"])) {
        $selected_options = $_GET['selected_options'];
    }    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient";
    
    
    $con =mysqli_connect($host, $username, $password, $dbname, 3307);

    
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    $t = "";
    if($selected_options == 'General Practitioner'){
        $t = 'option1';
    }

    if($selected_options == 'Neurology'){
        $t = 'option2';
    }
    if($selected_options == 'Urology'){
        $t = 'option3';
    }
    if($selected_options == 'Cardiology'){
        $t = 'option4';
    }
    if($selected_options == 'Paediatrics'){
        $t = 'option5';
    }
    if($selected_options == 'Obs&Gyn'){
        $t = 'option6';
    }
    if($selected_options == 'Geriatrics'){
        $t = 'option7';
    }
    // echo $selected_options . "<br>" . $t;

    
    $sql = "SELECT first_name, last_name, gender FROM practitioner_table WHERE selected_options = '$t'";
    // WHERE selected_options = '$selected_options'"
    $rs = mysqli_query($con, $sql);
    if(! $rs ) {
        die('Could not get data: ' . mysql_error($con));
    }
    while($row = mysqli_fetch_assoc($rs)) {
        echo "NAME :{$row['first_name']} ". 
        "{$row['last_name']} <br> ".
        "SPECIALIZATION: {$row['selected_options']}  <br>".
        "YEARS OF EXPERIENCE: {$row['experience']}  <br>".
        "GENDER : {$row['gender']} <br> ".
        "CONTACT : {$row['phone']} <br> ".
        "EMAIL : {$row['email']} <br> ".
        "--------------------------------<br>";
    } 

    echo "Fetched data successfully\n";

    mysqli_close($con);

?>