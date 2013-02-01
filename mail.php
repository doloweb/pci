<?php
require('config.php');
if( isset( $_POST ) )
if( !empty( $_POST  ) ) {
	$lead = 'FORM';
	$name = $_POST['name'];
	$Surname = $_POST['Surname']; 
	$email = $_POST['email'];
	$hphone = $_POST['hphone'];
	$phone = $_POST['phone'];
	/*$pcode = $_POST['pcode'];*/
	$ad_accRecent=$_POST['ad_accRecent'];
	$ad_result=$_POST['ad_result'];
	$ad_wish=$_POST['ad_wish'];
	$ad_history=$_POST['ad_history'];
	$ad_sign=$_POST['ad_sign'];
	$text=$_POST['text'];
	/*$ad_injSus=$_POST['ad_injSus'];*/
	if(!isset( $_POST['injury'] ))
		die(" please Select atleast one injury!.");
	$injury = (array)$_POST['injury'];
	$injury_text = implode(',', $injury);
	$Pleaseselect = $_POST['Pleaseselect'];
	$type = $_POST['type'];
	/*$message = $_POST['message'];*/
	$formcontent=" Firstname: $name \n Surname: $Surname \n email: $email \n Home Phone: $hphone \n  Phone: $phone \n Have you had an accident in the last three years that was not your fault?: $ad_accRecent  \n  Were you injured as a result of this accident?: $ad_result \n Do you want to pursue a No Win no Fee Compensation Claim?: $ad_wish \n Have you already made a claim in relation to this enquiry?: $ad_history \n Have you signed any documents with any other solicitors in relation to this enquiry?: $ad_sign \n Please Select Injury:{$injury_text} \n What type of accident were you involved in?: $Pleaseselect \n your title: $type \n Please provide us with some details in relation to your accident: $text";
	$recipient = "sasikumar@siteons.com,cvssasikumar@gmail.com,parthiban@siteons.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mysql_query("INSERT INTO  form (leadfrom,Injury,Q1_accident,Q2_injured,Q3_Claim,Q4_enquiry,Q5_signed,Q6_involved,Q7_provide,Q8_Title,email,fname,sname,hPhone,mobile)
VALUES ('$lead','$injury_text','$ad_accRecent', '$ad_result','$ad_wish','$ad_history','$ad_sign','$Pleaseselect','$text','$type','$email','$name','$Surname','$hphone','$phone')")or die(mysql_error());
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	 


/*if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo " record added";
*/

	echo "Thanking you!.. <a href='form.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}else {
	echo "Error in form!..<a href='form.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}

///*$head = $_POST['head'];
//$neck = $_POST['neck'];
//$Shoulder = $_POST['Shoulder'];
//$Back = $_POST['Back'];
//$Arm = $_POST['Arm'];
//$Elbow = $_POST['Elbow'];
//$Wrist = $_POST['Wrist'];
//$Hand = $_POST['Hand'];
//$Pelvis = $_POST['Pelvis'];
//$Knee = $_POST['Knee'];
//$Leg = $_POST['Leg'];
//$Ankle = $_POST['Ankle'];*/
///*$website = $_POST['Mr'];*/

?>
<table>
<td ><span style="margin-left:30px;"><a href="login.php"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; text-decoration:none; position:relative; top:10px;">Administrator</span></a></span></td>
</tr>

</table>
