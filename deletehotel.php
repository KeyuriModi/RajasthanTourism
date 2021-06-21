<?php
	$con=mysql_connect("localhost","root","");
	if($con)
	{
		mysql_select_db("rajasthan",$con);
		$sql="delete from hoteldetails where hotelid =".$_GET['hid'];
		$result=mysql_query($sql,$con);
		if(!$result)
		{
			header("location:managehoteldetails.php");
		}
		else
		{
			header("location:managehoteldetails.php");
		}
		mysql_close($con);
	}
?>
