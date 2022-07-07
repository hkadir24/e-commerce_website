<?php

include "config.php";

if(isset($_POST['seller_id'])){

    $seller_id = $_POST['seller_id'];
    $fp_id = $_POST['fp_id'];
    

    echo $seller_id . " " . $seller_id;

    $sql_statement = "INSERT INTO orders(seller_id, fp_id)
                        VALUES ('$seller_id', '$fp_id')";

    mysqli_query($db, $sql_statement);

    header ("Location: index.php");
}

else {
    echo "The form is not set!";
}
?>