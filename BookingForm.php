
<!DOCTYPE html>
<html>
	<head>
	<!-- Created by Akash Maddala-->
	<meta charset = "UTF-8">
	<title>STARDOTCOM</title>
	<link rel = "stylesheet" type="text/css" href = "css/styles.css">
	<link rel = "stylesheet" type="text/css" href = "css/bookings.css">
	</head>
	<body>
		<a id="Top"></a>
		<table class = "tb1PageLayout">
			<tr class="trTopLayout">
			    <!-- Logo code in header -->
				<th colspan = "2" class="logo-img">
					<p>
					
                    <a href="home.php">                   	
                        <img src="./images/starf.png" alt="STARDOTCOM">
                        <img src="./images/dotcom2.png" alt="STARDOTCOM">
                    </a>
                    </p>
                
				</th>
			</tr>
			<!-- Navigation -->
			<tr class="trCenterLayout">
				<td class="tdLeftLayout">
					<nav>
						<ul>
							 <li class="li-style">
                       			 <a href="home.php">Home</a>
                    		</li>
                    		<li class="li-style">
                      		  	<a href="Horoscope.php">Horoscope</a>
                   			 </li>
                   			 <li class="li-style">
                      			<a href="Gaming.php">Gaming</a>
                    		</li>
                    		
                    		<li class="li-style">
                        		<a href="Bookings.php">Seminars</a>
                   			 </li>
                    		<li class="li-style">
                        		<a href="mybookings.php">My Bookings</a>
                    		</li>
                    		
                    		<li class="li-style">
                       		 	<a href="Landmarks.php">Landmarks</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="Subscriptions.php">Subscriptions</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="Pacman.php">Pacman</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="Aboutus.php">About Us</a>
                    		</li>
						</ul>

					</nav>
				</td>
				<!-- main content -->
				<td class="tdRightLayout">
				<br>
				<br>
					<a class= 
					"linkStyling "href = "Bookings.php">  View Seminars</a>
					<br>
					
					<div class="container" id="detailsForm">
					<h2 class="my-4">Book your seminar here</h2>
					
					<div class="d-flex">
					<form  method="post" action = "#">
					
					 	
						<div class="divFormStyles">
                                <label class="nameStyle">First Name:</label>
                                <input type="text" name="firstName" class="" value="<?php if(isset($_POST['addBooking'])){
								    
                                    echo( trim($_POST['firstName']));
								}
								?>"	placeholder="First Name" required />
                        </div>
                        
                        <div class="divFormStyles">
                                <label class="nameStyle">Last Name:</label>
                                <input type="text" name="lastName" class="" value="<?php if(isset($_POST['addBooking'])){
								    
                                    echo( trim($_POST['lastName']));
								}
								?>"	placeholder="Last Name" required />
                        </div>
                        
                         <div class="divFormStyles">
                                <label class="emailStyle">Email:</label>
                                <input type="text" name="email" class="" value="<?php if(isset($_POST['addBooking'])){
								    
                                    echo( trim($_POST['email']));
								}
								?>"	placeholder="Email" required />
                        </div>
                        
                        <div class="divFormStyles">
                                <label class="phoneStyle">Phone Number:</label>
                                <input type="tel" name="phonenumber" class="" value="<?php if(isset($_POST['addBooking'])){
								    
                                    echo( trim($_POST['phonenumber']));
								}
								?>"	placeholder="phone Number" required />
                        </div>
                        
                        <div class="divFormStyles">
                                <label class="seminarStyle"> Seminar:</label>
                                <select  name="seminars" class="">
                                	<?php include 'inc_bookingSeminar.php'; 
                                	while($row = $result->fetch_assoc()){
                                        foreach ($row as $value){
                                            print ("<option value='$value'" .Sticky("$value" ). ">$value</option>");
                                        }
                                    }
                                    
                                    function Sticky($value){
                                        $selected = "";
                                        if(isset($_POST['seminars'])){
                                            $_POST['seminars']==$value? $selected = 'selected': $selected = "";
                                            return $selected;
                                        }
                                    }
						
                                    ?>
                                </select>
                        </div>
                     
                        <input type="submit" value='Book Seminar' name = "addBooking" class="btn btn-primary">
					</form>
					</div>
					</div>
					
					<?php 
					if(isset($_POST['addBooking'])){
					    
					    include("inc_validate.php");
					    if(validateString($_POST['firstName'])){
					        $firstName = $_POST["firstName"];
					        if(validateString($_POST['lastName'])){
					            $lastname = $_POST["lastName"];
					               $email = $_POST["email"];
					                  if(validateNumber($_POST['phonenumber'])){
					                       $year = $_POST['phonenumber'];
					                           if(isset($_POST['seminars'])){
					                               $seminar = $_POST['seminars'];
					                               include 'inc_insertBookings.php';
					       
					                           }else{
					                               echo ("Please select seminar");
					                           }
					                   }else{
					                       echo ("phonenumber invalid");
					                   }
					        }else{
					            echo ("lastname invalid");
					        }
					        
					    }else{
					        echo ("firstname invalid");
					    }
					}
				
					
					?>
					<p>
						<a href="#Top">Go To Top of the page</a>
					</p>
				</td>
				<!-- Footer -->
				<tr class="trBottomLayout">
					<td class="tdFoot" colspan = "2">
					<!-- Page footer -->
						<p>copyright &copy; Akash Maddala University of Central Missouri &#8482;</p> 
					</td>
			</tr>
		</table>
	
	
	
	</body>
</html>