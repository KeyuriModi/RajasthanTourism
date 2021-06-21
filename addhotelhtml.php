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
<h2><b>ADD HOTEL </b></h2>
<form action="addhotel.php" method="POST" enctype="multipart/form-data">
<table cellpadding="10">
<tr>
	<td>hotel name : </td>
	<td><input type="text" name="hname"></td>
</tr>
<tr>
	<td>contact us : </td>
	<td><textarea input type="text" name="contactus"></textarea></td>
</tr>
<tr>
	<td>reach us : </td>
	<td><textarea input type="text" name="reachus"></textarea></td>
</tr>
<tr>
	<td>facalities : </td>
	<td><textarea input type="text" name="facalities"></textarea></td>
</tr>
<tr>
	<td>overview : </td>
	<td><textarea input type="text" name="overview"></textarea></td>
</tr>
<tr>
	<td>price : </td>
	<td><input type="text" name="price"></td>
</tr>
<tr>
	<td>ratings : </td>
	<td><input type="text" name="ratings"></td>
</tr>
<tr>
	<td>photo : </td>
	<td><input type="file" name="photo"></td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="submit" name= "submit" value="add"></td>
</tr>
</table>
</form>
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