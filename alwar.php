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
<img src="alwar.jpg"></img><br><br>
<center><h1 style="text-transform:upper;">alwar</h1><br>the city of rajputs<br>
	<p>Alwar is a where the journey of the Fairy Queen ends! The oldest working
	engine in the world and one of India’s national treasure, Fairy Queen leads
	a train from Delhi encampment to Alwar in Rajasthan. The engine was built in
	1855 and acquired by the Eastern Indian Railways from a British firm.
	The train that harnesses this engine is now used for tourism. 
	The journey of the city of Alwar and its origins can be traced back to 1500 BC.
	Nestled in the lap of the green hills of the Aravalli range, it is home to beautiful 
	palaces and forts from an era long gone. The deep valleys and thick forest cover of 
	the hills are a haven for many species of birds such as grey partridge and 
	white-throated kingfisher and animals, most notably, the Bengal tiger and golden jackal.
	It is this splendour and exquisite architecture, along with the calm lakes, royal hunting
	chalets, dense jungles and a socio-cultural environment unlike any other that makes Alwar 
	a traveller’s delight.
	Alwar is one of the oldest cities in Rajasthan. Paradoxically, the city is also the most 
	recent of the Rajput kingdoms. Its traditions can be traced back to the realms of Viratnagar
	that flourished here around 1500 BC. Also known as Matasya Desh, this is where the Pandavas,
	the mighty heroes of the Mahabharata, spent the last years of their 13-year exile.</p></center>
<center><b>ATTRACTIONS & PLACES TO VISIT AND EXPLORE IN UDAIPUR<b></center><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="bala qila.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="alwar city palace.png" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>bala qila</b></h3><br><p>The Bala Qila (young fort) was built on 
	the foundations of a 10th century mud fort and is a towering structure set 
	atop a hill. Strong fortifications, graceful marble columns and delicate 
	latticed balconies make up the fort. Bala Qila can be entered through six gates,
	namely Jai Pol, Suraj Pol, Laxman Pol, Chand Pol, Krishan Pol and Andheri Gate.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>alwar city palace</b></h3><br><p>Built in 1793 AD by Raja Bakhtawar Singh,
	the City Palace is an amazing mélange of the Rajputana and Islamic styles of architecture.
	The highlight of this palace are graceful marble pavilions set on lotus flower bases in 
	the central courtyard. The palace that once belonged to the Maharaja has been converted
	into the District Collectorate. Its grand halls and chambers now house government offices.</p>
	</td>
</tr>
</table><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="the palace museum.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="moosi maharani charti.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>the palace museum</b></h3><br><p>The Palace Museum is a must-visit 
	for anyone with an interest in the opulent life and lifestyle led by the Maharajas
	of Alwar. Rare manuscripts, including one depicting Emperor Babur’s life, Ragamala
	paintings and miniatures and even historic swords that once belonged to Muhammad
	Ghori, Emperor Akbar and Aurangzeb can be found here.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>moosi maharani chhatri</b></h3><br><p>This cenotaph, built in the memory 
	of Maharaja Bakhtawar Singh and his queen, Rani Moosi, reflects the Indo-Islamic style
	of architecture. The upper portion comprising columned pavilions and domed arches is 
	made of marble while the lower section consists of pillars in red sandstone. The memorial
	is rated as one of the finest of its type.</p>
	</td>
</tr>
</table><br><br>
<center><b>how to reach here</b><br><br>
		<pre><li>The nearest airport is Indira Gandhi International Aiport,
		Delhi which is 141 kms away followed by Jaipur International Airport,
		about 166 kms away.</li>
<li>Buses to Alwar are available at regular intervals from Delhi, Jaipur and 
Bharatpur.</li>
<li>One can take the Shatabdi Express from Delhi to Jaipur which halts at Alwar.</li></pre></center>
<center><b>place to visit</b><br><br>
<img src="neemranana bouri.jpg" height="200" width="200"><img src="neelkanth.jpg" height="200" width="200">
<img src="bharthrihari temple.jpg" height="200" width="200"><img src="talwarakash.jpg" height="200" width="200">
<img src="sarishka tiger reserve.jpg" height="200" width="200"><img src="tijara jain temple.jpg" height="200" width="200">
<img src="neemrana fort.jpg" height="200" width="200"><img src="sillisreh lake.jpg" height="200" width="200">
<img src="hill fort kesroli.jpg" height="200" width="200"><img src="pandu pol.jpg" height="200" width="200">
<img src="bhangrah.jpg" height="200" width="200"><img src="fateh ganj bhumrah.jpg" height="200" width="200">
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
