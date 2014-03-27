 <?php
				                    
// 				                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
// 				                    
// if the submitted was to logout
// 				                    if(isset($_POST["Logout"])) {
// 				                    unset($_SESSION['userId']); 
// 				                    header("Location: ./index.php");
//    		 							exit();
//    		 							}
//    		 							// other submissions 
//    		 							else{
//    		 							
//    		 							//echo 'ASDASDASDASDASDSADASDASD';
//    		 							}
// 
// 				                    }
				                    
		if(isset($_SESSION['userId'])) {
		unset($_SESSION['userId']); 
		}
			                    
				                    
				                    ?>