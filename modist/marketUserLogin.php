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
    
    $sql = "SELECT * FROM marketUsers WHERE email = '$emailLogin' AND password = '$passwordLogin'" ;
    $result = $conn->query($sql);
    if($result->num_rows >= 1){
        $row = $result->fetch_assoc();
        //echo "Logged Inn <br>";
        $_SESSION["auth"] = "true";
        $_SESSION["name"] = $row['name'];
        $_SESSION["email"] = $row['email'];

        header("location: shop.php");
        // $result->data_seek(0);
        // while($row = $result->fetch_assoc()) {
        //     print_r($row);
        // }
    }else{
        $_SESSION["error"] = "Not Logged In";
        $_SESSION["auth"] = "false";
        header("location: marketLogin.php");
    }
    $conn->close();
?>
