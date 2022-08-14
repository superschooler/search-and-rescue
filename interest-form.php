<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Ventura County Search and Rescue - Fillmore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="Ventura, County, Sheriff, Search, Rescue, Fillmore, Camarillo, Ojai, Thousand Oaks, Swift, Water, Mountain, Rescue, TeamSearch, Management, Heavy, Urban, Swift, Water, Rope, Tracking, Cold, Hot, Severe, Weather, Emergency, Medical, Services, EMS, Off, Road, Motorcycle, Helicopter, Support, California, United, States, volunteers, special, rock, climbing, wilderness, survival, victim, evacuation, techniques, radio, communications, procedures"/>
        <meta name="description" content="The Fillmore Mountain Search and Rescue Team is comprised of highly skilled volunteers who are available to respond to wilderness emergencies in Ventura County. Team members specialize in Search Management, Heavy Urban Rescue, Swift Water Rescue, Rope Rescue, Man Tracking, Cold Weather Rescue, EmergencyMedical Services (EMS), and Off-Road Motorcycle Rescue."/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/yourstyle.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142327143-2"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'UA-142327143-2');
		</script>
		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/c80129e9d7.js" crossorigin="anonymous"></script>
    </head>
    <body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
<?php
						$mail = $_POST['email'];
						$to = "schooler94@gmail.com, admin@vcsar1.org";
						$subject = "Search and Rescue Application";
						$message .= "First Name: ".$_POST['first-name']."<br>";
						$message .= "Last Name: ".$_POST['last-name']."<br>";
						$message .= "Email Address: ".$_POST['email']."<br>";
						$message .= "Address: ".$_POST['address']."<br>";
						$message .= "City: ".$_POST['city']."<br>";
						$message .= "State: ".$_POST['state']."<br>";
						$message .= "Zip: ".$_POST['zip']."<br>";
						$message .= "Phone Number: ".$_POST['phonenumber']."<br>";
						$message .= "At Least 18?: ".$_POST['age-18']."<br>";
						$message .= "Employer: ".$_POST['employer']."<br>";
						$message .= "City: ".$_POST['empcity']."<br>";
						$message .= "State: ".$_POST['empstate']."<br>";
						$message .= "Occupation: ".$_POST['occupation']."<br>";
						$message .= "Able to Leave Work for a Call-Out?: ".$_POST['work-call-q1']."<br>";
						$message .= "Level of Medical Training: ".$_POST['medical-training']."<br>";
						$message .= "Skills & Interests: ".$_POST['skills-interests']."<br>";
						$message .= "Hobbies: ".$_POST['hobbies']."<br>";
						$message .= "Why do you Want to Join a Search & Rescue Team?: ".$_POST['why-sar']."<br>";
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

				
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Your Search & Rescue Application Has Been Received";
						$userheaders = "From: recruitment@vcsar1.org\n";
						/*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Thank you for applying to be a member of Ventura County Search & Rescue's Fillmore Team!\n\nYour answers have been recorded. Please be patient while we contact you regarding the next steps. We generally hold orientation and testing for new members once per year and will contact you prior to these events.\n\nIf you have any questions in the meantime, you can email us at recruitment@vcsar1.org."; 
						mail($user,$usersubject,$usermessage,$userheaders);
	
?>
<!-- END SEND MAIL SCRIPT -->   

<div id="success">
    <div class="icon icon--order-success svg" style="margin-top:25px;">
         <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
          <g fill="none" stroke="#8EC343" stroke-width="2">
             <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
             <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
          </g>
         </svg>
     </div>
	<h4 style="text-align: center;margin-top:25px;"><span>Your application has been sent!</span><br/></br/>Thank you for your interest in joining the Ventura County Sheriff's Department's Search &amp; Rescue Team.</h4>
	<div style="text-align: center;">
		<small>You will be redirected back to our homepage in 5 seconds.</small>
	</div>
</div>
</body>
</html>