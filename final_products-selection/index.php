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
<b>FINAL PRODUCT TABLE</b><br><br>

<?php
include "print_FPs.php";
?>
<br>

<form action = "create_FPs.php" method = "POST">
<input type = "text" name = "fp_name" placeholder = "Type final product name"><br>
    <input type = "text" name = "fp_cost" placeholder = "Type final product cost"><br>
    <input type = "text" name = "fp_stock" placeholder = "Type final product stock"><br><br>
    <button>insert</button><br>
</form>

<br><br><br>
<b>PLEASE SELECT THE ID OF THE FINAL PRODUCT YOU WANT TO DELETE AND CLİCK 'delete' BUTTON<b>
<br><br>
<form action = "delete_FPs.php" method = "POST">
    <select name = "fp_id">
    <?php
    include "config.php";
    $sql_command = "SELECT fp_id FROM final_products";
    $result = mysqli_query($db, $sql_command);
    while ($id_rows = mysqli_fetch_assoc($result)){
        $id = $id_rows['fp_id'];
        echo "<option value = $id>" .$id. "</option>";
    }
    ?>
    </select>
    <button>delete</button>
</form>
</div>
</body>

</html>
