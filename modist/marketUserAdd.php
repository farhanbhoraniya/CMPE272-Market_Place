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
    $sql = "INSERT INTO marketUsers ( name, email, password) 
    VALUES ('$name', '$email', '$password')" ;
    if ($conn->query($sql) === TRUE) {
        $_SESSION["userAdded"] = "User Added Sucessfully.";
        header("location: marketUserSection.php");
    } else {
        $_SESSION["userAdded"] = "User Not Added.";
        header("location: marketUserSection.php");
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
