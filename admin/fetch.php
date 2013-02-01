<?php
	require('config.php');

if(isset( $_GET['del']) )
	if('true' == $_GET['del'])
		mysql_query("delete from form WHERE id={$_GET['id']}") or die(mysql_error());
		
$result = mysql_query("select * from form");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>National Accident</title>
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
<script type="text/javascript" charset="utf-8">
var asInitVals = new Array();
			
$(document).ready(function() {
	 $(".drop_evaluate").change(function(e) {
		$.ajax({
			url:'update.php',
			type:'POST',
			data:{ id: $(this).attr('title'),evaluate:$(this).val() },
			success: function(msg){
			$("#msg").html("Updated").fadeIn(500).fadeOut(3000);
			}
			
		});
	});
	var oTable = $('#example').dataTable( {
		"oLanguage": {
			"sSearch": "Search all columns:"
		}
	} );
	
	$("tfoot input").keyup( function () {
		/* Filter on the column (the index) of this element */
		oTable.fnFilter( this.value, $("tfoot input").index(this) );
	} );
	
	
	
	/*
	 * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
	 * the footer
	 */
	$("tfoot input").each( function (i) {
		asInitVals[i] = this.value;
	} );
	
	$("tfoot input").focus( function () {
		if ( this.className == "search_init" )
		{
			this.className = "";
			this.value = "";
		}
	} );
	
	$("tfoot input").blur( function (i) {
		if ( this.value == "" )
		{
			this.className = "search_init";
			this.value = asInitVals[$("tfoot input").index(this)];
		}
	} );
} );
function sure() { return confirm('Are you sure?.'); }
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
<div id="msg" style="display:none;color:#060;"></div>
<div><a href="logout.php" title="logout">Logout</a></div>
<table border="0" cellspacing="0" class="display gtable sortable" id="example" cellpadding="8">
<thead>	
    <tr>
        <th class="poshytip" title="click to detail view">ID</th> <th class="poshytip" title="Name">Name</th> <th class="poshytip" title="home phone number">Phone</th> <th title="Mobile no" class="poshytip">Mobile</th> <th class="poshytip" title="lead from">From</th> <th class="poshytip" title="Injury">Injury</th> <th class="poshytip" title="Have you had an accident in the last 2yrs that was not your fault?">Q1_accident</th>
        <th class="poshytip" title="Were you injured as a result of this accident?">Q2_injured</th> <th class="poshytip" title="Do you want to pursue a No Win no Fee Compensation Claim?">Q3_Claim</th> <th class="poshytip" title="Have you already made a claim in relation to this enquiry?">Q4_enquiry</th> <th class="poshytip" title="Have you signed any documents with any other solicitors in relation to this enquiry?">Q5_signed</th> <th class="poshytip" title="What type of accident were you involved in? ">Q6_involved</th> <th class="poshytip" title="Please provide us with some details in relation to your accident">Q7_provide</th>
       <th class="poshytip" title="Email">Email:</th> <th class="poshytip" title="Evaluate"> Evaluate</th> <th></th>
    </tr>
</thead>
<tbody>
<?php
if( 0 < mysql_num_rows($result)) {
		$evaluate_arr = array("VALID", "INVALID", "NONE");
	while($row=mysql_fetch_assoc($result) ){
		$evaluate_ = $row['evaluate'];
		echo "<tr><td><a href='details.php?id={$row['id']}'>{$row['id']}</a></td><td><a href='details.php?id={$row['id']}'>{$row['Q8_Title']}.{$row['fname']} {$row['sname']}</a></td><td>{$row['hphone']}</td><td>{$row['mobile']}</td><td>{$row['leadfrom']}  </td><td>{$row['Injury']}</td><td>{$row['Q1_accident']}</td><td>{$row['Q2_injured']}</td><td>{$row['Q3_Claim']}</td><td>{$row['Q4_enquiry']}</td><td>{$row['Q5_signed']}</td><td>{$row['Q6_involved']}</td><td>{$row['Q7_provide']}</td><td>{$row['email']}</td><td><select title='{$row['id']}' class='drop_evaluate'>";
		foreach( $evaluate_arr as $value ) {
			if( $evaluate_ == $value )
				echo "<option selected='selected' value='{$value}'>{$value}</option>";
			else 
				echo "<option value='{$value}'>{$value}</option>";
		}
		echo "</select></td><td><a onclick='return sure();' href='?id={$row['id']}&del=true'><img src='images/icons/cross.png' alt='Delete' /></a></td> </tr>";
	}
}	
?>
</tbody>
<tfoot>
    <tr>
		<th><input type="text" name="search_id" value="Id" class="search_init" /></th>
        <th><input type="text" name="search_name" value="Name" class="search_init" /></th>
        <th><input type="text" name="search_phone" value="Phone" class="search_init" /></th>
        <th><input type="text" name="search_mobile" value="Mobile" class="search_init" /></th>
        <th><input type="text" name="search_from" value="From" class="search_init" /></th>  
        <th><input type="text" name="search_injury" value="Injury" class="search_init" /></th>  
        <th><input type="text" name="search_accident" value="Accident" class="search_init" /></th> 
        <th><input type="text" name="search_injured" value="Injured" class="search_init" /></th>
        <th><input type="text" name="search_claim" value="Claim" class="search_init" /></th>
        <th><input type="text" name="search_enquiry" value="Enquiry" class="search_init" /></th>  
        <th><input type="text" name="search_signed" value="Signed" class="search_init" /></th>  
        <th><input type="text" name="search_involved" value="Involved" class="search_init" /></th>  
        <th><input type="text" name="search_provide" value="Provide" class="search_init" /></th>  
        <th><input type="text" name="search_email" value="Email" class="search_init" /></th>
    </tr>
</tfoot>
</table>
</body>
</html>