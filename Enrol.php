<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
   


<html lang="en">
	<head>
		<title>Book a Cab</title>
		<h1>VicCabs</h1>
			
									
			<script type="text/javascript">
			
						function validateForm()
					{
						var x = document.forms["orderform"]["FirstName"].value;
						var y = document.forms["orderform"]["number"].value;
						var z = document.forms["orderform"]["suburb"].value;
						var a = document.forms["orderform"]["streetnn"].value;
						var b = document.forms["orderform"]["streetname"].value;
						var c = document.forms["orderform"]["Destination"].value;
						var d = document.forms["orderform"]["number"].value;
					
						if (x == null || x == "") {
							alert("Name must be filled out");
							return false;
						}
						if (y == null || y == "") {
							alert("Phone Number must be filled out");
							return false;
							
						if(isNan(y))
						   {
							  alert("Enter numeric value")
							  frm.number.focus();
							  return false; 
						   }
						}
						if (z == null || z == "") {
							alert("Please enter your Pick-Up Suburb");
							return false;
						}
						if (a == null || a == "") {
							alert("Please enter your Street Number");
							return false;
						}
						if (b == null || b == "") {
							alert("Please enter your Pick-Up Street");
							return false;
						}
						if (c == null || c == "") {
							alert("Please enter which suburb you are Going to?");
							return false;
						}
							
					}
			
			</script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
        

            $(function() {
              $('#homeLength').on('keyup, blur', function() {
                var lgt = $("input:radio[name=Dest]:checked").val();
                $('#Destination').val($(this).val() + ' '+lgt);
              });
              $("input:radio[name=Dest]").on("click",function() { 
                $('#homeLength').blur(); // trigger the blur event of the field to update
              });
            });
    </script>
			
			
		<?php
		date_default_timezone_set('Australia/Sydney');
		echo "Date: ".date("H:i:s  d.m.Y") ."<br>";

		include 'ipadd.php';
			echo "Your IP Address is : ".$ip;	    
						
			
			
			
			?>

	</head>
	<body bgcolor="#F4FA58" >
		<div id="menu">
		
            	<ul> 
				<li><a href="Enrol.php">Book A Cab</a></li>
    	        </ul>
		</div>
		
        	
	<div id="orderform">
		<div id="leftcontent" align="left">
			<form id="orderform" method="POST" action="ordervalidation.php"  onsubmit="return validateForm()" >
							<fieldset style="border:1px  #424242; float:left; height:475px; width:466px; background-color:#F2F2F2;">		
							<table style="width:80%" border="0">
							
							
									<tr>
									   <td>	<u>How Many Passengers?:</u></td><td>
										<br/><input type="radio" name="Passengers" value="1-4" checked>1-4    
										<input type="radio" name="Passengers" value="5_or_more" >5 or more<br/><br/>
										</td>
									</tr>
							
									<tr>
										<td colspan="4"><u>Personal Details and Contact Number:</u></td>
									</tr>
									 <tr>
										<td>Name:</td><td><input type="text" name="FirstName" required /></td>
									</tr>	
									<tr>
										<td>Contact Number:<br/><br/></td><td><input type="tel" name="number" pattern="^(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}$" maxlength="10" id="Mobile" required  Onclick="return validateForm()" /></td>
									</tr>
									 	
									<tr class="rowheight">
								
									<td colspan="4"><u>Your PickUp Address:</u></td>
									</tr>
									<tr>
									<td>Suburb:</td><td><input type="text" name="suburb" required/></td>
									</tr>
									  
									<tr>
								   <td>Unit or Flat:</td><td><input type="text" name="Unit" ></td>
									</tr>
									  
									 <tr>
										<td>Street Number:</td><td><input type="text" name="streetnn" maxlength="4" size="8" required ></td>
									  </tr>
									  <tr>
										<td>Street:</td><td><input type="text" name="streetname"required ></td>
									  </tr>
									    
								
									<tr>
									<td><u>Building Type:</u></td><td>
											<br/><input type="radio" name="btype" value="Unit">Unit or House    
											<input type="radio" name="btype" value="Business" checked>Business<br/><br/>
									</td>
									</tr>
									  
									   
									 
									  
							</table>
							</fieldset><br/>
							
						<fieldset style="border:1px #424242; float:center; height:450px; width:466px; background-color:#F2F2F2;">		
						<table style="width:90%" border="0">
							
																												
									 	
								<tr class="rowheight">
								
									<td colspan="4"><u>Where Are You Going?:</u></td>
									</tr>
									<tr>
									<td>Suburb:</td><td><input type="text" name="Destination" value="" class="form-control"  id="Destination" required/>
      						  <input type="number" value="" required maxlength="5" class="form-control" name="homeLength" id="homeLength">

									</td>
									
									</tr>
									  								
									    
								
									
							<tr>
										<td>Popular Places:</td><td>
															<br/><input type="radio" id="Dest" name="Dest" value="Airport">Airport    
															<input type="radio" id="Dest" name="Dest" value="City">City<br/><br/>
															</td>
							</tr>
							
							<tr>
										<td><u>Other Details:</u></td>
							</tr>
									  
									
							<tr>
										<td>Car Type</td><td>
															<br/>
															<input type="radio" name="Odetails" value="AnyType" checked>AnyType    
															<input type="radio" name="Odetails" value="Wagon" >Wagon
															<input type="checkbox" name="Odetails" value="NOVans" >No Vans Please
															<br/>
															</td>
							</tr>
							
										
							
							<tr>
												<td>Notes For driver <br/><br/></td>
												<td>
											<select name="Notes"  >
												<option value="0">No Notes</option>
												<option value="1">Waiting Out Front</option>
												<option value="2">Waiting At Corner</option>
												<option value="3">Waiting In Car Park</option>
												<option value="4">Waiting At Front Gate</option>
												<option value="5">Waiting At Taxi Rank</option>
												<option value="6">Waiting At Main Entrance</option>
												<option value="7">Ring Bell Please</option>
												<option value="8">Please Toot Horn On Arrival</option>
												<option value="9">Must Go Up Drive</option>
												<option value="10">Must Knock On Door</option>
												<option value="11">Must Go Upstairs</option>
												<option value="12">Must Go Up To Front Door</option>
												<option value="13">Must Go To Reception</option>
												<option value="14">Please Drive In - Do Not Toot</option>
												<option value="15">Please Drive In</option>
												<option value="16">Must Assist Passenger</option>
												<option value="17">Elderly Passenger</option>
											</select>		
												</td>
							
							
							
							</tr>
							
								<tr>
										<td><u>Ready To Go:</u></td><td>
															<br/>
															<input type="radio" name="CallNow" id="CallNow" value="Now" checked>Now    
															<input type="radio" name="CallNow"  value="Later" >Later<br/>
															</td>
							</tr>
											   
									 
									  
						</table>
						</fieldset><br/>
							
					<input  type="submit" class="BookNow" value="Book now" />
				</form><br/><br/>		
		
		</div>
			
						
	</div>
	
	
	
	
	
	</body>
</html>


<!--
		Reusable Fields

								<tr>
										<td>UserName:</td><td><input type="text" name="UName" /></td>
										<td>Password:</td><td><input type="password" name="Password" /></td>
										</tr>	
										
										 <tr>	
										<td>e-Mail:</td><td><input type="text" id="Email" name="Email" /></td>
									  </tr>
										
										-->



