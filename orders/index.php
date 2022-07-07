<html>
<head>
    <title>Shopping Website</title>
    <style>
    .button {
      background-color: #590d22; 
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      margin: 6px 2px;
      cursor: pointer;
    }
    .button1 {border-radius: 30px;} /* Button Tasarımı */
    .button1 {font-size: 12px;}
    .button1:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}

    
    </style>
</head>

<body>
<b>ORDERS TABLE</b><br><br>

<?php
include "print_order.php";
?>
<br>

<form action = "create_order.php" method = "POST">
<input type = "text" name = "seller_id" placeholder = "Type the seller id"><br>
    <input type = "text" name = "fp_id" placeholder = "Type the final product id"><br>
    <button>insert</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE ORDER YOU WANT TO DELETE AND CLICK 'delete' BUTTON<b>
<br><br>
<form action = "delete_order.php" method = "POST">
    <select name = "order_id">
    <?php
    include "config.php";
    $sql_command = "SELECT order_id FROM orders";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['order_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button>delete</button>
</form>
</div>
</body>

</html>
