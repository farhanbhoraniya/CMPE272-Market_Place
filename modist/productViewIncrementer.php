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
    $id = $_GET['product'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);

    $visitCounter = 0;
    $viewCounter = 0;
    print_r($result);
    echo "<br>";
    while($row = $result->fetch_assoc()) {
        print_r($row);
        $visitCounter = $row['visits'] +1 ;
        $viewCounter = $row['views'] +1 ;
    }
    $sql = "UPDATE products SET visits = $visitCounter, views = $viewCounter WHERE id = $id";
    $useless = $conn->query($sql);
    $conn->close();

?>

