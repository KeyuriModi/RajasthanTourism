<?php
	if(isset($_POST['submit']))
	{
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("rajasthan",$con);
	      	$subject = strval($_POST['sub']);
			$message = strval($_POST['msg']);
			$sql = "insert into feedback (subject,message)values('".$subject."','".$message."')";
			$insert=mysql_query($sql,$con);
			
			if(!$insert)
			{
				echo "check your coonection data not inserted";
			}
			else
			{
				header("location:managefeedback.php");
			}
			mysql_close($con);
		}
	}
?>
