<?php
    
    include('databaseconnection.php');

    $result = mysql_query("SELECT cs312_order.date, cs312_orderItem.cs312_stockname FROM cs312_order, cs312_orderItem WHERE cs312_order.cs312_useremail = '$_COOKIE[$cookie_name]' AND cs312_order.id = cs312_orderItem.cs312_orderID AND cs312_order.date >= ( CURDATE() - INTERVAL 7 DAY )");

    if($result){
        while($row = mysql_fetch_array($result)){
            $date = $row{"date"};
            $name = $row{"cs312_stockname"};
?>
        <div class="order">
            <p>
                <a href="view-order.php"><?php echo $name; ?></a>
                <span> <?php echo $date; ?> </span>
            </p>
        </div>
<?php
        }
    } else{
        echo "No orders";
    }

    //close the connection
    mysql_close($dbhandle);
?>