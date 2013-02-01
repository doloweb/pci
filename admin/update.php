<?php
 require('config.php'); 
 $evaluate = $_POST['evaluate'];
 $id = $_POST['id'];
 $result = mysql_query("UPDATE form SET evaluate='$evaluate' WHERE id=$id");
?>