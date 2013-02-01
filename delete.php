<?php
$con = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
mysql_select_db("national", $con);


$id = $_POST['id'];

$sql = "DELETE form".
       "WHERE id = $id" ;

mysql_select_db('national');

$retval = mysql_query( $sql, $con );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";





 /*$result = mysql_query("DELETE  from form WHERE id=$id");*/
 
 /*$rowID = "15";
   $query = "DELETE FROM form WHERE ID='$rowID'";
   $result = mysql_query($query);

   if ((mysql_affected_rows() == 0) || mysql_affected_rows() == -1) {
        echo "<p>some of the selected items deleted.</p>";
        exit;
   }*/
  
 
/*$result=mysql_query("select * from form");

mysql_query("DELETE  from form WHERE rows='$result")
or die(mysql_error());
*/


mysql_close($con);

?>
</body>
</html>