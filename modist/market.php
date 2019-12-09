<?php

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, 'http://manavrajvanshi.com/common.php');
    $manavResult= curl_exec($curl);
    $manav = json_decode(
        $manavResult, true
    );
    curl_close($curl);

    echo "<br>";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, 'http://kpsjsuprojects.com/common_products.php');
    $karanResult = curl_exec($curl);
    $karan = json_decode(
        $karanResult, true
    );
    curl_close($curl);

    echo "<br>";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, 'http://farhanbhoraniya.com/products_json.php');
    $farhanResult = curl_exec($curl);
    $farhan = json_decode(
        $farhanResult, true
    );
    curl_close($curl);

    echo "<br>";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, 'http://yumbox.site/productjson.php');
    $kedarResult = curl_exec($curl);
    $kedar = json_decode(
        $kedarResult, true
    );
    curl_close($curl);

    echo "<br>";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, 'http://varshitbuilds.com/fwa1/popp.php');
    $varshitResult = curl_exec($curl);
    $varshit = json_decode(
        $varshitResult, true
    );
    curl_close($curl);

    //
    
    //print_r($karanResult);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
        <!-- Navbar (sit on top) -->
        <div class="w3-top">
            <div class="w3-bar w3-white w3-wide w3-padding w3-card">
                <a href="#" class="w3-bar-item w3-button"><b>MARXETPLACE</b></a>
                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-right w3-hide-small">
                <a href="./marketUserSection.php" class="w3-bar-item w3-button">USERS</a>
                </div>
            </div>
        </div>
        <div class = "container">
            <?php
                echo "Products<br>";    
    
                if(true){
                    echo(
                        "<table class ='table table-condensed'>
                            <tr>
                                <th>Product image</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                            </tr>"
                    )   ;


                    foreach( $manav as $item){
                        
                        echo(
                            "<tr>
                                <td><img src=".$item['image']. " alt='product pic' width ='150' height = '100'/></td>
                                <td>".$item["id"]."</td>
                                <td>".$item["name"]."</td>
                                <td>".$item["description"]."</td>
                            </tr>"
                        );   
                    }

                    foreach( $karan as $item){
                        
                        echo(
                            "<tr>
                                <td><img src=".$item['image']. " alt='product pic' width ='150' height = '100'/></td>
                                <td>".$item["id"]."</td>
                                <td>".$item["name"]."</td>
                                <td>".$item["description"]."</td>
                            </tr>"
                        );   
                    }
                    
                    foreach( $farhan as $item){
                        
                        echo(
                            "<tr>
                                <td><img src=".$item['image']. " alt='product pic' width ='150' height = '100'/></td>
                                <td>".$item["id"]."</td>
                                <td>".$item["name"]."</td>
                                <td>".$item["description"]."</td>
                            </tr>"
                        );   
                    }

                    foreach( $kedar as $item){
                        
                        echo(
                            "<tr>
                                <td><img src=".$item['image']. " alt='product pic' width ='150' height = '100'/></td>
                                <td>".$item["id"]."</td>
                                <td>".$item["name"]."</td>
                                <td>".$item["description"]."</td>
                            </tr>"
                        );   
                    }

                    foreach( $varshit as $item){
                        
                        echo(
                            "<tr>
                                <td><img src=".$item['image']. " alt='product pic' width ='150' height = '100'/></td>
                                <td>".$item["id"]."</td>
                                <td>".$item["name"]."</td>
                                <td>".$item["description"]."</td>
                            </tr>"
                        );   
                    }
                    
                  
                    echo(
                        "</table>"
                    );

                    
                    
                }else{
                    echo ("No Products to display");
                }
                
            ?>
        </div>
    </body>
</html>