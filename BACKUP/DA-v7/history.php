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
	  
	  		<!-- show user profile -->
            <div class="column_middle">

		         <div class="weather">
		               <h3><i><img src=" images/user.png" alt="" /> </i>Profile</h3>
					   <?php require 'php/drinkDataExport.php'; ?>
					   
					   
					   

						<div class="temp_list">
				      			<ul>		  		    									
									<li><a href="#"><span class="day_name"></span>
									<script>document.write("Drink&nbsp&nbspVolume&nbsp&nbspCalories&nbsp&nbspSugar&nbsp&nbspAlcohol<br/>");
									for(var i = 0; i<userDrinksArray.length; i++)
									{
									document.write(userDrinksArray[i].name+ "&nbsp&nbsp" + userDrinksArray[i].volume+ "&nbsp&nbsp" + userDrinksArray[i].calories+
									"&nbsp&nbsp"+ userDrinksArray[i].sugar+ "&nbsp&nbsp" +userDrinksArray[i].alcohol + "<br/>");
									
									}
									
									</script>
									<i></i></label><div class="clear"></div></a></li>
			
				    		</ul>											
				      </div>
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

