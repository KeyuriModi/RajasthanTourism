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
<img src="pushkar.jpg"></img><br><br>
<center><h1 style="text-transform:upper;">pushkar</h1><br>the town of fair and fastivals<br>
	<p>Pushkar is one of the oldest cities in India. Located to the northwest of Ajmer, the 
	tranquil city of Pushkar is a favoured destination for thousands of tourists and devotees
	flocking to Rajasthan. Situated at a height of 510 metres, Pushkar is surrounded by
	hillocks on three sides. The ‘Nag Pahar’, literally meaning Snake Mountain forms a 
	natural border between Ajmer and Pushkar. Known as ‘the rose garden of Rajasthan’, 
	the essence of the famous Pushkar rose is exported all over the world. Along with an 
	interesting mythological history, a legacy of timeless architectural heritage makes 
	Pushkar a fascinating city.
	According to legends, Lord Brahma, believed to be the creator of the Universe dropped a
	lotus to the ground leading to the immediate creation of a lake. He then decided to name 
	the place after the flower, and thus the name, Pushkar. The city of Pushkar is home to the
	only temple dedicated to Lord Brahma in the whole world. Hindus consider a journey to Pushkar
	to be the ultimate pilgrimage that must be undertaken to attain salvation.</p></center>
<center><b>ATTRACTIONS & PLACES TO VISIT AND EXPLORE IN UDAIPUR<b></center><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="pushkar lake.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="bhramha temple.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>pushkar lake</b></h3><br><p>According to Hindu scriptures, the sacred 
	Pushkar Lake is described as ‘Tirtha Raj’, the king of all pilgrimage sites. No
	pilgrimage is considered to be complete without a dip in in the holy Pushkar Lake.
	Semi-circular in shape and about 8-10 metres deep, Pushkar Lake is surrounded by 52
	bathing ghats and over 400 temples and is truly a magnificent sight to behold.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>bramha temple</b></h3><br><p>Nestled in the picturesque Pushkar valley 
	beyond the Nangaparvat and Anasagar Lake, the Brahma temple holds a special place
	in the hearts of Indians. It is the only temple in the world dedicated to Lord Brahma.
	Built with marble and decorated with silver coins, this temple can be identified by its
	red spire and the image of a swan (considered sacred to Lord Brahma). The chaturmukhi 
	(four faced) idol of Lord Brahma is housed in the inner sanctum. A marble statue of the
	sun god stands sentinel at the temple. Interestingly, while all the gods are shown bare 
	footed, Surya is shown wearing ancient warrior’s boots.</p>
	</td>
</tr>
</table><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="gurudwara singh sahab.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="varaha temple.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>gurudwara singh sabha</b></h3><br><p>Gurudwara Singh Sabha, situated 
	in the eastern part of Pushkar, was built in the beginning of the 19th century 
	to commemorate the visits of the first and the tenth gurus- Guru Nanak Dev and 
	Guru Govind Singhji.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>varaha temple</b></h3><br><p>Varaha temple is the largest and the most 
	ancient temple of Pushkar. Constructed by the 12th century ruler, King Anaji Chauhan,
	this temple is dedicated to the third incarnation of Lord Vishnu as a wild boar. 
	Legend has it that Varaha rescued the earth from depth of the primeval water, where
	it was dragged down by a demon (Hirnayaksh). It is one of the most visited temples 
	in Pushkar.</p>
	</td>
</tr>
</table><br><br>
<center><b>how to reach here</b><br><br>
		<pre><li>Sanganer Airport in Jaipur is the nearest at a distance of 146 kilometres.</li>
<li>Pushkar is well connected to the national highways of Rajasthan. Regular buses ply
 from Pushkar to the major cities of Jaipur, Jodhpur and Ajmer from the Ajmer bus stand.</li>
<li>Pushkar is well connected to the national highways of Rajasthan. Regular buses 
ply from Pushkar to the major cities of Jaipur, Jodhpur and Ajmer from the Ajmer bus
stand.</li></pre></center>
<center><b>place to visit</b><br><br>
<img src="atmateshwar temple.jpg" height="200" width="200"><img src="shree panchkund shiva temple.jpg" height="200" width="200">
<img src="rangji temple.jpg" height="200" width="200"><img src="savitri temple.jpg" height="200" width="200">
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
