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
		h1{text-transform:uppercase;}
		pre{font-family:serif;font-size:18px;}
	</style>
</head>
<body bgcolor="#99FFFF">
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
<div>
<marquee>
	<img src="pic4.jpg" width="500" height="300"></img>
	<img src="pic2.jpg" width="500" height="300"></img>
	<img src="pic1.jpg" width="500" height="300"></img>
	<img src="pic3.jpg" width="500" height="300"></img>
</marquee>
</div>
<input type="image" onClick="parent.location='managehoteldetails.php'" src="hotelsymbole.jpg" width="200" height="200" hspace="110" vspace="20">
<input type="image" onClick="parent.location='managepackagedetails.php'" src="packagesymbole.png" width="200" height="200" hspace="110" vspace="20">
<input type="image" onClick="parent.location='informationhtml.php'" src="website symbole.jpg" width="200" height="200" hspace="110" vspace="20">
<pre>			compare hotels rates and lists							value for money packages							infomation where to trip
			directly on the sites.								personalized itineraries.								and enjoy your safe trip.</pre>
<center><h3 style="text-transform:uppercase">why a travel website ?</h3></center>
<p><h4>Travel industry has witness enormous growth in recent years.Travels agents are old news,
	websites are the new way of booking travel.Imagine waking up in the morning,drinking.
	your coffee and logging onto your website account to check your earing from the comfort
	of your home. Its an opportunity to get established on the web with high end travel business
	setup and offer varity of services.</h4></p>
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








