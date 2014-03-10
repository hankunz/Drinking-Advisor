<?php ob_start(); 
 // start up your PHP session!
 session_start();
  ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Drinking Advisor</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href=" css/default.css" />
		<link rel="stylesheet" type="text/css" href=" css/multilevelmenu.css" />
		<link rel="stylesheet" type="text/css" href=" css/component.css" />
		<link rel="stylesheet" type="text/css" href=" css/animations.css" />
		<script src=" js/modernizr.custom.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src=" js/jquery.dlmenu.js"></script>
		<script src=" js/pagetransitions.js"></script>
	  
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=" css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src=" js/jquery.js"></script>
<script type="text/javascript" src=" js/login.js"></script>
<script type="text/javascript" src=" js/Chart.js"></script>
 <script type="text/javascript" src=" js/jquery.easing.js"></script>
 <script type="text/javascript" src=" js/jquery.ulslide.js"></script>
 <!----Calender -------->
  <link rel="stylesheet" href=" css/clndr.css" type="text/css" />
  <script src=" js/underscore-min.js"></script>
  <script src= " js/moment-2.2.1.js"></script>
  <script src=" js/clndr.js"></script>
  <script src=" js/site.js"></script>
  <!----End Calender -------->
  <link type="text/css" href=" css/mmenu.css" rel="stylesheet" media="all" />
<script type="text/javascript" src=" js/jquery.mmenu.min.js"></script>
<script type="text/javascript">
		$(function() {
			$('nav#menu').mmenu();
		});
	</script>
</head>
<body>			



<?php require 'php/dataRetrieval.php'; ?>
	
























































       
	    <div class="wrap">	 
	      <div class="header">
	      	  <div class="header_top">
	      	     	<div class="menu-ico"><a href="#menu"></a></div>
					  <div class="profile_details">
				    		   <div id="loginContainer">
				                  <a id="loginButton" class=""><span>Me</span></a>   
				                    <div id="loginBox">                
				                     
				                     
				                     
				                     <form id="loginForm" name="loginForm" >
				                      
				                        <fieldset id="body">
				                            <div class="user-info">
							        			<h4>Hello,<a href="#"> <?php if(isset($_SESSION['userId'])){echo $getNameQueryResultVal;}else{echo 'Username';}  ?></a></h4>
							        			<ul>
							        				<li class="profile active"><a href="profile.php">Profile </a></li>
							        				
	
							        				  <li class="logout"><a href="index.php"> Logout</a></li> 
							        		       <!-- <input name="hoho" type="submit" class="logout"  value="hoho"> -->
   				
							        				
							        				
							        				<div class="clear"></div>		
							        			</ul>
							        		</div>			                            
				                        </fieldset>
				                    </form>
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                  
				                   
				                    
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                 
				                    
				                    
				                    
				                    
				                </div>
				            </div>
				             <div class="profile_img">	
				             	<a href=""><img src=" images/profile_img40x40.jpg" alt="" />	</a>
				             </div>		
				             <div class="clear"></div>		  	
					    </div>	
		 		      <div class="clear"></div>				 
				   </div>
			</div>	  					     
	   </div>	  			
<div id="pt-main" class="pt-perspective">	
<div class="pt-page pt-page-1">   
	
	    <div class="wrap">  		 
	

	    		 <div class="chart">
		               <h3>Drinking Status</h3>
		                  <div class="diagram">
		                  <canvas id="canvas" height="200" width="200"> </canvas>
		                 
		                 </div>				
						<div class="chart_list">
			           	  <ul>
			           	  	<li><a href="#" class="red">Alcohol<p class="percentage">21<em>%</em></p></a></li>
			           	  	<li><a href="#" class="purple">Calories<p class="percentage">48<em>%</em></p></a></li>
			           	  	<li><a href="#" class="yellow">Vitamin C<p class="percentage">9<em>%</em></p></a></li>
			           	  	<li><a href="#" class="blue">Sugar<p class="percentage">32<em>%</em></p></a></li>
			           	  	<div class="clear"></div>	
			           	  </ul>
			           </div>
			           <script>
						var doughnutData = [
								{
									value: 21,
									color:"#E64C65"
								},
								{
									value : 48,
									color : "#11A8AB"
								},							
								{
									value : 32,
									color : "#4FC4F6"
								},	
								{
									value : 9,
									color : "#FCB150"
								},							
							
							];				
							var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);					
					</script>
					
					
					
			
		          </div>


</div>
				  	<div class="addDrink">
					    <form>
					 		<input class="iterateEffects" type="button" value="Drink!" >
					 	</form>
				   </div>
</div>

	<div class="pt-page pt-page-2">   
 <div class="wrap">  		 
	       <div class="column_left">	

				 <div class="column_right_grid sign-in">
				 	<div class="sign_in">
				       <h3>What did you just drink?</h3>
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					    <form>
					    	<span>
					 	    <i><img src=" images/likes.png" alt="" /></i><input type="text" value="Enter the name of the drink" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the name of the drink';}">
					 	    </span>
					 	    <span>
					 	     <i><img src=" images/statistics.png" alt="" /></i>
					 	     <input type="text" value="Enter the volume (ml.)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the volume (ml.)';}">
					 	    </span>
					 	


				   </div>
				 

             </div>
    	
 	 </div>
	 
	 				  	<div class="addDrink">
					  <!--  <form> -->
					 		<input class="iterateEffects" type="button" value="Add!" >
					 	</form>
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
				   </div>
				   
   </div>   
		          </div>
				  
				  
</div>




   					<nav id="menu">
							<ul>
								<li><a href="main.php"><i><img src=" images/invites.png"></i>Home</a></li>
								<li><a href="profile.php"><span><i><img src=" images/user.png"></i>Profile</span></a></li>
						  		<li><a href=" addDrink.html"><span> <i><img src=" images/events.png"></i>History</span><label class="digits">5</label><div class="clear"></div></a></li>
						  		<li><a href="#"><i><img src=" images/favourite.png" alt="" /></i>Favorites</a></li>
						  		<li><a href="#"><span><i><img src=" images/statistics.png"></i>Statistics</span></a></li>		
								<li><a href="#"><i><img src=" images/settings.png" alt="" /></i>Settings</a></li>																
							</ul>
					 </nav>
				

				    
	
		<script src=" js/jquery.dlmenu.js"></script>
		<script src=" js/pagetransitions.js"></script>
	
</body>
</html>

<?php
ob_end_flush();
?>