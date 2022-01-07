<?php    
    $host = 'localhost';
    $DB_user = 'root';
    $DB_passwd = 'Nemeziz_1605$';

    $con = mysqli_connect($host, $DB_user, $DB_passwd, "wt_ese");

    if (!$con) {
        die("Error connecting to database: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $DOB = $_POST['DOB'];
    }

    $query = 'INSERT INTO users (firstname, lastname, email, password, DOB) values(' .
        "'" . $firstname . "'," .
        "'" . $lastname . "'," .
        '"'. $email . '",' .
        '"'. $password . '",' .
        '"'. $DOB . '"' .
        ')';

    echo "<br>" . $query . "<br>";
    $result = mysqli_query($con, $query);

    if(!$result) {
        echo "There was some error while inserting the data: " . mysqli_error($con);
    }
    else {
        echo "You have been registered on our website!";
        sleep(4);
        header('Location: http://localhost/WT-Project/home.html');
    }
?>