<?php ob_start(); 
 // start up your PHP session!
 session_start(); ?>
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=" css/signin.css" rel="stylesheet" type="text/css" media="all"/>
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
  
</head>
<body>			
<?php require 'php/logIn.php'; ?>
<?php require 'php/logOut.php'; ?>	



       			 
	  <div class="main">  
	    <div class="wrap">  		 
	       <div class="column_left">	

           
    	    
            <div class="column_right">
            	
				 <div class="column_right_grid sign-in">
				 	<div class="sign_in">
				       <h3>Sign in to your account</h3>
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
				       
					     <form id="formElem" name="formElem" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					    	<span>
					 	    <i><img src=" images/mail.png" alt="" /></i><input name="email" type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
					 	    </span>
					 	    <span>
					 	     <i><img src=" images/lock.png" alt="" /></i>
					 	     <input name="password" type="password" placeholder="password">
					 	    </span>
					 		<a href="main.html"><input type="submit" class="my-button"  value="Sign In"></a>
					 	</form>
					 	
					 	
					 	
					 	
			
						<?php if(isset($noEmail)){echo $noEmail;}else if(isset($noPassword)){echo $noPassword;}else if(isset($noAccount)){echo $noAccount;}else if(isset($wrongPassword)){echo $wrongPassword;} ?>

					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					 	
					       <h4><a href="main.html">Forget Password?</a></h4>				   
          		       </div>
          		 	  <div class="signin_facebook">
					   	 <p><a href="registrationPage.php">  <i> </i>New User?</a></p>
				      </div>
				   </div>
				  
		
		
             </div>
    	<div class="clear"></div>
 	 </div>
   </div>   
   					
					  <div class="copy-right">
				<p>© 2013 Designed by <a href="http://www.dal.ca" target="_blank">Group 13</a>  • Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a> </p>
	 	 </div>   
</body>
</html>

<?php
ob_end_flush();
?>