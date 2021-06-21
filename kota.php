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
<br><br><br>
<form>
<div>
	<button class="btn"><i class="fa fa-home" href="information.php"></i>home</button>
	<a href="gallery.php">gallery</a>
</div><br><br><br>
</form>
<img src="kota.jpg"></img><br><br>
<center><h1 style="text-transform:upper;">kota</h1><br>the land of chambal<br>
	<p>Kota is the third largest city in the state of Rajasthan and is one of the
	popular tourist destinations. Situated on the banks of the Chambal River, the
	city of Kota is famous for its distinctive style of paintings, palaces, museums,
	and places of worship. The city is known for gold jewellery, Doria sarees, silk
	sarees and the famous Kota stone. 
	The history of Kota dates back to the 12th century when Rao Deva conquered the 
	territory and founded Hadoti. The independent Rajput state of Kota was carved out
	of Bundi in 1631. The kingdom of Kota had a turbulent history as it was raided by
	various Mughal rulers, Maharajas of Jaipur and even the Maratha warlords. The city
	of Kota is well known all over the world for its architectural splendour comprising
	beautiful palaces, temples and museums which exhibit the grandeur of the foregone era.</p></center>
<center><b>ATTRACTIONS & PLACES TO VISIT AND EXPLORE IN UDAIPUR<b></center><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="garh palace.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="maharaomadhosinghmuseum.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>garh palace</b></h3><br><p>The foremost tourist attraction in Kota 
	is the 'Garh'. This large complex, also known as the City Palace, is built in 
	a predominantly Rajput style of architecture. The palace is a sprawling complex
	of suites and apartments built by different rulers of the Rajput dynasty at 
	different times in history.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>maharao madho singh museum</b></h3><br><p>Situated within the walls
	of the Garh palace, Maharao Madho Singh Museum houses a splendid collection of
	Rajput miniature paintings of the Kota school. Visitors can spend hours taking 
	in the fascinating sculptures, arms and other valuable antiques.</p>
	</td>
</tr>
</table><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="ambheda mahal.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="dad devi temple.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>abheda mahal and karani mata temple</b></h3><br><p>Located 8 kilometres
	away from Kota, on the banks of a tank, this medieval palace was the recreation 
	spot of the rulers of Kota. It is where they went to enjoy the wildlife and natural
	beauty of the region. Close to Abheda Mahal is the temple of Karni Mata, the reigning
	deity of Kota.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>dad devi temple</b></h3><br><p>Situated about 18 kilometres from Kota,
	the temple of the deity of the royal household of Kota is surrounded by thick forests 
	and is an ideal place to spend some time in quiet contemplation. This temple is dedicated 
	to Shri Dad Devi Mata Ji, an incarnation of Goddess Durga.</p>
	</td>
</tr>
</table><br><br>
<center><b>how to reach here</b><br><br>
		<pre><li>The nearest airports are Sanganer airport in Jaipur which is 244 kms away</li>
<li>Regular buses are available to Kota from all cities and towns in Rajasthan.</li>
<li>Kota is a major junction in the Western Railway sector, on the Delhi-Mumbai line.
 Most trains pass through Kota.</li></pre></center>
<center><b>place to visit</b><br><br>
<img src="mathuradheeshmandir.jpg" height="200" width="200"><img src="karneshwar temple.jpg" height="200" width="200">
<img src="gaiparnathtemple.jpg" height="200" width="200"><img src="godawridham.jpg" height="200" width="200">
<img src="garadiamahadev temple.jpg" height="200" width="200"><img src="sevenwonderpark.jpg" height="200" width="200">
<img src="kansuatemple.jpg" height="200" width="200"><img src="chambalgarden.jpg" height="200" width="200">
<img src="alnia dam.jpg" height="200" width="200"><img src="kota barrage.jpg" height="200" width="200">
<img src="mukundra tiger reserve.jpg" height="200" width="200"><img src="charanchauki.jpg" height="200" width="200">
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
