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
			<menuitem><a href='contactushtml.php'><h3>contact us </h3></a></menuitem>
			<menuitem><a href='aboutus.php'><h3>about us</h3></a></menuitem>
			<menuitem><a href='hotel.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='package.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>information</h3></a></menuitem>
			<menuitem><a href='hotelhistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>		</menu>
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
			<menuitem><a href='loginhtml.php'><h3>logout </h3></a></menuitem>
			<menuitem><a href='contactushtml.php'><h3>contact us </h3></a></menuitem>
			<menuitem><a href='aboutus.php'><h3>about us</h3></a></menuitem>
			<menuitem><a href='hotel.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='package.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>information</h3></a></menuitem>
			<menuitem><a href='hotelhistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>
		</menu>
	</header>
	</div>";
}
?>
<br><br><br><br><br><br><br><br>
<center>
<h2><b>HOTEL HISTORY BOOKING</b></h2>
<?php
if(isset($_POST['submit']))
{
	$con=mysql_connect("localhost","root","");
	if($con)
	{
		$db=mysql_select_db("rajasthan");
		$email=strval($_POST['emailid']);
		
		$sql="select * from hotelbooking where emailid ='$email'";
		$result=mysql_query($sql,$con);
		echo "<html><body><table border=2><tr><th>registration id</th><th>firstname</th><th>lastname
			</th><th>hotelname</th><th>address</th><th>city</th><th>state</th><th>mobileno</th>
			<th>country</th><th>emailid</th><th>checkin</th><th>checkout</th><th>adult</th><th>child</th><th>payment</th>";
		while($row=mysql_fetch_array($result))
		{
			echo "<tr><td>".$row['registrationid']."</td><td>".$row['firstname']."</td><td>".$row['lastname']."</td>
			<td>".$row['hotelname']."</td><td>".$row['address']."</td><td>".$row['city']."</td><td>".$row['state']."</td><td>".
				$row['mobileno']."</td><td>".$row['country']."</td><td>".$row['emailid']."</td><td>".$row['checkin']."</td>
				<td>".$row['checkout']."</td><td>".$row['adult']."</td><td>".$row['child']."</td><td>".$row['payment']."</td>";
		}
		echo "</table></body></html>";	
	
		mysql_close($con);
	}
}
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
			<menuitem><a href='hotelhistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
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
			<menuitem><a href='loginhtml.php'><h3>login</h3></a></menuitem>
			<menuitem><a href='contactushtml.php'><h3>contact us </h3></a></menuitem>
			<menuitem><a href='aboutus.php'><h3>about us</h3></a></menuitem>
			<menuitem><a href='hotel.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='package.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>information</h3></a></menuitem>
			<menuitem><a href='hotelhistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>
		</menu><br><br><br>
		<p> powered by :- keyuri modi </p>
		</footer>
		</div>";
}
?>
</body>
</html>