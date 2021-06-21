<?php
	if(isset($_POST['submit']))
	{
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("rajasthan",$con);
			$hotelname = strval($_POST['hname']);
			$contactus = strval($_POST['contactus']);
			$reachus = strval($_POST['reachus']);
			$facalities = strval($_POST['facalities']);
			$overview = strval($_POST['overview']);
			$price = strval($_POST['price']);
			$ratings = strval($_POST['ratings']);
			
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["photo"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) 
			{
				echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
			} 
			else 
			{
				echo "Sorry, there was an error uploading your file.";
			}

			$image=basename( $_FILES["photo"]["name"],".jpg"); // used to store the filename in a variable
			
			
			$image1 = "uploads/".$image.".jpg";
			echo $image1;
			
			
			
			$sql = "insert into hoteldetails (hotelname,contactus,reachus,facalities,overview,price,ratings,photo)
					values('".$hotelname."','".$contactus."','".$reachus."','".$facalities."','".$overview."'
					,'".$price."','".$ratings."','".$image1."')";
			$insert = mysql_query($sql,$con);
			if(!$insert)
			{
				//header("location:addhotel.html");
				?>
				<script type="text/javascript">
				window.location = "addhotelhtml.php";
				</script>
				<?php
			}
			else
			{
				//header("location:managehoteldetails.php");
				?>
				<script type="text/javascript">
				window.location = "managehoteldetails.php";
				</script>
				<?php
			}
			mysql_close($con);
		}
	}
?>
	