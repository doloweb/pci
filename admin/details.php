<?php
require('config.php');
$result=mysql_query("select * from form WHERE id={$_GET['id']}") 


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Details Document</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/skins/blue.css" title="blue">

<link rel="alternate stylesheet" type="text/css" href="css/skins/orange.css" title="orange">
<link rel="alternate stylesheet" type="text/css" href="css/skins/red.css" title="red">
<link rel="alternate stylesheet" type="text/css" href="css/skins/green.css" title="green">
<link rel="alternate stylesheet" type="text/css" href="css/skins/purple.css" title="purple">
<link rel="alternate stylesheet" type="text/css" href="css/skins/yellow.css" title="yellow">
<link rel="alternate stylesheet" type="text/css" href="css/skins/black.css" title="black">
<link rel="alternate stylesheet" type="text/css" href="css/skins/gray.css" title="gray">

<link rel="stylesheet" type="text/css" href="css/superfish.css">
<link rel="stylesheet" type="text/css" href="css/uniform.default.css">
<link rel="stylesheet" type="text/css" href="css/jquery.wysiwyg.css">
<link rel="stylesheet" type="text/css" href="css/facebox.css">
<link rel="stylesheet" type="text/css" href="css/smoothness/jquery-ui-1.8.8.custom.css">
<!--[if lte IE 8]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr.js"></script>
<script type="text/javascript" src="js/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.8.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>
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
<div><a href="javascript:history.back();">back</a></div>
     <?php
			while( $row = mysql_fetch_assoc($result) ){
			echo "<table class='gtable sortable' border='0' cellpadding='8' cellspacing='0' >
			<thead><tr><th>Field</th><th>Value</th></tr></thead>
			<tbody>
			<tr><td>ID</td><td>{$row['id']}</td></tr>
			<tr><td> Evaluate</td><td>{$row['evaluate']}</td></tr>							
			<tr><td>Leadform:</td><td>{$row['leadfrom']}  </td></tr>
			<tr><td>Please Select Injury:</td><td>{$row['Injury']}</td></tr>
			<tr><td>Have you had an accident in the last 2yrs that was not your fault?</td> <td>{$row['Q1_accident']}</td></tr>
			<tr><td>Were you injured as a result of this accident?</td><td>{$row['Q2_injured']}</td></tr>
			<tr><td>Do you want to pursue a No Win no Fee Compensation Claim?</td><td>{$row['Q3_Claim']}</td></tr>
			<tr><td>Have you already made a claim in relation to this enquiry?</td><td>{$row['Q4_enquiry']}</td></tr>
			<tr><td>Have you signed any documents with any other solicitors in relation to this enquiry?</td><td>{$row['Q5_signed']}</td></tr>
			<tr><td>What type of accident were you involved in? </td><td>{$row['Q6_involved']}</td></tr>
			<tr><td>Please provide us with some details in relation to your accident</td><td>{$row['Q7_provide']}</td></tr>
			<tr><td>Your Title:</td><td>{$row['Q8_Title']}</td></tr>
			<tr><td>Email:</td><td>{$row['email']}</td></tr>
			<tr><td>First Name:</td><td>{$row['fname']}</td></tr>
			<tr><td>Surname:</td><td>{$row['sname']}</td></tr>
			<tr><td>Home Phone:</td><td>{$row['hphone']}</td></tr>
			<tr><td>Mobile:</td><td>{$row['mobile']}</td></tr>
			</tbody>>
			 </table>"; 
	}
	
?>


</body>
</html>
<!--<td>ID:</td>
<td> Evaluate:</td>
<td>Leadform:</td>
<td>Please Select Injury:</td>
<td>Have you had an accident in the last 2yrs that was not your fault?</td>
<td>Were you injured as a result of this accident?</td>
<td>Do you want to pursue a No Win no Fee Compensation Claim?</td>
<td>Have you already made a claim in relation to this enquiry?</td>
<td>Have you signed any documents with any other solicitors in relation to this enquiry?</td>
<td>What type of accident were you involved in?</td>
<td>Please provide us with some details in relation to your accident:</td>
<td>Your Title:</td>
<td>Email:</td>
<td>First Name:</td>
<td>Surname:</td>
<td>Home Phone:</td>
<td>Mobile:</td>
-->