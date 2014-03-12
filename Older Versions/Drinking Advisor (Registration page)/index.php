<!-- V2 -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <head>
        <title>Registration Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Registration Page" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="sliding.form.js"></script>
    </head>
    
   
    <body>

<?php
// form variables
$fullName=$password=$country=$email=$age=$gender=$height=$weight=$id='';

// a function that will strip any html or script tags
function preventScript($data)
{
     
     $data = htmlspecialchars($data);
     return $data;
}
?>






        <div id="content">
            <h1 style="color:black;">Drinking Advisor</h1>
            <div id="wrapper">
                <div id="steps">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <form id="formElem" name="formElem" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <fieldset class="step">
                            <legend>Intro</legend>
                            <p style = "font-size:26px;">
                                The drink advisor is an application that can keep track of users' daily drinking condition and analyse the users’ healthy status from it. 
                             
                            </p>
                        </fieldset>
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
                    
                    
                    
                    
                    
                    
                    
                    
                    
        <?php       
		require 'php/mysqlConnection.php';
		require 'php/formInsertion.php';

		


?>            
                    
                    
                    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                    
                    
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Instruction</a>
                        </li>
                        <li>
                            <a href="#">Personal Details</a>
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
        
        

        
        
        
        
    </body>
</html>
