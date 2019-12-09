<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
    </head>

    <body>
        <div class = "container">
            <?php
                if(isset($_COOKIE['last5'])){
                    $cookie = $_COOKIE['last5'];
                    $cookie =  substr($cookie, 1,-1);
                    $cookie = str_replace('"','',$cookie);
                    $cookie = explode(",",$cookie);
                    $servername = "manavraj9663703.ipagemysql.com";
                    $username = "jarvis";
                    $password = "pass";
                    $dbname = "272db";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $id = $_GET['product'];
                    $sql = "SELECT * FROM products WHERE id IN (". implode(',', array_map('intval', $cookie)).")";
                    $result = $conn->query($sql);
            
                    if(count($cookie) <5 ){
                        echo ("You have only visited ".count($cookie)." product pages till now.");
                        echo ("<br><br>");
                    }
                    $conn->close();
                    if(true){
                        echo(
                            "<table class ='table table-condensed'>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                </tr>"
                        )   ;
    
                        $result->data_seek(0);
                        while($row = $result->fetch_assoc()) {
                            echo(
                                "<tr>
                                    <td><img src='./productImages/".$row["id"].".jpeg' alt='product pic' width ='150' height = '100'/></td>
                                    <td>".$row["id"]."</td>
                                    <td>".$row["name"]."</td>
                                    <td>".$row["description"]."</td>
                                </tr>"
                            );   
                        }
    
                        echo(
                            "</table>"
                        );
                        
                    }else{
                        echo ("No Products to display");
                    }
                }else{
                    echo "You haven't visited any products yet.";
                }
                       
                
                
            ?>
        </div>
    </body>
</html>