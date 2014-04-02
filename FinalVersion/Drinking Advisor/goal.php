<?php ob_start(); 
 // start up your PHP session!
 session_start();
  ?>


<!-- This page creates a profile page to show the users' information and some healthy status calculated from the info.-->
<!DOCTYPE HTML>
<head>
<title>Drinking Advisor - Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href=" css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src=" js/jquery.js"></script>
<script type="text/javascript" src=" js/login.js"></script>
<script type="text/javascript" src=" js/Chart.js"></script>
 <script type="text/javascript" src=" js/jquery.easing.js"></script>
 <script type="text/javascript" src=" js/jquery.ulslide.js"></script>
  <script src=" js/FindInfo.js"></script>
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
				                    
				                    
				                    
				                    
				                      <!-- show user info. -->             
				                      <form id="loginForm" name="loginForm" >
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
	  <div class="main">  
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
    	    
      
    	<div class="clear"></div>
 	 </div>
   </div> 
		<!-- The side navigation bar-->   
   					<nav id="menu">
							<ul>
								<li><a href="main.php"><i><img src=" images/invites.png"></i>Home</a></li>
								<li><a href="profile.php"><span><i><img src=" images/user.png"></i>Profile</span></a></li> 
						  		<li><a href="goal.php"><span><i><img src=" images/statistics.png"></i>Goals</span></a></li>		
								<li><a href="history.php"><i><img src=" images/statistics.png" alt="" /></i>History</a></li>																
							</ul>
					 </nav>
					  <div class="copy-right">
				<p>© 2014 Designed by <a href="http://www.dal.ca" target="_blank">Group 13</a>  • Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a> </p>
	 	 </div>   
</body>
</html>

