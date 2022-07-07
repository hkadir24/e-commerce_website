<?php
include "config.php";

if(isset($_POST['order_id'])){

    $order_id = $_POST['order_id'];

    $sql_statement = "DELETE FROM orders WHERE order_id = $order_id";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>