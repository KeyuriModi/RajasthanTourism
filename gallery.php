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
		table{border-color:black;}
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
<br><br><br><br><br><br>
<center><h1><b>gallery </b></h1>
<img src="p1.jpg" height="200" width="200">&nbsp;<img src="p2.jpg" height="200" width="200">
<img src="p3.jpg" height="200" width="200">&nbsp;<img src="p4.jpg" height="200" width="200">
<img src="p5.jpg" height="200" width="200">&nbsp;<img src="p6.jpg" height="200" width="200">
<img src="udaipur.jpg" height="200" width="200">&nbsp;<img src="jaipur.jpg" height="200" width="200">
<img src="ahar museum.jpg" height="200" width="200">&nbsp;<img src="bagor ki haveli.jpg" height="200" width="200">
<img src="bhartiya lok kala mandal.jpg" height="200" width="200">&nbsp;<img src="doodh talai lake.jpg" height="200" width="200">
<img src="fatek sagar lake.jpg" height="200" width="200">&nbsp;<img src="gulab bagh and zoo.jpg" height="200" width="200">
<img src="jagdish temple.jpg" height="200" width="200">&nbsp;<img src="haldighati.jpg" height="200" width="200">
<img src="jagmandir.jpg" height="200" width="200">&nbsp;<img src="jaisamad lake.jpg" height="200" width="200">
<img src="lake pichola.jpg" height="200" width="200">&nbsp;<img src="navalakah mahal.jpg" height="200" width="200">
<img src="masala chowk.jpg" height="200" width="200">&nbsp;<img src="samode.jpg" height="200" width="200">
<img src="jawahar circle.jpg" height="200" width="200">&nbsp;<img src="jaipur wax museum.jpg" height="200" width="200">
<img src="akshardham mandir.jpg" height="200" width="200">&nbsp;<img src="ishwar lat.jpg" height="200" width="200">
<img src="jagatshiromanitemple.jpg" height="200" width="200">&nbsp;<img src="kanak vrindavan.jpg" height="200" width="200">
<img src="sambarlake.jpg" height="200" width="200">&nbsp;<img src="statue circle.jpg" height="200" width="200">
<img src="jawahar kala kendra.jpg" height="200" width="200">&nbsp;<img src="galtaji.jpg" height="200" width="200">
<img src="kota.jpg" height="200" width="200">&nbsp;<img src="banswar.jpg" height="200" width="200">
<img src="pushkar.jpg" height="200" width="200">&nbsp;<img src="alwar.jpg" height="200" width="200">
<img src="mathuradheeshmandir.jpg" height="200" width="200">&nbsp;<img src="karneshwar temple.jpg" height="200" width="200">
<img src="gaiparnathtemple.jpg" height="200" width="200">&nbsp;<img src="godawridham.jpg" height="200" width="200">
<img src="garadiamahadev temple.jpg" height="200" width="200">&nbsp;<img src="sevenwonderpark.jpg" height="200" width="200">
<img src="kansuatemple.jpg" height="200" width="200">&nbsp;<img src="chambalgarden.jpg" height="200" width="200">
<img src="alnia dam.jpg" height="200" width="200">&nbsp;<img src="kota barrage.jpg" height="200" width="200">
<img src="mukundra tiger reserve.jpg" height="200" width="200">&nbsp;<img src="charanchauki.jpg" height="200" width="200">
<img src="juafallsbanswara.jpg" height="200" width="200">&nbsp;<img src="tripura sundari.jpg" height="200" width="200">
<img src="cheech.jpg" height="200" width="200">&nbsp;<img src="paraheda.jpg" height="200" width="200">
<img src="singpurabanswara.jpg" height="200" width="200">&nbsp;<img src="mahi dam.jpg" height="200" width="200">
<img src="managarh.jpg" height="200" width="200">&nbsp;<img src="kagadi pikup weir.jpg" height="200" width="200">
<img src="kalpavriksha.jpg" height="200" width="200">&nbsp;<img src="diablab lake.jpg" height="200" width="200">
<img src="talwar temple.jpg" height="200" width="200">&nbsp;<img src="vithla deo temple.jpg" height="200" width="200">
<img src="atmateshwar temple.jpg" height="200" width="200">&nbsp;<img src="shree panchkund shiva temple.jpg" height="200" width="200">
<img src="rangji temple.jpg" height="200" width="200">&nbsp;<img src="savitri temple.jpg" height="200" width="200">
<img src="neemranana bouri.jpg" height="200" width="200">&nbsp;<img src="neelkanth.jpg" height="200" width="200">
<img src="bharthrihari temple.jpg" height="200" width="200">&nbsp;<img src="talwarakash.jpg" height="200" width="200">
<img src="sarishka tiger reserve.jpg" height="200" width="200">&nbsp;<img src="tijara jain temple.jpg" height="200" width="200">
<img src="neemrana fort.jpg" height="200" width="200">&nbsp;<img src="sillisreh lake.jpg" height="200" width="200">
<img src="hill fort kesroli.jpg" height="200" width="200">&nbsp;<img src="pandu pol.jpg" height="200" width="200">
<img src="bhangrah.jpg" height="200" width="200">&nbsp;<img src="fateh ganj bhumrah.jpg" height="200" width="200">
</center>
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
