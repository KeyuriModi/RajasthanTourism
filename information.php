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
		.btn{
				background-color: DodgerBlue;
				border: none;
				color: yellow; 
				cursor: pointer; }
				.btn:hover {background-color: RoyalBlue;}
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
		<input type='image' onClick='parent.location='homepage.php'' src='website symbole.jpg' height='100' width='100' style='border-radius:50px'>
			<b>rajasthan tourism </b>
		</h1>
		<menu>
			<menuitem><a href='loginhtml.php'><h3>logout </h3></a></menuitem>
			<menuitem><a href='contactushtml.php'><h3>contact us </h3></a></menuitem>
			<menuitem><a href='aboutus.php'><h3>about us</h3></a></menuitem>
			<menuitem><a href='hotel.php'><h3>hotel</h3></a></menuitem>
			<menuitem><a href='package.php'><h3>package</h3></a></menuitem>
			<menuitem><a href='information.php'><h3>information</h3></a></menuitem>
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
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>
		</menu>
		</header>
		</div>";
}
?>
<br><br><br><br><br>
<form>
<div>
	<button class="btn"><i class="fa fa-home" href="information.php"></i>home</button>
	<a href="gallery.php">gallery</a>
</div><br><br><br>
</form>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td align="center"><h3><b>udaipur</b></h3><br>
		<a href="udaipur.php"> know more</a>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td align="center"><h3><b>jaipur</b></h3><br>
		<a href="jaipur.php"> know more</a>
	</td>
</tr>
</table><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td align="center"><h3><b>kota</b></h3><br>
		<a href="kota.php"> know more</a>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td align="center"><h3><b>banswar</b></h3><br>
		<a href="banswar.php"> know more</a>
	</td>
</tr>
</table><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td align="center"><h3><b>pushkar</b></h3><br>
		<a href="pushkar.php"> know more</a>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td align="center"><h3><b>alwar</b></h3><br>
		<a href="alwar.php"> know more</a>
	</td>
</tr>
</table><br><br>
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
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>
		</menu><br><br><br>
		<p> powered by :- keyuri modi </p>
	</footer>
	</div>";
}
?>
</body>
</html>
