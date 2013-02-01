<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>National Accident Helpline</title>
<link href="form_files/styles.css" rel="stylesheet" type="text/css">
<link href="form_files/form1.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">
	<link rel="stylesheet" href="css/template.css" type="text/css">
	<script src="js/jquery-1.6.min.js" type="text/javascript">
	</script>
	<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
<script language="javascript">
$(document).ready(function(e) {
	$("#check").validationEngine();
			$("#check").bind("jqv.form.validating", function(event){
				$("#hookError").html("")
			})

			$("#check").bind("jqv.form.result", function(event , errorFound){
				if(errorFound) { 
					$("#hookError").append("There is some problems with your form");
					$("#hookError").fadeIn(1000);
					$("#hookError").fadeOut(3000);	
				}
			});
		
});
</script>
</head>
<body>
<div id="wrapper">
  <div id="header"></div>
    <div id="stamp"></div>
  <div id="content">
  <h1><span style="color:#FF6C6C">If you have had an Accident in the last 2 years you could be entitled to </span>No Win No Fee <span style="color:#FF6C6C">Compensation.</span></h1>
  <h2 class="style1">At PersonalInjuryClaims.ie we can tell you within minutes if you have a claim.</h2>
    <!--<h1>If you had an accident in the last three years you could be entitled to a compensation.</h1>-->
    <!--<h2 class="style1">At National Accident Helpline, we can tell you within minutes if we think you've got a claim.</h2>-->
    <div id="process"></div>
    <div id="main_img"></div>
    <div id="hookError"></div>
    <div id="form">
	<form action="mail.php" method="post" id="check" name="check"  >
      <div style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; margin-bottom: 15px; font-weight: bold; margin-top: 20px;" >Please Select Injury</div>
      <div id="injury" >
  	<label class="injury_area "><input name="injury[]" type="checkbox"  class="validate[minCheckbox[2]] checkbox" value="Head"> Head</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Neck"> Neck</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Shoulder"> Shoulder&nbsp;&nbsp;</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Back"> Back</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Arm"> Arm</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Elbow"> Elbow</label> 
	<div class="clear" style="height:15px"></div>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Wrist"> Wrist</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Hand"> Hand</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Pelvis/Hip"> Pelvis/Hip</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Knee"> Knee</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Leg"> Leg</label>
  	<label class="injury_area"><input name="injury[]" type="checkbox" class="validate[minCheckbox[2]] checkbox" value="Ankle"> Ankle</label>
  </div>
      <div class="clear" style="height:10px;"></div>
      <div class="questions" class="validate[required]"> Have you had an accident in the last 2yrs that was not your fault?
<label><input name="ad_accRecent" value="YES" checked="checked" type="radio"  > YES</label> 
		<label><input name="ad_accRecent" value="NO" type="radio"> NO</label>	
      </div>
      <div class="questions" class="validate[required]"> Were you injured as a result of this accident?
<label><input name="ad_result" value="YES" checked="checked" type="radio"> YES</label> 
		<label><input name="ad_result" value="NO" type="radio"> NO</label>	
      </div>
      <div class="questions"> Do you want to pursue a No Win no Fee Compensation Claim?
<label><input name="ad_wish" value="YES" checked="checked" type="radio"> YES</label> 
		<label><input name="ad_wish" value="NO" type="radio"> NO</label>	
      </div>
      <div class="questions" class="validate[required]"> Have you already made a claim in relation to this enquiry?
<label><input name="ad_history" value="YES" checked="checked" type="radio"> YES</label> 
		<label><input name="ad_history" value="NO" type="radio"> NO</label>	
      </div>
      <div class="questions" class="validate[required]">Have you signed any documents with<br /> any other solicitors in relation to this enquiry?
        <label><input name="ad_sign" id="ad_injSus_True" value="YES" checked="checked" type="radio">
		YES</label>
		<label><input name="ad_sign" id="ad_injSus_False" value="NO" type="radio">
		NO </label>
      </div>
      <div class="questions">What type of accident were you involved in?
<select name="Pleaseselect" id="ad_accType" class="txt-input" style="height:auto">
		<option selected="selected" value="">Please select</option>
		<option value="Road Accident">Road Accident</option>
		<option value="Work Accident">Work Accident</option>
		<option value="Medical Negligence">Medical Negligence</option>
		<option value="Public Liability">Public Liability</option>
		<option value="Trip/Slip">Trip/Slip</option>
		<option value="Other">Other</option>
		</select>
      </div>
    <div style="height:50px;">
      <div style=" float:left;margin-top:10px; margin-bottom:0px; height:20px;" ><span class="questions">Please provide us with some details in relation to your accident:</span> </div>
      <div class="form-input" style=" float:right; margin-top:-10px;">
          <textarea name="text" size="20" class="txt-input " type="text" maxlength="100" ></textarea> 
      </div>
      </div>
      <div class="clear" style="height:10px; margin-top:0px;"></div>
      <div class="form-label"> Your Title:</div>
      <div class="form-input">
<select class="validate[required] txt-input" name="type" id="salutation" style="height:auto">
<option selected="selected" value="">Please select</option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Ms">Ms</option>
<option value="Miss">Miss</option>
</select>
      </div>
      <div class="form-label"> Email:</div>
      <div class="form-input">
        <input name="email" id="email" size="20" class="validate[required,custom[email]] txt-input " type="text" maxlength="40 " >
      </div>
      <div class="clear"></div>
      <div class="form-label"> First Name:</div>
      <div class="form-input">
        <input size="20" name="name" id="firstname" class="validate[required,custom[onlyLetterSp]] txt-input" type="text" maxlength="10">
      </div>
      <div class="form-label"> Surname:</div>
      <div class="form-input">
        <input size="20" name="Surname" id="lastname" class="validate[required,custom[onlyLetterSp]] txt-input" type="text" maxlength="10">
      </div>
      <div class="clear"></div>
      <div class="form-label"> Home Phone #:</div>
      <div class="form-input">
        <input size="20" name="hphone" id="phonenumber"  class="validate[required,custom[phone]] txt-input" type="text" maxlength="10">
      </div>
      <div class="form-label"> Mobile #:</div>
      <div class="form-input">
        <input name="phone" id="phonecell" size="20"  class="validate[required,custom[phone]] txt-input" type="text" maxlength="10">
      </div>
      <div class="clear"></div>
      <!--<div class="form-label"> Postal Code:</div>
      <div class="form-input">
        <input name="zip" id="zip" size="20" class="txt-input" type="text">
      </div>
      <div class="clear"></div>-->

<div id="error_message" style="display:none;font-size:21px;color:red;padding-top:20px;text-align:center"><strong>Please fix all the red fields!</strong></div>

<div>
	<div id="submit-button">
		<input value="send" src="form_files/button.gif" alt="Continue to the next step" type="image">
	</div>

	<div style="height:60px; display:none" id="imgloading_form" align="center"><img src="form_files/loader.gif" alt=""></div>
</div>

<p style="text-align:right;padding-right:60px"><a href="http://partner9g.national-accident-helpline.co.uk/privacy_policy" target="_blank" onclick="return popup(this, 600, 320)"><b>Privacy Policy</b></a></p>
	</form>
    </div>
    <div class="clear"></div>
    <div id="bottom_img" style="margin-bottom:0"></div>
  </div>
  <div id="foot"></div>
  <div id="footer">&copy; Copyright <?php 
$copyYear = 2012; 
$curYear = date('Y'); 
/*echo date('Y');*/
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?> . All Rights Reserved <br>
              <span style="font-size:11px;">By completing our form and submitting your personal details, you are giving express consent to be contacted by a carefully selected partner of personalinjuryclaims.ie. The operator of this website is not a personal injury solicitor and acts only as an intermediary between the website user and our selected partners. This website will match you with a personal injury advisor based on the details you submit, PersonalInjuryClaims.ie has no further connection with your personal injury claim once the details have been transferred to our partners. Completion of this application in no way guarantees that your claim will be accepted. You may be charged for services you undertake with any solicitor.</span></div>
  
  <!--
  <p style="text-align:center;font-family:Arial, Helvetica, sans-serif">Regulated by the Ministry of Justice in respect of regulated claims management activities.  No. CRM1437</p>-->
</div>


</body></html>