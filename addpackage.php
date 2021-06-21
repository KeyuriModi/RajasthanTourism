<?php
	if(isset($_POST['submit']))
	{
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("rajasthan",$con);
			$packagename = strval($_POST['pname']);
			$daynight = strval($_POST['daynight']);
			$placecovered = strval($_POST['place']);
			$overview = strval($_POST['overview']);
			$costinclude = strval($_POST['costinclude']);
			$costnotinclude = strval($_POST['costnotinclude']);
			
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
			
			
			
			$sql = "insert into packagedetails (packagename,daynight,photo,placecovered,overview,costinclude,costnotinclude)
					values('".$packagename."','".$daynight."','".$image."','".$placecovered."','".$overview."'
					,'".$costinclude."','".$costnotinclude."')";
			$insert = mysql_query($sql,$con);
			if(!$insert)
			{
				//header("location:addpackage.html");
				?>
				<script type="text/javascript">
				window.location = "addpackage.html";
				</script>
				<?php
			}
			else
			{
				//header("location:managepackadetails.php");
				?>
				<script type="text/javascript">
				window.location = "managepackagedetails.php";
				</script>
				<?php
			}
			mysql_close($con);
		}
	}
?>
	