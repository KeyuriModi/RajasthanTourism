<?php
	if(isset($_POST['submit']))
	{
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("rajasthan",$con);
			$registrationid = intval($_POST['register']);
			$feedbackid = intval($_POST['feedback']);
			$subject = strval($_POST['sub']);
			$message = strval($_POST['msg']);
			$sql = "insert into feedback (registrationid,subject,message)
			values(".$registrationid.",'".$subject."','".$message."')";
			$insert=mysql_query($sql,$con);
			
			if(!$insert)
			{
				echo "check your coonection data not inserted";
			}
			else
			{
				header("location:contactus.html");
			}
			mysql_close($con);
		}
	}
?>
