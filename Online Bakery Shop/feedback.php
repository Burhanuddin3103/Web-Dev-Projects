<?php    
    $host = 'localhost';
    $DB_user = 'root';
    $DB_passwd = 'Nemeziz_1605$';

    $con = mysqli_connect($host, $DB_user, $DB_passwd, "wt_ese");

    if (!$con) {
        die("Error connecting to database: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $feedback = $_POST['feedback'];
    }

    $query = 'INSERT INTO feedback (name, email, phone, feedback) values(' .
        "'" . $name . "', " .
        "'" . $email . "', " .
        "'" . $phone . "', " .
        "'" . $feedback . "'" .
        ')';

    echo "<br>" . $query . "<br>";
    $result = mysqli_query($con, $query);

    if(!$result) {
        echo "There was some error while inserting the data: " . mysqli_error($con);
    }
    else {
        echo "Feedback Received!";
        sleep(4);
        header('Location: http://localhost/WT-Project/home.html');
    }
?>