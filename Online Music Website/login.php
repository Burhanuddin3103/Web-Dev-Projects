<?php
    $host = 'localhost';
    $user = 'root';
    $DB_Password = '12345';

    // echo "Hello World\n";

    $con = mysqli_connect($host, $user, $DB_Password, "wtmusic");
    
    if (!$con) {
        die("Error connecting to database: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $email = $_GET['email'];
        $password = $_GET['password'];
    }

    $query = 'select * from users where email="' . $email . '" and password="' . $password . '"';
    echo $query;

    $result = mysqli_query($con, $query);

    if (!$result) {
        echo "User not found!";
    }
    else {
        while($row = mysqli_fetch_array($result))
        {
           print_r($row);
        } 
        echo "<br>Found user<br>Redirecting you to genres page...";
        // sleep(2);
        header("location: /WT-Project/genre.html");
    }
?>