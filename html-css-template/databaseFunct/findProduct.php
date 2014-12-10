<?php
    
    include('databaseconnection.php');

    //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM cs312_stock WHERE name LIKE '%$item%' LIMIT 1;");
    
    if (!$result) { // add this check.
        ?> <h3>Product not found, sorry about that.</h3> <?php
        die();
    }

    //fetch tha data from the database 
    while ($row = mysql_fetch_array($result)){

        $name = $row{"name"};
        $size = $row{"size"};
        $colour = $row{"colour"};
        $category = $row{"category"};
        $description = $row{"description"};
        $quantity = $row{"quantity"}; 
        $price = $row{"price"};
        $image = $row{"image"};
    }

    //close the connection
    mysql_close($dbhandle);
?>
