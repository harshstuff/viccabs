<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Error</title>
		<h1>VicCabs</h1>
	</head>
	<body bgcolor="#F4FA58" >
		
			<?php

			if ($_SERVER['REQUEST_METHOD'] != 'POST') {

			    die('No post.');
			}
			?>
			<?php



								date_default_timezone_set('Australia/Sydney');
								

								function gen_uid($l=10){
    							return substr(str_shuffle("0123456789ABXYZ"), 0, $l);


								}



			?>



		<div align="center" >

								<?php



											$Passengers = htmlentities($_POST['Passengers'], ENT_QUOTES);
											$FirstName = htmlentities($_POST['FirstName'], ENT_QUOTES);
											$Number = htmlentities($_POST['number'], ENT_QUOTES);
											$street = htmlentities($_POST['streetnn'], ENT_QUOTES);
											$unit = htmlentities($_POST['Unit'], ENT_QUOTES);
											$StreetName = htmlentities($_POST['streetname'], ENT_QUOTES);
											$suburb = htmlentities($_POST['suburb'], ENT_QUOTES);
											$Dsuburb = htmlentities($_POST['Destination'], ENT_QUOTES);
										    $Dest = htmlentities($_POST['Dest'], ENT_QUOTES);
										    $Cartype = htmlentities($_POST['Odetails'], ENT_QUOTES);
										    $Notes = htmlentities($_POST["Notes"], ENT_QUOTES);
										    $Booktime = htmlentities($_POST['CallNow'], ENT_QUOTES);




										    
												if(isset($_POST['Notes'])){
												    $select1 = $_POST['Notes'];
												    switch ($select1) {
												        case '0':
												            echo 'this is zero<br/>';
												            break;
												        case '1':
												            echo 'f <br/>';
												            break;
												        default:
												            # code...
												            break;
												    }
												}





												
											

											$ok = true;
											//data validation
											if (empty($FirstName)) {echo ('Your First Name cannot be blank.<br/>');$ok = false;}
											if (empty($Number)) {echo ('Your Number cannot be blank.<br/>');$ok = false;}
											if (ereg('[^0-9]', $Number)) {echo('You mobile number can only have numbers.<br/>');$ok = false;}				
											if (empty($street)) {echo ('Your Street cannot be blank.<br/>');$ok = false;}
											if (empty($suburb)) {echo ('Your Suburb cannot be blank.<br/>');$ok = false;}
											if (empty($Dsuburb)) {echo ('Your Destination Suburb cannot be blank.<br/>');$ok = false;}

											if ($ok == false)
											{exit;}
										else
											{
												echo "Hi ".$FirstName ."Your booking from " .$suburb ." to " .$Dsuburb ." for " .$Passengers ." passengers has been made on " .date("H:i:s  d.m.Y")."<br>";
												echo "Your Booking Number is " .gen_uid(6) .$Notes ;
											}
											
								
								
								?>
					</div>

					<?php


					$to = 'sunny_virk_7@yahoo.com '; //sunny_virk_7@yahoo.com Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
					$email_subject = "Booking Details: $Passengers .$FirstName";
					$email_body = "You have received a new message from your taxi website.\n\n"."Here are the details:\n\nName: $FirstName\n\nContact Number: $Number\n\nPickUp Address:Unit:$unit || Street:$street $StreetName || Suburb:$suburb\n\nDestination Suburb: $Dsuburb\n\n Car Type: $Cartype\n\n Notes:";
					$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
					$headers .= "Reply-To: Do Nothing";	
					mail($to,$email_subject,$email_body,$headers);
					return true;








					  ?>
				
								
								
								
    
		
	
		
		
	</body>
</html>
								