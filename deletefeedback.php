<?php
	$con=mysql_connect("localhost","root","");
	if($con)
	{
		mysql_select_db("rajasthan",$con);
		$sql="delete from feedback where registrationid =".$_GET['rid'];
		$result=mysql_query($sql,$con);
		if(!$result)
		{
			header("location:managefeedback.php");
		}
		else
		{
			header("location:managefeedback.php");
		}
		mysql_close($con);
	}
?>
