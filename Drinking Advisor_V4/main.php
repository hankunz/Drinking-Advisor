<?php ob_start(); 
 // start up your PHP session!
 session_start();
  ?>
<!-- This page is the main UI of the application. It provides a side navigation bar to switch from different pages and also a main page to keep track of 
 	users' daily drinking status.	-->
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

  <link type="text/css" href=" css/mmenu.css" rel="stylesheet" media="all" />
<script type="text/javascript" src=" js/jquery.mmenu.min.js"></script>
<script type="text/javascript">
		$(function() {
			$('nav#menu').mmenu();
		});
	</script>
</head>
<body>			



<?php require 'php/dataRetrieval.php';?>
<?php require 'php/drinkInsertion.php';?>
<?php require 'php/drinkDataExport.php';?>

<!-- main tag for the UI -->
	    <div class="wrap">	 
	      <div class="header">
	      	  <div class="header_top">
	      	     	<div class="menu-ico"><a href="#menu"></a></div>
					  <div class="profile_details">
				    		   <div id="loginContainer">
				                  <a id="loginButton" class=""><span>Me</span></a>   
				                    <div id="loginBox">                
				                     
				                     
				                     
				                     <form id="loginForm" name="loginForm" >
				                     
				                      <!-- show user info. -->
				                      
				                        <fieldset id="body">
				                            <div class="user-info">
							        			<h4>Hello,<a href="#"> <?php if(isset($_SESSION['userId'])){echo $getNameQueryResultVal;}else{echo 'Username';}  ?></a></h4>
							        			<ul>
							        				<li class="profile active"><a href="profile.php">Profile </a></li>
							        				
	
							        				  <li class="logout"><a href="index.php"> Logout</a></li> 
							        		      
   				
							        				
							        				
							        				<div class="clear"></div>		
							        			</ul>
							        		</div>			                            
				                        </fieldset>
				                    </form>				                  
				                
				                </div>
				            </div>
				             <div class="profile_img">	
				             	<img src=" images/logo.jpg"  alt="logo" class="logoPic" />	
				             </div>		
				             <div class="clear"></div>		  	
					    </div>	
		 		      <div class="clear"></div>				 
				   </div>
			</div>	  					     
	   </div>	  			

	
	
		<!-- The window that use a line chart to keep track of users daily drinking status -->
 	<div id="pt-main" class="pt-perspective">	
 	<div class="pt-page pt-page-1">   
 
	    <div class="wrap">  		 
	

						    		 
						    		 <!--line chart implementation -->
 									<div class="chart">
 
		               <h3>Drinking Status</h3>
		                  <div class="diagram">
		                  <canvas id="canvas" height="300" width="450"></canvas>


	<script>
 
 						var lineChartData = {
 							labels : ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
 							datasets : [
 								{
 									fillColor : "rgba(91,95,214,0.5)",
 									strokeColor : "rgba(220,220,220,1)",
 									pointColor : "rgba(220,220,220,1)",
 									pointStrokeColor : "#fff",
 									data : [65,59,90,81,56,55,70]
 								},
 								{
 									fillColor : "rgba(8,163,0,0.5)",
 									strokeColor : "rgba(151,187,205,1)",
 									pointColor : "rgba(151,187,205,1)",
 									pointStrokeColor : "#fff",
 									data : [28,38,48,70,28,08,2]
 								}
 							]
 							
 						}
 
 						var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
 					
 					</script>
		          </div>
		          
		          
<!-- add drink error messages -->		          
<?php require 'php/addDrinkErrors.php';?>


</div>
					
			
		          </div>


				<!-- button to add a drink-->
				  	<div class="addDrink">
					    <form>
					 		<input class="iterateEffects" type="button" value="Drink!" >
					 	</form>
				   </div>
				   	   </div>
				   


<!-- The page for adding a drink-->
 	<div class="pt-page pt-page-2">   
 	 <div class="wrap">  
 
 		 
	       <div class="column_left">	

				 <div class="column_right_grid sign-in">
				 	<div class="sign_in">
				       <h3>What did you just drink?</h3>
				
					    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
					    	<span>
					 	    <i><img src=" images/likes.png" alt="" /></i>
					 	    <input name="drinkName" type="text" value="Enter the name of the drink. E.g. Orange Juice" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the name of the drink. E.g. Orange Juice';}">
					 	    </span>
					 	    <span>
					 	     <i><img src=" images/statistics.png" alt="" /></i>
					 	     <input name="drinkVolume" type="text" value="Enter the volume (ml.). E.g. 355" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the volume (ml.). E.g. 355';}">
					 	    </span>
					 	    <span>
					 	     <i><img src=" images/statistics.png" alt="" /></i>
					 	     <input name="drinkCalories" type="text" value="Enter the drink's calories. E.g. 50" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the drink\'s calories. E.g. 50';}">
					 	    </span>
					 	     <span>
					 	     <i><img src=" images/statistics.png" alt="" /></i>
					 	     <input name="drinkSugar" type="text" value="Enter the drink's sugar. E.g. 20" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the drink\'s sugar. E.g. 20';}">
					 	    </span>
					 	    <span>
					 	     <i><img src=" images/statistics.png" alt="" /></i>
					 	     <input name="drinkAlcohol" type="text" value="Enter the drink's alcohol percentage. E.g. 5" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the drink\'s alcohol percentage. E.g. 5';}">
					 	    </span>
					 	    <span>
					 	     <i><img src=" images/statistics.png" alt="" /></i>
					 	     <input name="drinkVitaminc" type="text" value="Enter the drink's Vitamin c. E.g. 3" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the drink\'s Vitamin c. E.g. 3';}">
					 	    </span>
					 	    
					 	    
					 	


				   </div>
				 

             </div>
    	
 	 </div>
	 
	 				  	<div class="addDrink">
					  <!--  <form> -->
					 		<input class="iterateEffects" type="submit" value="Add!" >
					 	</form>		
					 	
					 				 				 	
	
				   </div>
				   
   </div>   
		          </div>
				  
				  
</div>



					<!-- The new side navigation bar-->
   					<nav id="menu">
							<ul>
								<li><a href="main.php"><i><img src=" images/invites.png"></i>Home</a></li>
								<li><a href="profile.php"><span><i><img src=" images/user.png"></i>Profile</span></a></li>
						  		<li><a href="#"><span><i><img src=" images/statistics.png"></i>Statistics</span></a></li>		
																							
							</ul>
					 </nav>
				

				    
	
		<script src=" js/jquery.dlmenu.js"></script>
		<script src=" js/pagetransitions.js"></script>
	

</body>
</html>

<?php
ob_end_flush();
?>
