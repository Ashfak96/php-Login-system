<?php

    include 'connect_to_db.php';
    $conn = OpenCon();

    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM login WHERE username = '".$username."' AND pass = '".$password."'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    if ($row == NULL) {
        echo "incorrect";
        die();
    }
    

    echo "Welcome ". $row["username"];
    /*
    while($row = mysqli_fetch_assoc($result)){
        if ($row["username"] == $username && $row["pass"] == $password) { 
            echo "Success";
        }
        else {
            echo "Incorrect";
        }
    }
    */


?>
<html>
    <body>
        <A href="index.php">Go Back</a>
    </body>
</html>