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
	  <div class="main">  
	    <div class="wrap">  		 
	  
	  		
            <div class="column_middle">

		         <div class="weather">
		               <h3><i><img src=" images/user.png" alt="" /> </i>Profile</h3>

						<div class="temp_list">
				      			<ul>
						  		    <li><a href="#"><span class="day_name">Name: </span>
						  		   
						  			<label class="digits">		<?php if(isset($_SESSION['userId'])){echo $getNameQueryResultVal;}else{echo '-';} ?>				<i></i></label><div class="clear"></div></a></li>
						  			
						  			<li><a href="#"><span class="day_name">Gender: </span>
						  			<label class="digits">		<?php if(isset($_SESSION['userId'])){echo $getGenderQueryResultVal;}else{echo '-';} ?>				<i></i></label><div class="clear"></div></a></li>
									<li><a href="#"><span class="day_name">Age: </span>
						  			<label class="digits">		<?php if(isset($_SESSION['userId'])){echo $getAgeQueryResultVal;}else{echo '-';} ?>				<i></i></label><div class="clear"></div></a></li>
									<li><a href="#"><span class="day_name">Weight: </span>
						  			<label class="digits">		<?php if(isset($_SESSION['userId'])){echo $getWeightQueryResultVal;}else{echo '-';} ?>				<i></i></label><div class="clear"></div></a></li>
									<li><a href="#"><span class="day_name">Height: </span>
						  			<label class="digits">		<?php if(isset($_SESSION['userId'])){echo $getHeightQueryResultVal;}else{echo '-';} ?>				<i></i></label><div class="clear"></div></a></li>
									<li><a href="#"><span class="day_name">BMI:</span>
						  			<label class="digits">		<?php if(isset($_SESSION['userId'])){echo $getBmiQueryResultVal;}else{echo '-';} ?>					<i></i></label><div class="clear"></div></a></li>
				    		</ul>											
				      </div>
		          </div>	           
		         
		       
    	    </div>
    	    
      
    	<div class="clear"></div>
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
					  <div class="copy-right">
				<p>© 2014 Designed by <a href="http://www.dal.ca" target="_blank">Group 13</a>  • Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a> </p>
	 	 </div>   
</body>
</html>

