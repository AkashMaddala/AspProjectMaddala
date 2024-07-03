<!DOCTYPE html>
<html>
	<head>
	<!-- Created by Akash Maddala-->
	<meta charset = "UTF-8">
	<title>STARDOTCOM</title>
	<link rel = "stylesheet" type="text/css" href = "css/styles.css">
	<link rel = "stylesheet" type="text/css" href = "css/Subscriptions.css"> 
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
					<h1>Subscribe </h1>
					<div class="container" id="detailsForm">
					<form action ="Subscriptions.php" method="POST">
					
					<div class="divFormStyles">
						<p>
							Enter your Name: <input type="text" name="nameTextbox" value="<?php if(isset($_POST['subscirbeButton'])){
								    
                                    echo( trim($_POST['nameTextbox']));
								}
								?>">							
						</p>
						</div>
						
						<div class="divFormStyles">
						<p>
							Enter your email: <input type="text" name="mailTextbox" value="<?php if(isset($_POST['subscirbeButton'])){
								    
                                    echo( trim($_POST['mailTextbox']));
								}
								?>">							
						</p>
						</div>
						
						<div class="divFormStyles">
						<p>
							Enter your phonenumber: <input type="tel" name="numberTextbox" value="<?php if(isset($_POST['subscirbeButton'])){
								    
                                    echo( ($_POST['numberTextbox']));
								}
								?>">							
						</p>
						</div>
						
						<div class="divFormStyles">
						
						<p>
							<label>How would you like to recieve notifications:</label>
							<input type="checkbox" id="textCheckBox" name="textCheckBox" value = "textMessages" <?php if(isset($_POST['subscirbeButton'])){
							    if(isset($_POST['textCheckBox'])){
							        echo "checked";
							    }
								    
                                    
								}
								?>>
							<label>Text</label>
							
							<input type="checkbox" id="emailCheckBox" name="emailCheckBox" value = "emails" <?php if(isset($_POST['subscirbeButton'])){
							    if(isset($_POST['emailCheckBox'])){
							        echo "checked";
							    }
								    
                                    
								}
								?>>
							<label>Email</label>
							
						</p>
						</div>
						<div class="divFormStyles">
						<p>
							 Feedback(optional): <textarea name="feedback" rows = '4' cols='50' value="<?php if(isset($_POST['subscirbeButton'])){
								    
                                    echo( ($_POST['feedback']));
								}
								?>"></textarea>
						</p>
						</div>
        					
						<p><input type='submit' class="btn btn-primary" name='subscirbeButton' value="Subscribe">
						
					
						
						
						</p>
					</form>
					</div>
					
					<?php
					
					if(isset($_POST['subscirbeButton'])){
					    
					    include("inc_validate.php");
					   
					        $mailTextbox = $_POST["mailTextbox"];
					        if(validateString($_POST['nameTextbox'])){
					            $nameTextbox = $_POST["nameTextbox"];
					            if(validateNumber($_POST['numberTextbox'])){
					                $numberTextbox = $_POST['numberTextbox'];
					                if(isset($_POST['textCheckBox'])||isset($_POST['emailCheckBox'])){
					                               include 'inc_insertSubscriptions.php';
					                               if($_POST['feedback']!= null){
					                            
					                               echo  "<h4 style='text-align: center'>Thanks for the feedack</h4>";
					                               }
					                               
					                    
					                }else{
					                    echo ("checkboxes invalid");
					                }
					                
					                
					            }else{
					                echo ("number invalid");
					            }
					            
					        }else{
					            echo ("name invalid");
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