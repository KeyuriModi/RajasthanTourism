<?php
	session_start();
	$user_check=$_SESSION['uname'];
	if ($user_check=="$username");
?>
<html>
<head>
   <style>
		menu {margin : 0}
		menu menuitem{float:right;}
		menu menuitem {padding: 20px ;
				list-style : none;}
		body{background-image : url("backgroundimg.jpg")}
		h1{text-transform:uppercase;font-size:40;}
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
		<input type='image' onClick='parent.location='homepage.php''  src='website symbole.jpg' height='100' width='100' style='border-radius:50px'>
			<b>rajasthan tourism </b>
		</h1>
		<menu>
			<menuitem><a href='loginhtml.php'><h3>logout </h3></a></menuitem>
			<menuitem><a href='contactushtml.php'><h3>contact us </h3></a></menuitem>
			<menuitem><a href='aboutus.php'><h3>about us</h3></a></menuitem>
			<menuitem><a href='hotel.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='package.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>information</h3></a></menuitem>
			<menuitem><a href='packagehistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>
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
		<input type='image' onClick='parent.location='homepage.php''  src='website symbole.jpg' height='100' width='100' style='border-radius:50px'>
			<b>rajasthan tourism </b>
		</h1>
		<menu>
			<menuitem><a href='loginhtml.php'><h3>logout </h3></a></menuitem>
			<menuitem><a href='contactushtml.php'><h3>contact us </h3></a></menuitem>
			<menuitem><a href='aboutus.php'><h3>about us</h3></a></menuitem>
			<menuitem><a href='hotel.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='package.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>information</h3></a></menuitem>
			<menuitem><a href='packagehistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>
		</menu>
		</header>
		</div>";
}
?>
<br><br><br><br>
<center><h1>package</h1></center>
<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("rajasthan");
	$pn = $_GET['pname'];
	
	$sql="select * from packagedetails where packagename = '$pn'";
	$result=mysql_query($sql,$con);
	echo "<html><body><form action='packagebookinghtml.php' method='POST'>";
	while($row=mysql_fetch_array($result))
	{
	
		echo "<h2 style='text-transform:uppercase;'align='center'>".$row['packagename']."</h2>
			  <center>".$row['daynight']."<br>Places Covered : ".$row['placecovered']."</center>
			<h4>package id :".$row['packageid']."</h4>
			<table cellspacing='50'>
			<tr>
				<td><img src=".$row['photo']." height='300' width='300'></img></td>
				<center><input type='submit' name='booking' value='book now'></center> 
				<td><h3><b>overview</b></h3><br>".$row['overview']."</td>
			</tr>
			</table>
			<center>
			<table>
			<tr>
				<td><h3><b>Package Cost Includes</b></h3>
				<pre>".$row['costinclude']."</pre></td>
			</tr>
			<tr>
				<td><h3><br><b>Package Cost Does Not Includes</b></h3>
				<pre>".$row['costnotinclude']."</pre></td>
			</tr>
			<tr>
				<td><b><br><pre>Note : - RTDC Hotel Check-in Time is 12.00 Noon, Early check-in can be permitted between 6am and 
12noon on subject to availability of rooms & payment of 20% of tariff of room will be charged as per reservation policy.
Cancellation Rules: - As per Accommodation rules.</pre></b>
			</td>
			</tr>
			</table><br><br>
			</center>";
	}
	echo"</form></body></html>";
	mysql_close($con);
?>
<?php
if(isset($_SESSION['uname']))
{
	echo"<div floatleft>
	<footer>
		<menu>
			<menuitem><a href='loginhtml.php'><h3>logout </h3></a></menuitem>
			<menuitem><a href='contactushtml.php'><h3>contact us </h3></a></menuitem>
			<menuitem><a href='aboutus.php'><h3>about us</h3></a></menuitem>
			<menuitem><a href='hotel.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='package.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>information</h3></a></menuitem>
			<menuitem><a href='packagehistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>
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
			<menuitem><a href='loginhtml.php'><h3>logout </h3></a></menuitem>
			<menuitem><a href='contactushtml.php'><h3>contact us </h3></a></menuitem>
			<menuitem><a href='aboutus.php'><h3>about us</h3></a></menuitem>
			<menuitem><a href='hotel.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='package.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>information</h3></a></menuitem>
			<menuitem><a href='packagehistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>
		</menu><br><br><br>
		<p> powered by :- keyuri modi </p>
	</footer>
	</div>";
}
?>
</body>
</html>