<?php
	session_start();
	$user_check=$_SESSION['uname'];
	if ($user_check=="$username");
?>
<html>
<head>
	<style>
	h2{font-size : 30;}
	body{background-image : url("backgroundimg.jpg")}
	table tr td{font-weight : bold;}
	menu {margin : 0}
		menu menuitem{float:right;}
		menu menuitem {padding: 20px ;
				list-style : none;}
		h1{text-transform:uppercase;}
		pre{font-family:serif;font-size:18px;}
	</style>
</head>
<body>
<?php
if(isset($_SESSION['uname']))
{
	echo"<div floatleft>
	<header>
		<h4 style='float:right'>Hello $user_check</h4>
		<h1 style='font-family:Colonna MT;font-style:italic;font-size:70px;'>
		<input type='image' onClick='parent.location='adminhomepage.php'' src='website symbole.jpg' height='100' width='100' style='border-radius:50px'></img>
			<b>rajasthan tourism </b>
		</h1>
		<menu>
			<menuitem><a href='loginhtml.php'><h3>logout </h3></a></menuitem>
			<menuitem><a href='feedbackhtml.php'><h3>feedback</h3></a></menuitem>
			<menuitem><a href='manageregistration.php'><h3>user </h3></a></menuitem>
			<menuitem><a href='managehoteldetails.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='managepackagedetails.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>infomation</h3></a></menuitem>
			<menuitem><a href='adminhomepage.php'><h3>home</h3></a></menuitem>
		</menu>
	</header>
	</div>";
}
else
{
	echo"<div floatleft>
	<header>
		<h4 style='float:right'>Hello $user_check</h4>
		<h1 style='font-family:Colonna MT;font-style:italic;font-size:70px;'>
		<input type='image' onClick='parent.location='adminhomepage.php'' src='website symbole.jpg' height='100' width='100' style='border-radius:50px'></img>
			<b>rajasthan tourism </b>
		</h1>
		<menu>
			<menuitem><a href='loginhtml.php'><h3>login</h3></a></menuitem>
			<menuitem><a href='feedbackhtml.php'><h3>feedback</h3></a></menuitem>
			<menuitem><a href='manageregistration.php'><h3>user </h3></a></menuitem>
			<menuitem><a href='managehoteldetails.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='managepackagedetails.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>infomation</h3></a></menuitem>
			<menuitem><a href='adminhomepage.php'><h3>home</h3></a></menuitem>
		</menu>
	</header>
	</div>";
}
?>
<br><br><br><br><br><br><br><br>
<center>
<h2><b>EDIT PACKAGE</b></h2>
<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("rajasthan");
	$sql="select * from packagedetails where packageid =".$_GET['pid'] ;
	$result=mysql_query($sql,$con);
	echo"<html><body><center><form action='$_PHP_SELF' method='POST'><table cellpadding=10>";
	while($row=mysql_fetch_array($result))
	{
		echo"<tr>
				<td>package name<input type='text' value=".$row['packagename']." name='pname'></td>
			</tr>
			<tr>
				<td>daynight<input type='text' value=".$row['daynight']." name='daynight'></td>
			</tr>
			<tr>
				<td>photo<img src='".$row['photo']."' height='100' width='200'></img></td>
			</tr>
			<tr>
				<td>placecovered<input type='text' value=".$row['placecovered']." name='place'></td>
			</tr>
			<tr>
				<td>overview<input type='text' value=".$row['overview']." name='overview'></td>
			</tr>
			<tr>
				<td>costinclude<input type='text' value=".$row['costinclude']." name='costinclude'></td>
			</tr>
			<tr>
				<td>costnotinclude<input type='text' value=".$row['costnotinclude']." name='costnotinclude'></td>
			</tr>
			<tr>
				<td><input type='submit' name='submit' value='editpackage'></td>
			</tr>";
	}
	echo"</table></form></center></body></html>";
	if(isset($_POST['submit']))
	{
			$con=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("rajasthan",$con);
			$packagename = strval($_POST['pname']);
			$daynight = strval($_POST['daynight']);
			$placecovered = strval($_POST['place']);
			$overview = strval($_POST['overview']);
			$costinclude = strval($_POST['costinclude']);
			$costnotinclude = strval($_POST['costnotinclude']);
			$sql="update packagedetails set packagename='".$packagename."',daynight='".$daynight."',
				placecovered='".$placecovered."',overview='".$overview."',costinclude='".$costinclude."',
				costnotinclude='".$costnotinclude."' where packageid=".$_GET['pid'];
			$result=mysql_query($sql,$con);
				if(!$result)
				{
					//header("location:managepackadetails.php");
					?>
					<script type="text/javascript">
					window.location = "managepackagedetails.php";
					</script>
					<?php
				}
				else
				{
					//header("location:managepackadetails.php");
					?>
					<script type="text/javascript">
					window.location = "managepackagedetails.php";
					</script>
					<?php
				}
			mysql_close($con);
		}
	}
?>
</center>
<?php
if(isset($_SESSION['uname']))
{
	echo"<div floatleft>
		<footer>
		<menu>
			<menuitem><a href='loginhtml.php'><h3>logout</h3></a></menuitem>
			<menuitem><a href='feedbackhtml.php'><h3>feedback</h3></a></menuitem>
			<menuitem><a href='manageregistration.php'><h3>user </h3></a></menuitem>
			<menuitem><a href='managehoteldetails.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='managepackagedetails.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>infomation</h3></a></menuitem>
			<menuitem><a href='adminhomepage.php'><h3>home</h3></a></menuitem>
		</menu><br><br><br>
		<p> powered by :- keyuri modi </p>
		</footer>
		</div>";
}
else
{
	echo"<div floatleft>
		<footer>
		<menu>
			<menuitem><a href='loginhtml.php'><h3>login</h3></a></menuitem>
			<menuitem><a href='feedbackhtml.php'><h3>feedback</h3></a></menuitem>
			<menuitem><a href='manageregistration.php'><h3>user </h3></a></menuitem>
			<menuitem><a href='managehoteldetails.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='managepackagedetails.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>infomation</h3></a></menuitem>
			<menuitem><a href='adminhomepage.php'><h3>home</h3></a></menuitem>
		</menu><br><br><br>
		<p> powered by :- keyuri modi </p>
		</footer>
		</div>";
}
?>
</body>
</html>