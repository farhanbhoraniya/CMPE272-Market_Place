<?php
    session_start();
?>
<?php
    $servername = "manavraj9663703.ipagemysql.com";
    $username = "jarvis";
    $password = "pass";
    $dbname = "272db";


    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    $conn->close();

    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        
        unset($r["visits"]);
        $rows[] = $r;
    }
    print json_encode($rows);
?>

