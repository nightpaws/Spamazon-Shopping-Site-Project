<?php
    $username = "hwb12179";
    $password = "gichstsu";
    $hostname = "devweb2014.cis.strath.ac.uk"; 

    $term = $category;

    //connection to the database
    $dbhandle = mysql_connect($hostname, $username, $password) 
    or die("Unable to connect to MySQL");

    //select a database to work with
    $selected = mysql_select_db("hwb12179",$dbhandle) 
    or die("Could not select examples");

    //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM cs312_stock WHERE category LIKE '%$term%' AND name != '$name' ORDER BY rand() LIMIT 4");
    
    if(!$result){
    } else{
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

            <div>
                <?php include('page-elements/product/product-small.php');?> 
            </div>

        <?php endwhile;
    }
    
    //close the connection
    mysql_close($dbhandle);
?>
