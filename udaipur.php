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
<img src="udaipur.jpg"></img><br><br>
<center><h1 style="text-transform:upper;">udaipur</h1><br>THE CITY OF LAKES AND PALACES<br>
	<p>Often referred to as the 'Venice of the East', the city of lakes Udaipur
 is located around azure water lakes and is hemmed in by lush green hills of Aravallis.
 The famous Lake Palace, located in the middle of Lake Pichola is one of the most 
 beautiful sights of Udaipur. It is also home to Jaisamand Lake, claimed to be the 
 second largest man-made sweet water lake in Asia. The beautiful City Palace and 
 Sajjangarh (Monsoon Palace) add to the architectural beauty and grandeur of the city.
 The city is also known for its profusion of zinc and marble. Solar observatory in Lake
 Fateh Sagar is the only observatory in India located on an island and has been made on
 the pattern of  Big Bear Lake in Southern California. The ten-day Shilpgram Festival
 which starts from 21 Dec to 30 Dec pulls in a large number of people interested in 
 arts and crafts.Udaipur was founded in 1553 by Maharana Udai Singh II as the new capital
 of Mewar Kingdom. It is located in the fertile, circular Girwa Valley to the southwest
 of Nagda, which was the first capital of Mewar.</p></center>
<center><b>ATTRACTIONS & PLACES TO VISIT AND EXPLORE IN UDAIPUR<b></center><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="udaipurcitypalace.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="lakepalace.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>udaipur city palace</b></h3><br><p> The City Palace towers over Lake Pichola. The balconies, cupolas, and 
	towers of the palace give a wonderful view of the lake and the surrounding city.
	This complex actually consists of four major and several minor palaces that 
	collectively form the magnificent City Palace. The main part of the palace is
	now preserved as a museum displaying artifacts.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>lake palace</b></h3><br><p> Now a hotel but was originally called Jagniwas and served as a summer palace.
	Built between 1743 and 1746 on the island near Jagmandir in Lake Pichola, the palace,
	which faces east, is a wondrous sight to behold. The walls made of black and white marbles
	are adorned with semi-precious stones and ornamented niches. Gardens, fountains, pillared
	terraces, and columns line its courtyards.</p>
	</td>
</tr>
</table><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="jagmandir.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="moonpalace.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>jag mandir</b></h3><br><p> Jagmandir is a palace built on an island on the Lake Pichola. Also called
	the ‘Lake Garden Palace’, the construction for this began in 1620 and was completed
	around 1652. The royal family used the palace as its summer resort and for hosting parties.
	Interestingly, Prince Khurram - later Emperor Shah Jahan - was given shelter here when he
	rebelled against his father Emperor Jahangir. The Palace had such an impact on Emperor Shah 
	Jahan that it went on to become the inspiration for one of the most magnificent Wonders of
	the World, The Taj Mahal.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>moon palace</b></h3><br><p>Situated just outside Udaipur, this 19th-century palace is built on top of Bansdara
	hills. Used as a monsoon palace and hunting lodge, its builder, Maharana Sajjan Singh,
	originally planned to make it an astronomical center. The plan was cancelled with Maharana
	Sajjan Singh's premature death. It is still an awe-inspiring sight on the Udaipur skyline
	and offers spectacular views of the city and the areas around.</p>
	</td>
</tr>
</table><br><br>
<center><b>how to reach here</b><br><br>
		<pre><li>Dabok Airport, also known as Maharana Pratap Airport 
is the closest at about 25 km northeast of the city centre.
There are daily flights from Delhi and Mumbai on Jet Airways,
Air India and SpiceJet.</li>
<li>Udaipur is easily accessible by road from every major 
destination in India, including Chittorgarh, Ahmedabad, Jodhpur,
Ajmer, Sawai Madhopur / Ranthambore, Jaipur, Bikaner, Agra, Delhi,
Mumbai and Khajuraho.</li>
<li>Udaipur is connected by rail to several major cities in India
including Chittorgarh, Ahmedabad, Ajmer, Sawai Madhopur, Jaipur, 
Agra, Delhi, Mumbai and Khajuraho.</li></pre></center>
<center><b>place to visit</b><br><br>
<img src="ahar museum.jpg" height="200" width="200"><img src="bagor ki haveli.jpg" height="200" width="200">
<img src="bhartiya lok kala mandal.jpg" height="200" width="200"><img src="doodh talai lake.jpg" height="200" width="200">
<img src="fatek sagar lake.jpg" height="200" width="200"><img src="gulab bagh and zoo.jpg" height="200" width="200">
<img src="jagdish temple.jpg" height="200" width="200"><img src="haldighati.jpg" height="200" width="200">
<img src="jagmandir.jpg" height="200" width="200"><img src="jaisamad lake.jpg" height="200" width="200">
<img src="lake pichola.jpg" height="200" width="200"><img src="navalakah mahal.jpg" height="200" width="200">
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
