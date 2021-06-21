<?php                           // session created
	session_start();
	$user_check=$_SESSION['uname'];
	if ($user_check=="$username");
?>
<html>
<head>
	<style>                                     // css coding
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
<?php                        //header
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
			<menuitem><a href='hotelhistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
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
			<menuitem><a href='hotelhistoryhtml.php'><h3>viewbooking</h3></a></menuitem>
			<menuitem><a href='homepage.php'><h3>home</h3></a></menuitem>
		</menu>
		</header>
		</div>";
}
?>
<br><br><br><br><br><br><br><br>
<center>
<h2><b>HOTEL BOOKING </b></h2>                     //hotel booking  html form
<form action="hotelbooking.php" method="POST">
<table cellpadding="10">
<tr>
	<td>first name : </td>
	<td><input type="text" name="fname"></td>
<tr>
	<td>last name : </td>
	<td><input type="text" name="lname"></td>
</tr>
<tr>
	<td>hotel name : </td>
	<td><input type="text" name="hname"></td>
</tr>

<tr>
	<td>address : </td>
	<td><textarea name="address" rows="4" cols="30"></textarea></td>
</tr>
<tr>
	<td>city : </td>
	<td><input type="text" name="city"></td>
<tr>
	<td>state : </td>
	<td><input type="text" name="state"></td>
</tr>
<tr>
	<td>mobile number : </td>
	<td><input type="tel" name="mno" maxlength="10"></td>
</tr>
<tr>
	<td>country : </td>
	<td><input type="text" name="country" value="india"></td>
</tr>
<tr>
	<td>e-mail id : </td>
	<td><input type="email" name="emailid"></td>
</tr>
<tr>
	<td>check in :</td>
	<td><input type="date" name="in">check out :<input type="date" name="out"></td>
</tr>
<tr>
	<td>num of child :</td>
	<td><input type="tel" name="child">num of adult :<input type="tel" name="adult"></td>
</tr>
<tr>
	<td>payment :</td>
	<td><input type="radio" name="payment" value="case">case
		<input type="radio" name="payment" value="check">check</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="submit" name= "submit" value="submit">
	<input type="reset" name= "reset" value="cancle">
</td>
</tr>
</table>
</form>
</center>
<?php                                         // footer
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
?>
</body>
</html>