<?php
date_default_timezone_set('America/New_York');
	if(isset($_POST['submit']))
	{
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("rajasthan",$con);
			$firstname = ($_POST['fname']);
			$lastname = ($_POST['lname']);
			$packagename =($_POST['pname']);
			$address = ($_POST['address']);
			$city = ($_POST['city']);
			$state = ($_POST['state']);
			$mobileno = ($_POST['mno']);
			$country = $_POST['country'];
			$email= ($_POST['emailid']);
			$numofchild = $_POST['child'];
			$numofadult = $_POST['adult'];
			$payment =strval($_POST['payment']);
			
			$sql = "insert into packagebooking(firstname,lastname,packagename,address,city,state,mobileno,country,
			emailid,adult,child,payment)values('".$firstname."','".$lastname."','".$packagename."',
			'".$address."','".$city."','".$state."',".$mobileno.",'".$country."','".$email."',".$numofadult.",
			".$numofchild.",'".$payment."')";
			
			$insert=mysql_query($sql,$con);
			if(!$insert)
			{
				header("location:packagebookinghtml.php");
			}
			else
			{	
				header("location:packagebookinghtml.php");
			}
			mysql_close($con);
		}
	}
?>