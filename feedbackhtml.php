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
		h1{text-transform:uppercase;}
		.rectangle{height:250px;
					width:700px;
					background-color:silver;
					border-style:solid;
					border-color:black;}
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
<br><br><br><br><br><br><center>
<img src="contactus.jpg" height="300" width="300" hspace="500" style="border-radius:10px"></img>
</div><br><br><br>
<form action="feedback.php" method="POST">
<div class="rectangle">
<table cellpadding="10">
<tr>
	<td>subject :</td>
	<td><input type="text" name="sub"></td>
</tr>
<tr>
	<td>your message : <td>
	<textarea name="msg" cols="40" rows="5"></textarea>
</tr>
	<td colspan="2" align="right">
	<input type="submit" name= "submit" value="reply">
	</td>
</table>
</div>
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

