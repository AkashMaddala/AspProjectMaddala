<!DOCTYPE html>
<html>
	<head>
	<!-- Created by Akash Maddala-->
	<meta charset = "UTF-8">
	<title>STARDOTCOM</title>
	<link rel = "stylesheet" type="text/css" href = "css/styles.css">
	<link rel = "stylesheet" type="text/css" href = "css/horoscope.css">
	
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
                       		 	<a href="index.php">Banking</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="ViewCustomers.php">Customer Details</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="Transfer.php">Fund Transfer</a>
                    		</li>
                    		<li class="li-style">
                       		 	<a href="RecordsPage.php">Transaction History</a>
                    		</li>
							<li class="li-style">
                       		 	<a href="Aboutus.php">About Us</a>
                    		</li>
						</ul>

					</nav>
				</td>
				
				<!-- main content -->
				<td class="tdRightLayout">
					<div class="container" id="detailsForm">
						<h1 class="my-4">Horoscope</h1>
						<h2><p>Check your daily horoscope here!</p></h2>
						<div class="d-flex">
						<!-- Form for entering inputs to check horoscope -->
							<form  method="post" action = "#">
								<div class="divFormStyles">
                                	<label class="nameStyle">Full Name:</label>
                                	<input type="text" name="nameOfPerson" value="<?php if(isset($_POST['checkHoroscope'])){
                                    echo( trim($_POST['nameOfPerson']));
								    }
								    ?>"	placeholder="Full Name" required />
                        		</div>
                        
                     
                        
        						<div class="divFormStyles">
                                        <label class="ageStyles">Age:</label>
                                        <input type="number" name="age" placeholder="Age" min='0' max='110' required value="<?php if(isset($_POST['checkHoroscope'])){
        								    
        								   echo( $_POST['age']);
        								}
        								?>" />
                                </div>
                                
                        
						
                        
                                <div class="divFormStyles">
                                        <label class="ff-bold mr-3 my-auto">Date Of Birth:</label>
                                        <input type="date" name="dob" value="<?php if(isset($_POST['checkHoroscope'])){  
        								   echo( $_POST['dob']);
        								}?>" />
                                </div>
                                
                      
                                
                                
        						<div class="divFormStyles">
                                        <label class="ff-bold mr-3 my-auto">Time of Birth:</label>
                                       <input  type="time" name="tob" value="<?php if(isset($_POST['checkHoroscope'])){
        								    
        								   echo($_POST['tob']);
        								}
        								
        								?>" />
                                </div>
                                
                                   <div class="divFormStyles">
                                        <label style="padding-right: 133px">Gender:</label>
                                        <input style = "height: 15px; min-width: 3px" type="radio" name="gender" value="Male" <?php if(isset($_POST['checkHoroscope'])){
                                            if($_POST['gender']=="Male"){
                                                echo ("checked");
                                            }
                                        }?> />Male
        								<input style = "height: 15px; min-width: 3px" type="radio" name="gender" value="Female" <?php if(isset($_POST['checkHoroscope'])){
        								    if($_POST['gender']=="Female"){
        								        echo ("checked");
        								    }
        								}?>/>Female
                                </div>
                                
                       			<input type="submit" value="Check Horoscope" name = "checkHoroscope" class="btn btn-primary">
							</form>
						</div>
					</div>
					
					<?php 
					//roundtrip validation
					if(isset($_POST['checkHoroscope'])){
					    //including validation file
					    include("inc_validate.php");
					    //validating inputs
					    if(validateString(trim($_POST['nameOfPerson']))){
					        $nameOfPerson = $_POST["nameOfPerson"];
					        if(validateNumber($_POST['age'])){
    					            $age = $_POST["age"];
    					           
    					            $gender = $_POST["gender"];
    					            // 					              
    					            $dob = $_POST['dob'];
    					            // 					                    
    					            $time = $_POST['tob'];
    					            include 'inc_checkhoroscope.php';
					           
					       
					               }else{
					                   echo ("age invalid");
					               }
					        
					        
					           }else{
					               echo ("nameOfPerson invalid");
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