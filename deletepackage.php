<?php
	$con=mysql_connect("localhost","root","");
	if($con)
	{
		mysql_select_db("rajasthan",$con);
		$sql="delete from packagedetails where packageid =".$_GET['pid'];
		$result=mysql_query($sql,$con);
		if(!$result)
		{
			header("location:managepackagedetails.php");
		}
		else
		{
			header("location:managepackagedetails.php");
		}
		mysql_close($con);
	}
?>
