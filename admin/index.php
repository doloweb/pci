<?php
	require('config.php');
	$msg = "";
	if( isset( $_POST ) ) {
		if( "" != trim( $_POST['username'] ) and "" != trim( $_POST['adminpassword'] ) ) {
			
			$username = $_POST['username'];
			$password = md5($_POST['adminpassword']);
			
			$query = "SELECT id, username, password 
						FROM loginform 
						WHERE username='{$username}' 
						AND password='{$password}'";
			$result = mysql_query($query);
			if( $result )
				if( 0 < mysql_num_rows( $result ) )  {
					header('Location:fetch.php');
					while( $row = mysql_fetch_assoc( $result ) )
						$_SESSION[ 'username' ] = $row[ 'username' ];
				}
				else {
					$msg = "The username or password you entered is incorrect.";
				}
		}
		else {
			$msg = "All fields are required!.";
		}
	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>PIC Lead Admin </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--[if lte IE 8]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Delicious_500.font.js"></script>
<script type="text/javascript">
$(function() {
	Cufon.replace('#site-title');
	$('.msg').click(function() {
		$(this).fadeTo('slow', 0);
		$(this).slideUp(341);
	});
	<?php 
		if( "" != $msg ) {
			echo "jQuery('.error').html('{$msg}').fadeIn(100);";
		}
	?>
});
</script>

</head>
<body>

<header id="top">
	<div class="container_12 clearfix">
		<div id="logo" class="grid_12">
			<a id="site-title" href="fetch.php"><span>PIC</span> Admin</a>
			<a id="view-site" target="_blank" href="http://personalinjuryclaims.ie/">View Site</a>
		</div>
	</div>
</header>

<div id="login" class="box">
	<h2>Login</h2>
	<section>
		<div class="error msg" style="display:none;">The username or password you entered is incorrect.</div>
		<form method="POST" action="">
			<dl>
				<dt><label for="username">Username</label></dt>
				<dd><input name="username" id="username" type="text" /></dd>
			
				<dt><label for="adminpassword">Password</label></dt>
				<dd><input name="adminpassword" id="adminpassword" type="password" /></dd>
			</dl>
			
			<p>
				<button type="submit" class="button gray" id="loginbtn">LOGIN</button>
				
			</p>
		</form>
	</section>
</div>

</body>
</html>