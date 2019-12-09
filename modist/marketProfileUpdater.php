<?php
    session_start();
    $servername = "manavraj9663703.ipagemysql.com";
    $username = "jarvis";
    $password = "pass";
    $dbname = "272db";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    foreach($_POST as $var => $val){
        $$var = $val;
    }

    $email = $_SESSION['email'];
    $sql = "UPDATE marketUsers SET name = '$name', password = '$password' WHERE email = '$email'" ;
    if ($conn->query($sql) === TRUE) {
        $_SESSION['name'] = $name;
        header("location: shop.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
