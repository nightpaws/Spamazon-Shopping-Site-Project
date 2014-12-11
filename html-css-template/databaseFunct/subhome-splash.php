<?php
    include('databaseconnection.php');

    //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM cs312_stock WHERE category LIKE '%$cat%' ORDER BY rand() LIMIT 1");
    
    if (!$result) { // add this check.
        echo "Seems we have no big splash items to show your. Thats weird!";
        die();
    }
    

    //fetch tha data from the database 
    while($row = mysql_fetch_array($result)):

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
            <?php if($reversed):
                    include('page-elements/product/product-extralarge-reversed.php');
                else:
                    include('page-elements/product/product-extralarge.php');
                endif;
            ?>

        </div>

    <?php endwhile;
    //close the connection
    mysql_close($dbhandle);
?>
