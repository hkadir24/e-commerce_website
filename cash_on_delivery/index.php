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
<b>CASH ON DELIVERY TABLE</b><br><br>

<?php
include "print_CODs.php";
?>
<br>

<form action = "create_CODs.php" method = "POST">
    <input type = "text" name = "payment_date" placeholder = "Type payment date"><br>
    <input type = "text" name = "payment_amount" placeholder = "Type payment amount"><br>
    <input type = "text" name = "currency_type" placeholder = "Type currency type"><br>
    <button>insert</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE PAYMENT YOU WANT TO DELETE AND CLICK 'delete' BUTTON<b>
<br><br>
<form action = "delete_CODs.php" method = "POST">
    <select name = "payment_id">
    <?php
    include "config.php";
    $sql_command = "SELECT payment_id FROM cash_on_delivery";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['payment_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button>delete</button>
</form>
</div>
</body>

</html>
