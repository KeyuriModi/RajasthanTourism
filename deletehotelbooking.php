<?php
	$con=mysql_connect("localhost","root","");
	if($con)
	{
		mysql_select_db("rajasthan",$con);
		$sql="delete from hotelbooking where registrationid =".$_GET['rid'];
		$result=mysql_query($sql,$con);
		if(!$result)
		{
			header("location:managehotelbooking.php");
		}
		else
		{
			header("location:managehotelbooking.php");
		}
		mysql_close($con);
	}
?>
