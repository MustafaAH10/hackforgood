<?php
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient";

    
    $con =mysqli_connect($host, $username, $password, $dbname, 3307);

    
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    
    $sql = "SELECT first_name, last_name, gender FROM practitioner_table";
    $rs = mysqli_query($con, $sql);
    if(! $rs ) {
        die('Could not get data: ' . mysql_error());
    }
    while($row = mysqli_fetch_assoc($rs)) {
        echo "NAME :{$row['first_name']} ". 
        "{$row['last_name']} <br> ".
        "GENDER : {$row['gender']} <br> ".
        "--------------------------------<br>";
    } 

    echo "Fetched data successfully\n";

    mysqli_close($con);

?>
