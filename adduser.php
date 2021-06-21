<?php
date_default_timezone_set('America/New_York');
	if(isset($_POST['submit']))
	{
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("rajasthan",$con);
			$username = strval($_POST['uname']);
			$password = strval($_POST['pass']);
			$firstname = strval($_POST['fname']);
			$middlename = strval($_POST['mname']);
			$lastname = strval($_POST['lname']);
			$address = strval($_POST['address']);
			$mobileno = intval($_POST['mno']);
			$bdate = $_POST['bday'];
			$gender = strval($_POST['gender']);
			$email = strval($_POST['emailid']);
			$city = strval($_POST['city']);
			$state = strval($_POST['state']);
			$country = strval($_POST['country']);
			
			$sql = "insert into registration(username,password,firstname,middlename,lastname,address,mobileno,
			bdate,gender,email,city,state,country)values('".$username."','".$password."','".$firstname."','".$middlename."',
			'".$lastname."','".$address."',".$mobileno.",'".$bdate."','".$gender."','".$email."',
			'".$city."','".$state."','".$country."')";
			$insert = mysql_query($sql,$con);
			if(!$insert)
			{
				header("location:adduserhtml.php");
			}
			else
			{
					header("location:manageregistration.php");
					
			}
			mysql_close($con);
		}
	}
?>