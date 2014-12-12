<?php
    include('databaseconnection.php');

    $term = $_GET["term"];

    if(isset($_GET["startat"])){
        $startat = $_GET["startat"];
    }else{
        $startat = 0;
    }

    $pagination = false;
    $displayingPerPage = 10;

    //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM cs312_stock WHERE name LIKE '%$term%'
        OR category LIKE '%$term%' OR description LIKE '%$term%' GROUP BY(name)");
    
    //Check if anything is found
    if ( mysql_num_rows($result) == 0) { // add this check.
        ?> <h3>No results found for your search, Sorry!</h3> <?php
        die();
    }

    //Paginate?
    if (mysql_num_rows($result) > $displayingPerPage ){
        $pagination=true;
    }
    
    ?> <h3>Results for your search for <?php echo $term; ?>:</h3> <?php

    echo "<br><br>";
    $current = 0;
    //fetch the data from the database 
    while ($row = mysql_fetch_array($result)): 

        if($pagination == true){
            $display = false;
            if($current >= $startat && $current < ($startat + $displayingPerPage)){
                $display = true;
            }
            $current++;
        }else{
            $display = true;
        }

        if($display):
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
                <?php include('page-elements/product/product-medium-search.php');?>
            </div>
    <?php endif;

    endwhile;
    //close the connection
    mysql_close($dbhandle);
?>
