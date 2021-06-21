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
<img src="banswar.jpg"></img><br><br>
<center><h1 style="text-transform:upper;">banswar</h1><br>the city of a hundred islands<br>
	<p>Banswara gets its name from the ‘bans’ or bamboo trees that once grew here in abundance.
	It is dominated by Bhil tribals (popularly known as the bow men of Rajasthan) who make up
	more than half the total population of the region. History states that Banswara was ruled 
	by a Bhil ruler named Bansia or Wasna and the place derived its name from him. Bansai was 
	defeated by Jagmal Singh who crowned himself Banswara’s first Maharaval.
	The district is a mix of different geographies with fertile plains of maize, wheat, rice,
	cotton soya bean and gram covering the entire central and western regions, while the Aravallis
	range make up the eastern side. The rich teak forests and mango, khajur (date) and mahua trees
	are home to diverse wildlife. Archaeological significance of Arthuna has made it one of the 
	prime attractions of Banswara.
	It was about 72 kilometres in length from north to south and 53 kilometres in breadth from 
	east to west. The district was formerly a princely state ruled by the Maharavals. </p></center>
<center><b>ATTRACTIONS & PLACES TO VISIT AND EXPLORE IN UDAIPUR<b></center><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="anand sagar lake.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="abdulla pir.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>anand sagar lake</b></h3><br><p>This artificial lake, also known as
	Bai Talab was constructed by Lanchi Bai, the Rani of Maharaval Jagmal Singh.
	Located in the eastern part of Banswara, it is surrounded by holy trees known 
	as 'Kalpa Vriksha', famous for fulfilling the wishes of visitors. The ‘chattris’
	or cenotaphs of the rulers of the state are also scattered nearby.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>abdulla pir</b></h3><br><p>It is a popular shrine of a Bohra Muslim saint.
	This is the Dargah of Abdul Rasul, known as Abdullah Pir, situated in the southern part
	of the city. Every year a large number of people, specially of the Bohra Community,
	take part in the ‘URS’ at the Dargah.</p>
	</td>
</tr>
</table><br><br>
<table style="border:2;border-style:solid; float:left" height="300" width="660">
<tr cellspacing="10">
	<td><img src="andeshwar parashnathji.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center;" height="300" width="660"> 
<tr cellspacing="10">
	<td><img src="ram kund.jpg" height="300" width="645"></img>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:left" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>andeshwar parashwarnathji</b></h3><br><p>Andeshwar Parshwanathji is 
	a famous Jain temple located on a small hill in Kushalgarh tehsil. The temple 
	is home to rare Shilalekhs from the 10th century. The place also houses two 
	Digamabara Jain Parshwanatha temples.</p>
	</td>
</tr>
</table>
<table style="border:2;border-style:solid; float:center" height="300" width="660"> 
<tr cellspacing="10">
	<td><h3><b>ram kund</b></h3><br><p>It is also known as ‘Phati Khan’ because there
	is a deep cave under a hill. There is a Pool of very cold water found through out 
	the year. It is said that Lord Ram, during his exile came & stayed here. It is a 
	beautiful place surrounded by hills.</p>
	</td>
</tr>
</table><br><br>
<center><b>how to reach here</b><br><br>
		<pre><li>The closest airport is Udaipur Airport which is 185 kms away.</li>
<li>Buses are available from Delhi, Jaipur and Bharatpur to Banswara.</li>
<li>The nearest station is Ratlam which is 80 kms away.</li></pre></center>
<center><b>place to visit</b><br><br>
<img src="juafallsbanswara.jpg" height="200" width="200"><img src="tripura sundari.jpg" height="200" width="200">
<img src="cheech.jpg" height="200" width="200"><img src="paraheda.jpg" height="200" width="200">
<img src="singpurabanswara.jpg" height="200" width="200"><img src="mahi dam.jpg" height="200" width="200">
<img src="managarh.jpg" height="200" width="200"><img src="kagadi pikup weir.jpg" height="200" width="200">
<img src="kalpavriksha.jpg" height="200" width="200"><img src="diablab lake.jpg" height="200" width="200">
<img src="talwar temple.jpg" height="200" width="200"><img src="vithla deo temple.jpg" height="200" width="200">
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
