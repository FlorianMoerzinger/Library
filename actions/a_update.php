

<!DOCTYPE html>
<html lang="de-at">
<head>
	<meta charstet="utf_8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CR-Library</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
	<header id="header" class="">
		<div class="container-fluid head">
			<div>
				<ul class="nav nav-pills ">

				<li>
					<a class="navbar-brand" href="#">
		    			<img src="../img/header.jpg" width="100" height="70" alt="">
		  			</a>
				</li>
				<li class="nav-item pt-2">



			
					<a class="nav-link text-light" href="../index.php"><h2>Home</h2></a>
				</li>
				<li class="nav-item pt-2">
				
					<a class="nav-link text-light" href="../create.php"><h2>Create</h2></a>
				</li>
			</ul>
			</div>
			
		</div>
		
	</header>
	<main>
		<div class="comtainer-fluid welcome">

			
		</div>
		<div class="comtainer-fluid ">
			
			
				<?php

					require_once 'db_connect.php';

					if($_POST){ $id_media =$_POST["id_media"];
					$title =$_POST["title"];
					$image =$_POST["image"];
					$ISBN_Code =$_POST["ISBN_Code"];
					$discription =$_POST["discription"];
					$type =$_POST["type"];
					$media_status =$_POST["media_status"];
			
					$sql= "UPDATE `media` SET `title`='$title',`image`='$image',`ISBN_Code`='$ISBN_Code',`discription`='$discription',`type`='$type',`media_status`='$media_status' WHERE id_media = $id_media";
					
					echo "<br>";

					 if(mysqli_query($conn, $sql)){
					 	echo '<div class="row">
								<div class=" col-sm-4">
									
								</div>
								<div class=" col-sm-4 welcome text-center text-light ">
									<h1>successfully updated</h1>
									<br>
									<a class="nav-link text-light" href="../index.php"><h2>Link to Library</h2></a>
								</div>
								<div class=" col-sm-4">
									
								</div>
								</div>';
					 }else{
					 	echo "error";
					 }
					}
				?>
	
		
			
		</div>
		<div class="comtainer-fluid welcome">
			
			
		</div>
	</main>
	<footer>
		<div class="container-fluid fixed-bottom footer">
			<div>
				<ul class="nav nav-pills justify-content-center">
					<li class="nav-item pt-2">
				
						<a class="nav-link text-light" href="../index.php"><h2>Home</h2></a>
					</li>
					<li class="nav-item pt-2">
					
						<a class="nav-link text-light" href="../create.php"><h2>Create</h2></a>
					</li>
				</ul>
			</div>			
		</div>		
	</footer>
</body>
</html>