<?php
    include('databaseconnection.php');

    $term = $_GET["term"];
    //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM cs312_stock WHERE name LIKE '%$term%'
        OR category LIKE '%$term%' OR description LIKE '%$term%'");
    
    if ( mysql_num_rows($result) == 0) { // add this check.
        ?> <h3>No results found for your search, sowwie</h3> <?php
        die();
    }
    
    ?> <h3>Results for your search of <?php echo $term; ?>:</h3> <?php

    echo "<br><br>";
    //fetch tha data from the database 
    while ($row = mysql_fetch_array($result)): 

        $name = $row{"name"};
        $size = $row{"size"};
        $colour = $row{"colour"};
        $category = $row{"category"};
        $description = $row{"description"};
        $quantity = $row{"quantity"}; 
        $price = $row{"price"};
        $image = $row{"image"};

        ?>

        <div class="item">
            <?php include('page-elements/product/product-medium-search.php'); 
            echo "<br>";?>
        </div>

    <?php endwhile;
    //close the connection
    mysql_close($dbhandle);
?>
