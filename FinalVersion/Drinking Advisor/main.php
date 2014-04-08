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
		<link rel="stylesheet" type="text/css" href=" css/multilevelmenu.css" />
		<link rel="stylesheet" type="text/css" href=" css/component.css" />
		<link rel="stylesheet" type="text/css" href=" css/animations.css" />
		<script src=" js/modernizr.custom.js"></script>
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src=" js/jquery.dlmenu.js"></script>
		<script src=" js/pagetransitions.js"></script>
		<script src=" js/DrawGraph.js"></script>
		<script src=" js/AddDrinks.js"></script>
		
	  
 <script src=" js/AddDrinks.js"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=" css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src=" js/jquery.js"></script>
<script type="text/javascript" src=" js/login.js"></script>
<script type="text/javascript" src=" js/Chart.js"></script>
 <script type="text/javascript" src=" js/jquery.easing.js"></script>
 <script type="text/javascript" src=" js/jquery.ulslide.js"></script>
 <script src="js/legend.js"></script>
<script src="js/demo.js"></script>
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
<?php require 'php/addDrinkOptions.php';?>

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
				                      
				                        <fieldset id="body">
				                            <div class="user-info">
							        			<h4>Hello,<a href="#"> <?php if(isset($_SESSION['userId'])){echo $getNameQueryResultVal;}else{echo 'Username';}  ?></a></h4>
							        			<ul>
							        				<li class="profile active"><a href="profile.php">Profile </a></li>
							        				
	
							        				  <li class="logout"><a href="index.php"> Logout</a></li> 
							        		       <!-- <input name="hoho" type="submit" class="logout"  value="hoho"> -->
   				
							        				<script>
													resetDay();
													</script>
							        				
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
	
			<div id="lineChart" class="chart">
					<!--line chart implementation -->
					
		              <h3>Drinking Status</h3>
		                 <div class="diagram">
		                 <canvas id="canvas" height="270px" width="330px;"></canvas>
						 <div id="lineLegend"></div>


	<br>
	
	<?php require 'php/drinkDataExport.php'; ?>
	
	
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
				   
<script> ResetDay(); </script>
<!-- The page for adding a drink-->
<div class="pt-page pt-page-2">   
 	 <div class="wrap">  
 
 		 
	       <div class="column_left">	

				 <div class="column_right_grid sign-in">
				 	<div class="sign_in">
				       <h3>What did you just drink?</h3>
				

					    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
						
					    	<!-- <span>
					 	    <i><img src=" images/likes.png" alt="" /></i>
					 	    <input name="drinkName" type="text" value="Enter the name of the drink. E.g. Orange Juice" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the name of the drink. E.g. Orange Juice';}">
					 	    </span>-->
						
							<span>
							<i style="margin-left:0px"><img src=" images/likes.png" alt="" /></i>
							<select  id = "selectMenu" name ='SelectDrink' onchange="s_click(this)">
							<option>Select the type of the drink</option>	
							<?php echo $options ?>
							<option value = "1">Not here? Add by yourself!</option>
							</select>
							  </span>
							   <script type="text/javascript">
								function s_click(obj) {
									var fileds = document.getElementById("fileds");
									var num = 0;
									for (var i = 0; i < obj.options.length; i++) {
										if (obj.options[i].selected == true) {
											num++;
										}
									}
									if (num == 1) {
										var value = obj.options[obj.selectedIndex].value;
										if(value == 1)
										{											
											fileds.style.display="block";
											}
										else
											fileds.style.display="none";
									}
								}
								
				
							</script>
					 	    
					 	    <span id = "volume">
					 	   
					 	     <input name="drinkVolume" type="text" value="Enter the volume (ml. -> 1 Oz = 29.6 ml)." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the volume (ml. -> 1 Oz = 29.6 ml).';}">
					 	    </span>
							
							
							
							<div id="fileds" style="display:none"  >
									<span>
					 	   
					 	    <input name="drinkName" type="text" value="Enter the name of the drink." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the name of the drink.';}">
					 	    </span>			    	
							
							 <span>
					 	     
					 	     <input name="drinkCalories" type="text" value="Enter the drink's calories" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the drink\'s calories.';}">
					 	    </span>
					 	     <span>
					 	    
					 	     <input name="drinkSugar" type="text" value="Enter the drink's sugar." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the drink\'s sugar.';}">
					 	    </span>
					 	    <span>
					 	     
					 	     <input name="drinkAlcohol" type="text" value="Enter the drink's alcohol percentage." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the drink\'s alcohol percentage.';}">
					 	    </span>
					 	    <span>
					 	     
					 	     <input name="drinkVitaminc" type="text" value="Enter the drink's Vitamin c." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter the drink\'s Vitamin c.';}">
					 	    </span>
							</div>
							    	
					 	   <input id = "addButton" class="iterateEffects" type="submit" value="Add!" >
					 	   
					 	    </form>

				   </div>
				

             </div>

 	 </div>
	  </div>
  	<div class="addDrink">
					    <form>
					 		
					 	</form>
				   </div>
				   
   </div>   
		         
				  
				  
</div>



					<!-- The new side navigation bar-->
   					<nav id="menu">
							<ul>
								<li><a href="main.php"><i><img src=" images/invites.png"></i>Home</a></li>
								<li><a href="profile.php"><span><i><img src=" images/user.png"></i>Profile</span></a></li> 
						  		
								<li><a href="history.php"><i><img src=" images/statistics.png" alt="" /></i>History</a></li>	
																							
							</ul>
					 </nav>
				

				    
	
		<script src=" js/jquery.dlmenu.js"></script>
		<script src=" js/pagetransitions.js"></script>
	

</body>
</html>

<?php
ob_end_flush();
?>
