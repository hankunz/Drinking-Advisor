<?php ob_start(); 
 ?>
 
 
<!-- This page provides a interface for user registration. Users can register themselves with their personal information.
 All information is stored into a database and used for login and further calculation.-->
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <head>
        <title>Drinking Advisor - Registration Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Registration Page" />
        <link rel="stylesheet" href="css/registrationPage.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="sliding.form.js"></script>
    </head>
    
   
    <body>
                    
        <?php       
		
		require 'php/formInsertion.php';
		
		?>            
                    

<!-- The main tag which creates the UI window-->
	  <div class="main">  
	    <div class="wrap">  		 
            <div class="column_middle">		       
		               <h3 id="title">Drinking Advisor</h3>
		
   <div id="content">
       
            <div id="wrapper">
                <div id="steps">
                       <form id="formElem" name="formElem" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <fieldset class="step">
                            <legend>Intro</legend>
                            <p style = "font-size:26px;">
                                <?php if(!empty($existingAccountError)){echo $existingAccountError;}else{echo "The drink advisor is an application that can keep track of users' daily drinking condition and analyse the users’ healthy status from it.";} ?> 
                             
                            </p>
                        </fieldset>
						
						<!-- The page that asks for personal details -->
                        <fieldset class="step">
                            <legend>Personal Details</legend>
                            <p>
                                <label for="name">Full Name</label>
                                <input id="name" name="name" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            
                            <!-- added password field -->
                             <p>
                                <label for="password">Password </label>
                                <input id="password" name="password" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            
                            
                            <p>
                                <label for="country">Country</label>
                                <input id="country" name="country" type="text" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                            	<!-- edited label for email -->
                                <label for="email">Email</label>
                                <input id="email" name="email" placeholder="e.g. drink@gmail.com" type="text" AUTOCOMPLETE=OFF />
                            </p>

                        </fieldset>
						
						<!-- The page that asks for Body details -->
                        <fieldset class="step">
                            <legend>Body Details</legend>
							 <p>
                                <label for="age">Age</label>
                                <input id="age" name="age" placeholder="e.g. 20" type="tel" AUTOCOMPLETE=OFF />
                            </p>
                            <p>
                                <label for="gender">Gender</label>
								    <select id="genderType" name="genderType">
                                    <option>Male</option>
                                    <option>Female</option>
                                 
                                </select>
                               
                            </p>
                            <p>
                                 <label for="height">Height (cm.)</label>
                                <input id="height" name="height" type="text" AUTOCOMPLETE=OFF />
                         
                            </p>
                            <p>
                                <label for="weight">Weight (kg.)</label>
                                <input id="weight" name="weight" type="text" AUTOCOMPLETE=OFF />
                            </p>

                        </fieldset>

						<!-- The page that cofirms the registration -->
						<fieldset class="step">
                            <legend>Confirm</legend>
							<p>
								Everything in the form was correctly filled 
								if all the steps have a green checkmark icon.
								A red checkmark icon indicates that some field 
								is missing or filled out with invalid data. In this
								last step the user can confirm the submission of
								the form.
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit">Start</button>
                            </p>
                        </fieldset>
                    </form>  
                </div>
				
				<!-- The navigation at the buttom-->
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Instruction</a>
                        </li>
                        <li >
                            <a href="#">Personal Info.</a>
                        </li>
                        <li>
                            <a href="#">Body Details</a>
                        </li>

						<li>
                            <a href="#">Confirm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
				      </div>
		          </div>	           
		         
		       
    	    </div>
    	    
      
    	<div class="clear"></div>
 
 

        
        
        
        
    </body>
</html>
<?php
ob_end_flush();
?>