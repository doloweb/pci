<?php
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	    
    <script language="javascript">
	
	var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose;
		</script>
    
</head>
<body>
     <table width="500" align="center">
<tr>
  <form name=f1 method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table align="center" width="450px" height="155" border="0" cellpadding="0" cellspacing="0">
     <tr align="center">
       <td width="400px"><span style="margin:10px;">USERNAME:</span><INPUT type="text" name="name" /></td><BR />
     </tr>
             <TR align="center"><td height="62"> <span style="margin:10px;">PASSWORD:</span><INPUT type="password" name="password" /></td></TR>
              <tr align="center"> <td class="LOGIN"><input type="submit" name="submit" value="LOGIN" />
               <?php             
			   $con=mysql_connect("localhost","root","");
			  $dat=mysql_select_db("loginform",$con);
			  	   if(isset($_POST['submit']))
				   {					   
					   if(!$_POST['name']=='name'|| !$_POST['password']=='password')
					   
					   {
						   die("username password incorrect");
					   }
					   
			 $name=$_POST['name'];
			  //$myusername=$_POST['username']; 
			   $password=$_POST['password'];
				 $sql="SELECT  * FROM login WHERE name='$name' and password='$password'";
	           $res=mysql_query($sql);
                 $count=mysql_num_rows($res);  
				    
				  if($count==1)
				   {
					   print "Correct";
					   header("location:login.php");
				   }
				   else{
					   header("location:fetch.php");
					   echo "Incorrect login"; 
				   }
				   
				   }
				   mysql_close($con);
				   ob_flush();
			  ?>
                           
      </td></tr>
          
                  
              </table>
           
      

 </form>     
        
			</div>
</body>
</html>