<?php
	
		
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("rajasthan",$con);
			
     		$sql="delete from registration where registrationid = ".$_GET['rid'];
			$result = mysql_query($sql,$con);
			
				if(!$result)
				{
					header("location:manageregistration.php");
					
				}
				else
				{
					header("location:manageregistration.php");
				}
       		mysql_close($con);
		}
	
?>