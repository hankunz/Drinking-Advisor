function findBMI(name)
{
	//Connecting to the database
	$connect=mysqli_connect("db.cs.dal.ca","brisson","B00558916","brisson");

	if(mysqli_connect_errno($connect))
	{
		echo "Failed to connect to MySQL database, sorry bro.";
	}							
	
	$user= mysqli_query($connect,"SELECT weight,height FROM Profile where id = 'name' ");

	var user = <?php echo json_encode($user); ?>
	 
	 
	 
	 var BMI = (user.weight / (user.height*user.height)) * 703;
	 return BMI;
}


function ApproxAlcohol(name)
{

	//Connecting to the database
	$connect=mysqli_connect("db.cs.dal.ca","brisson","B00558916","brisson");

	if(mysqli_connect_errno($connect))
	{
		echo "Failed to connect to MySQL database, sorry bro.";
	}
	
	$user= mysqli_query($connect,"SELECT weight,gender FROM Profile where id = 'name' ");

	var user = <?php echo json_encode($user); ?>
	
  
    var constant1;
    var constant2;
    var count=0;
    var BAC=0;
  
	for(count;count<drinkCount;count++)
	{
		if(drinks[count].alcohol !== 0)
		{
			ethanol = drinks[count].alcohol;
			hoursSince = date.getTime() - drinks[count].time;
			hoursSince = hoursSince/1000/60/60;  //milliseconds to hours
				
			if(user.gendre == 'M')
			{	
				constant1 = 0.7;
				constant2 = 0.1;
			}
			else
			{	
				constant1 = 0.6;
				constant2 = 0.085;
			}
								
			
			BAC += ((ethanol/(user.weight * constant1))*(constant2*hoursSince));
		
		}		
		
		
	}	
	
	
	return BAC;
	
	//pure ethanol drink = (vol (ml)*alcohol*0.8)/100
	//BAC  ethanol wgt/(person wgt * <.7forM   .6forW>)
	//weight = weight* <.1forM  .085forW>
}