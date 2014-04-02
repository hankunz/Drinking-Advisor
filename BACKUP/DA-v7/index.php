<?php ob_start(); 
 // start up your PHP session!
 session_start(); ?>

 <!-- This page is the first page that will be shown when access the web app "Drinking Advisor". It provides a log in page for old users to sign in and also a link to resgitration page for the new users who first time see the app. The sign in function is linked to the database. -->
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
  
</head>
<body>			
<?php require 'php/logIn.php'; ?>
<?php require 'php/logOut.php'; ?>	

    <!-- The main tag that creates a main UI for sign in and sign up -->
	<div class="main">  
	    <div class="wrap">  		 
	       <div class="column_left">	

				<div class="column_right">
            	
					<div class="column_right_grid sign-in">
						<div class="sign_in">
						   <h3>Sign in to your account</h3>
							
							<!-- php code used for sign in function -->
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


							<!-- forget password function is not functional yet -->
							   <h4><a href="main.html">Forget Password?</a></h4>				   
          		       </div>
					   
					   	<!-- The link to the registration page -->
          		 	<div class="signin_facebook">
					<p><a href="registrationPage.php">  <i> </i>New User?</a></p>
				      
				</div>
			</div>
				  

        </div>
    <div class="clear"></div>
		</div>
			</div>   
   				<!-- copyright -->
				<div class="copy-right">
					<p>© 2013 Designed by <a href="http://www.dal.ca" target="_blank">Group 13</a>  • Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a> </p>
				</div>   
</body>
</html>

<?php
ob_end_flush();
?>