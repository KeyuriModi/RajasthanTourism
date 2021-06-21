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
<img src="jaipur.jpg"></img><br><br>
<center><h1 style="text-transform:upper;">jaipur</h1><br>the pink city<br>
	<p>Planned by Vidyadhar Bhattacharya, Jaipur holds the distinction of being the
	first planned city of India. Renowned globally for its coloured gems, the capital
	city of Rajasthan combines the allure of its ancient history with all the advantages 
	of a metropolis. The bustling modern city is one of the three corners of the golden 
	triangle that includes Delhi, Agra and Jaipur.
	The story goes that in 1876, the Prince of Wales visited India on a tour. 
	Since the colour pink was symbolic of hospitality, Maharaja Ram Singh of Jaipur
	painted the entire city pink. The pink that colours the city makes for a marvellous
	spectacle to behold. Jaipur rises up majestically against the backdrop of the forts 
	Nahargarh, Jaigarh and Garh Ganesh Temple.
	Jaipur traces back its origins to 1727 when it was established by Jai Singh II,
	the Raja of Amber. He shifted his capital from Amber to the new city because of 
	the rapidly-growing population and an increasing water scarcity. Noted architect 
	Vidyadhar Bhattacharya used the established principles of Vastu Shastra to build the city.</p></center>
<center><b>ATTRACTIONS & PLACES TO VISIT AND EXPLORE IN UDAIPUR<b></center><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="amberpalace.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="citypalace.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>amber palace</b></h3><br><p>Amber (pronounced Amer) is at a distance
	of about 11 kilometres from Jaipur. Now a UNESCO World Heritage Site, it was the
	bastion of the Kachwahas of Amber, until the capital was moved to the plains, to
	what is today Jaipur. The palace, located in craggy hills, is a beautiful melange
	of Hindu and Mughal styles. Raja Man Singh I began construction in 1592 and the palace,
	which was built as a strong, safe haven against attacking enemies, was completed by
	Mirja Raja Jai Singh. The contrast between the harsh exterior and the inviting interior
	couldn’t be more surprising. Made entirely of red sandstone and white marble, visitors 
	are left spellbound by the magnificence of the palace that utilises carvings, precious 
	stones and mirrors. The splendour of the palace is enhanced by the breath-taking vista 
	of the Maota Lake in front. The palace is nearly seven centuries old and has a legendary
	past. Originally a small structure that the Rajputs won from the Meena tribes, it was 
	later transformed into the grand Amber Palace.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>city palace</b></h3><br><p>Located deep within the walled city, the City 
	Palace Complex was conceived and built by Maharaja Sawai Jai Singh II, the founder of Jaipur.
	A beautiful fusion of Mughal and Rajput architecture, the palace is still home to the last 
	ruling royal family which lives in a private section of the palace. Maharaja Sawai Jai Singh
	II is credited with building most of the structures, but it was expanded upon by later rulers
	as well. The City Palace Complex includes the Mubarak Mahal (the palace of reception) and 
	the Maharani’s Palace (the palace of the queen). Mubarak Mahal now houses the Maharaja Sawai
	Man Singh II Museum and displays a vast and unique collection of royal costumes, delicate
	Pashmina (Kashmiri) shawls, Benaras silk saris, and other dresses with Sanganeri prints and
	folk embroidery. The clothes of Maharaja Sawai Madho Singh I are also on display. 
	The Maharani's Palace, surprisingly, has an interesting display of very well-preserved
	Rajput weaponry, some dating back to the 15th century. Other than the arms, the palace is 
	adorned with beautiful paintings on the ceiling that are well-maintained.</p>
	</td>
</tr>
</table><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="jantarmantar.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="hawamahal.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>jantar mantar</b></h3><br><p>Now a UNESCO World Heritage Site, 
	Jantar Mantar in Jaipur is considered to be the largest of the five astronomical
	observatories built by Maharaja Sawai Jai Singh II, the founder of Jaipur. It contains 
	sixteen geometric devices, designed to measure time, track celestial bodies and observe
	the orbits of the planets around the sun. It also houses the Interpretation Centre that 
	helps the tourists to understand about the working principles & chronolgy of the observatory.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>hawa mahal</b></h3><br><p>Hawa Mahal, literally the Palace of Winds,
	was built in 1799 by the poet king Sawai Pratap Singh as a summer retreat for him
	and his family. It also served as a place where the ladies of the royal household 
	could observe everyday life without being seen themselves. This unique five-storey
	structure is a blend of Hindu and Islamic architecture, and the exterior, with its
	small latticed windows (called jharokhas), resembles the crown of Lord Krishna. The
	windows also serve as an air-conditioner of sorts, blowing cool air throughout the palace,
	making it the perfect retreat during summers. Built from pink sandstone, the Hawa Mahal is
	Jaipur’s iconic landmark and visitors can view its complete magnificence from outside, 
	from across the road. However, it is also possible to climb right up to the top for a
	wonderful view from the windows. Today, the Mahal is maintained by the Archaeological 
	Department of the Government of Rajasthan and also houses an archaeological museum in 
	the courtyard.</p>
	</td>
</tr>
</table><br><br>
<center><b>how to reach here</b><br><br>
		<pre><li>The Jaipur International Airport is called Sanganer Airport. There are
		domestic flight connections to and from Delhi, Kolkata, Mumbai, Ahmedabad, Jodhpur,
		Udaipur and several other places. There are also international flights from Jaipur 
		to Dubai, Muscat, Singapore & Bangkok as well.</li>
<li>A convenient way to travel to Jaipur is by road. Regular service of AC and Deluxe buses
 is available from all major cities in Rajasthan.</li>
<li>Jaipur is connected via rail from all major cities including Delhi, Agra, Mumbai, Chennai,
 Kolkata, Bikaner, Jodhpur, Udaipur, Ahmedabad, Bangalore, etc.</li></pre></center>
<center><b>place to visit</b><br><br>
<img src="masala chowk.jpg" height="200" width="200"><img src="samode.jpg" height="200" width="200">
<img src="jawahar circle.jpg" height="200" width="200"><img src="jaipur wax museum.jpg" height="200" width="200">
<img src="akshardham mandir.jpg" height="200" width="200"><img src="ishwar lat.jpg" height="200" width="200">
<img src="jagatshiromanitemple.jpg" height="200" width="200"><img src="kanak vrindavan.jpg" height="200" width="200">
<img src="sambarlake.jpg" height="200" width="200"><img src="statue circle.jpg" height="200" width="200">
<img src="jawahar kala kendra.jpg" height="200" width="200"><img src="galtaji.jpg" height="200" width="200">
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
