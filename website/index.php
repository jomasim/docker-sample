<html>
    <head>
    <title>Hello Docker</title>
    </head>
    <body>
        <ul>
        <?php
            $json = file_get_contents("http://product-service");
            $obj = json_decode($json);
            $products = $obj->products;
            foreach($products as $product){
               echo "<li>".$product."</li>";
            }
            ?>
        </ul>
    </body>
</html>