<?php
    session_start();
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL, 'http://kpsjsuprojects.com/common_products.php');
    $manavResult= curl_exec($curl);
    $manav = json_decode(
        $manavResult, true
    );
// This is for product name
    function cmp($a, $b) {
        return strcmp($a["name"], $b["name"]);
    }
    usort($manav, "cmp");

// This is for price in descending order
//    usort($manav, function($a, $b) {
//        if($a['price']==$b['price']) return 0;
//        return $a['price'] < $b['price']?1:-1;
//    });

//    print_r($manav);
    curl_close($curl);

//    echo "<br>";

//    $curl = curl_init();
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($curl, CURLOPT_URL, 'http://kpsjsuprojects.com/common_products.php');
//    $karanResult = curl_exec($curl);
//    $karan = json_decode(
//        $karanResult, true
//    );
//    curl_close($curl);
//
//    echo "<br>";
//
//    $curl = curl_init();
//    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($curl, CURLOPT_URL, 'http://farhanbhoraniya.com/products_json.php');
//    $farhanResult = curl_exec($curl);
//    $farhan = json_decode(
//        $farhanResult, true
//    );
//    curl_close($curl);

?>

<!DOCTYPE html>
<html >
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
    </head>

    <body>
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