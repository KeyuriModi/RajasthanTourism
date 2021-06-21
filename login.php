<?php 
	SESSION_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("rajasthan");
	$result=mysql_query("select * from registration",$con);
	while($row=mysql_fetch_array($result))
	{
		if(isset($_POST['submit']))
		{
			if($_POST['uname']=="keyuri" and $_POST['pass']=="modi")
			{
				$_SESSION['uname']=$_POST['uname'];
				header("location:adminhomepage.php");
			}
			elseif($_POST['uname']==$row['username'] and $_POST['pass']==$row['password'])
			{
				$_SESSION['uname']= $_POST['uname'];
				header("location:homepage.php");
			}
		}
	}
mysql_close($con);
?>