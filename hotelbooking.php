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
			$hotelname =($_POST['hname']);
			$address = ($_POST['address']);
			$city = ($_POST['city']);
			$state = ($_POST['state']);
			$mobileno = ($_POST['mno']);
			$country = $_POST['country'];
			$email= ($_POST['emailid']);
			$checkin = $_POST['in'];
			$checkout = $_POST['out'];
			$numofchild = $_POST['child'];
			$numofadult = $_POST['adult'];
			$payment = $_POST['payment'];
			
			$sql = "insert into hotelbooking(firstname,lastname,hotelname,address,city,state,mobileno,country,
			emailid,checkin,checkout,adult,child,payment)values('".$firstname."','".$lastname."','".$hotelname."',
			'".$address."','".$city."','".$state."',".$mobileno.",'".$country."','".$email."','".$checkin."',
			'".$checkout."',".$numofadult.",".$numofchild.",'".$payment."')";
			
			$insert=mysql_query($sql,$con);
			if(!$insert)
			{
				header("location:hotelbookinghtml.php");
			}
			else
			{	
				header("location:hotelbookinghtml.php");
			}
			mysql_close($con);
		}
	}
?>