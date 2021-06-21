<html>
<head>
		<style>
		body{background-image:url("backgroundimg.jpg")}
		menu {margin : 0}
		menu menuitem{float:right;}
		menu menuitem {padding: 20px ;
				list-style : none;}
		h1{text-transform:uppercase;}
		pre{font-family:serif;font-size:18px;}
		.rectangle{height:250px;
					width:450px;
					background-color:silver;
					border-style:solid;
					border-color:black;}

	</style>
</head>
<body>
<div floatleft>
<header>
	<h1 style="font-family:Colonna MT;font-style:italic;font-size:70px;">
	<img src="website symbole.jpg" height="100" width="100" style="border-radius:50px"></img>
		<b>rajasthan tourism </b>
	</h1>
</header>
</div><br><br><br><br><br><br><br><br><br><br>
<center>
<div class="rectangle">
<form action ="login.php" method="POST">
<table>
<tr>
	<td></td>
	<td><b><h1>login</h1></b></td>
</tr>
<tr>
	<td><h3>username : </h3></td>
	<td><h3><input type="text" name="uname"  required></h3></td>
</tr>
<tr>
	<td><h3>password : </h3></td>
	<td><h3><input type="password" name="pass"  required></h3></td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="submit" name= "submit" value="login">
	<input type="reset" name= "reset" value="cancle"></td>
</tr>
</table>
</form>
<center><a href="registrationhtml.php"><h3>create new account</h3></a>
</div></center><br><br>
<div floatleft>
<footer>
	<br><br><br>
	<p> powered by :- keyuri modi </p>
</footer>
</div>
</body>
</html>