<?php
	$con=mysql_connect("localhost","root","");
	if($con)
	{
		mysql_select_db("rajasthan",$con);
		$sql="delete from packagebooking where packageid =".$_GET['pid'];
		$result=mysql_query($sql,$con);
		if(!$result)
		{
			header("location:managepackagebooking.php");
		}
		else
		{
			header("location:managepackagebooking.php");
		}
		mysql_close($con);
	}
?>
