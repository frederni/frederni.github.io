<?php
	include ("iCal.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Booking registrert</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	<style>
	#contact-area{
	background-color: white;
	}
	#yas{
	margin-top: 5%;
	}
	
	</style>

</head>

<body>

<?php
	//$firstname is the first name of target
	//$lastname is the last name of target
	//$email is the targets email address
	//$meeting_date is straight from a DATETIME mysql field and assumes UTC.
	//$meeting_name is the name of your meeting
	//$meeting_duretion is the duration of your meeting in seconds (3600 = 1 hour)
	$firstname = Trim(stripslashes($_POST['Name']));
	$lastname = "";
	$email = "frederick.nilsen@gmail.com; " . Trim(stripslashes($_POST['Email']));
	
	/* Welcome to I have no clue on PHP syntax so I'll pray adding shit works */
	$date_all = explode(" to ", $_POST['datetimes']);
	$meeting_date = $date_all[0];
	//$meeting_date = "2010-07-06 13:40:00"; //mysql format
	$meeting_name = "Booking";
	$dt_start = date_create_from_format('Y-m-d H:i:s', $date_all[0]);
	$dt_end = date_create_from_format('Y-m-d H:i:s', $date_all[1]);
	$meeting_duration = $dt_end->getTimestamp() - $dt_start->getTimestamp();

	//returns true or false
	$result = sendIcalEmail($firstname,$lastname,$email,$meeting_date,$meeting_name,$meeting_duration);
	
	//display result
	if($result) {
		echo "Email sent successfully.";
	} else {
		echo "A problem occured sending email";
	}   
?>		



	

	
				
		<div id="contact-area" class="container">
		<div class="jumbotron" id="yas">
				<h1>Sovesofaplass booket!</h1>
		<p>Da er det bare &aring; glede seg til Trondheimsturen!</p>
				<p><a href="index.html">Book ny time</a></p>

			
			
			<div style="clear: both;"></div>		
		</div>
	</div>


</body>
</html>


























<?php
/*

$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 
$City = Trim(stripslashes($_POST['City'])); 



$datetimes = $_POST['daterange'];

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Navn: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Hvor: ";
$Body .= $City;
$Body .= "\n";
$Body .= "Beskrivelse: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "Dato: ";
$Body .= $datetimes;

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}*/
?>