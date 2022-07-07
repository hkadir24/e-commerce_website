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
<b>CREDİT CARDS TABLE</b><br><br>

<?php
include "print_CCs.php";
?>
<br>

<form action = "create_CCs.php" method = "POST">
    <input type = "text" name = "card_id" placeholder = "Type card id (16 digits)"><br>
    <input type = "text" name = "card_type" placeholder = "Type card type"><br>
    <input type = "text" name = "security_code" placeholder = "Type security code (3 digits)"><br>
    <input type = "text" name = "card_exp_date" placeholder = "Type expiration date"><br><br>
    <input type = "text" name = "payment_date" placeholder = "Type payment date"><br>
    <input type = "text" name = "payment_amount" placeholder = "Type payment amount"><br>
    <button>insert</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE PAYMENT YOU WANT TO DELETE AND CLICK 'delete' BUTTON<b>
<br><br>
<form action = "delete_CCs.php" method = "POST">
    <select name = "payment_id">
    <?php
    include "config.php";
    $sql_command = "SELECT payment_id FROM credit_cards";
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
