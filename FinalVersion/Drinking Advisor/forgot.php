<?php ob_start(); 
 // start up your PHP session!
 session_start(); 


require 'php/mysqlConnection.php';

$email		= $_POST['email'];

if(isset($email)){

 $query		= "SELECT * FROM Login WHERE Email='$email'";
 $result	= mysqli_query($con, $query);


	$rows	= mysqli_fetch_array($result);
	$pass	= $rows['Password'];
	$to		= $rows['Email'];
	$uid	= $rows['Id'];
	$from	= "Drinking Advisor App Team";
	
	
	$query_id		= "SELECT * FROM Profile where Id='$uid'";
	$result_id		= mysqli_query($con, $query_id);
	$row_id			= mysqli_fetch_array($result_id);
	$username		= $row_id['Name'];
	
	$success_msg	="Your Password was sent successfully";
		
		
	$body	= "
	Hello $username,
	</br>
	Your username  : $to
	</br>
	Your Password  : $pass
	</br>
	</br>
	Sincerely,
	</br>
	Drinking Advisor App Team";
	$from = "DrinkingAdvisor@group13.com";
	$subject = "Password Recovered";
	$headers1 = "From: $from\n";
	$headers1 .= "Content-type: text/html;charset=iso-8859-1\r\n";
	$headers1 .= "X-Priority: 1\r\n";
	$headers1 .= "X-MSMail-Priority: High\r\n";
	$headers1 .= "X-Mailer: Just My Server\r\n";
	$sentmail = mail ( $to, $subject, $body, $headers1 );

}
 
 
 ?>

<!DOCTYPE HTML>
<head>
<title>Drinking Advisor</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=" css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src=" js/jquery.js"></script>
<script type="text/javascript" src=" js/login.js"></script>
<script type="text/javascript" src=" js/Chart.js"></script>
 <script type="text/javascript" src=" js/jquery.easing.js"></script>
 <script type="text/javascript" src=" js/jquery.ulslide.js"></script>
  
</head>
<body>			
<?php require 'php/forget.php'; ?>

	<div class="main">  
	    <div class="wrap">  		 
	       <div class="column_left">	

				<div class="column_right">
            	
					<div class="column_right_grid Forgot_Password">
						<div class="sign_in">
						  
						  
						   <h3>Email your password</h3>
			

							 <form id="formElem" name="formElem" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
								<span>
								<i><img src=" images/mail.png" alt="" /></i><input name="email" type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
								</span>
								
								<input type="submit" id="addButton" class="my-button"  value="submit">
							</form>


							<?php  if($sentmail==1){
										echo"<span style='color: #ff0000;'>$success_msg</span>";
								}
							if(isset($noEmail)){echo "<span style='color: #ff0000;'>$noEmail</span>";} ?>
							   		
	</div>
	</div>	  
        </div>
    <div class="clear"></div>
		</div>
		</div>   
   				  
</body>
</html>

<?php
ob_end_flush();
?>