

<!DOCTYPE html>
<html lang="de-at">
<head>
	<meta charstet="utf_8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CR-Library</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header id="header" class="">
		<div class="container-fluid head">
			<div>
				<ul class="nav nav-pills ">

				<li>
					<a class="navbar-brand" href="#">
		    			<img src="img/header.jpg" width="100" height="70" alt="">
		  			</a>
				</li>
				<li class="nav-item pt-2">
			
					<a class="nav-link text-light" href="index.php"><h2>Home</h2></a>
				</li>
				<li class="nav-item pt-2">
				
					<a class="nav-link text-light" href="create.php"><h2>Create</h2></a>
				</li>
			</ul>
			</div>
			
		</div>
		
	</header>
	<main>
	<div class="container-fluid main">
		<div class="container-fluid distance">
			<div class= row>
				<div class="col-sm-2  col-lg-4">
					
				</div>
				<div class="col-sm-8 col-lg-4 text-center welcome">
					<h1  class="display-1 text-light "> Welcome to the <br> Library!!!</h1>
					
				</div>
				<div class="col-sm-2 col-lg-4">
					
				</div>
			</div>
			
		</div> 
		<div class="container-fluid text-light pb-2  jumbo">
			<div class="container ">
			    <h1 class="display-4">The Medialist</h1>
			    <p class="lead">You can lean Book's DVD's or you just hanging around in the library. </p>
  			</div>
		</div>

		<div class="container-fluid secondbg mt-0">
			<div class="container">
				<div class="row justify-content-around">

	<?php
		include "actions/db_connect.php";

		$sql = "SELECT * FROM  media";
		
		

		$result = mysqli_query($conn, $sql,);
		

		
		if ($result->num_rows == 0 ){
			echo "No result";
		}elseif($result->num_rows == 1){
			$row = $result->fetch_assoc();
			echo $row["title"]. " ". $row["image"]. " ". $row["ISBN_Code"]. " ".$row["discription"]. " ". $row["type"]. " ". $row["media_status"];
		}else {
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value) {
						echo '<div class="card p-1 m-1" style="width: 20rem;">
					  <img src='. $value["image"].' class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">' .$value["title"]. '</h5>
					     
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item"> ISDN-Code: '. $value["ISBN_Code"].'</li>
					    <li class="list-group-item"> Type: '.$value["type"] .'</li>
					    <li class="list-group-item"> Media status: '.$value["media_status"] .'</li>
					    <li class="list-group-item discription"> '.$value["discription"] .'</li>
					  </ul>
					  <div class="card-body">					  	
					     <a class="card-link" href="update.php?id_media='.$value["id_media"].'">Update</a><br>
					     <a class="card-link" href="delete.php?id_media='.$value["id_media"].'">Delete</a><br>
					     <a class="card-link" href="details.php?id_media='.$value["id_media"].'">Read More</a><br>

					  </div>
				</div>';	
			}
		}

	?>

					
				</div>
				
			</div>
			
		</div>
		
	</div>
	<div class="container-fluid pb-2 text-light jumbo">
		<div class="container">
		    <h1 class="display-4">Thank's for your Membership</h1>
		    <p class="lead">We like Book's. </p>
		</div>
	</div>
	</main>
	<footer>
		<div class="container-fluid footer">
			<div>
				<ul class="nav nav-pills justify-content-center">
					<li class="nav-item pt-2">
				
						<a class="nav-link text-light" href="index.php"><h2>Home</h2></a>
					</li>
					<li class="nav-item pt-2">
					
						<a class="nav-link text-light" href="create.php"><h2>Create</h2></a>
					</li>
				</ul>
			</div>			
		</div>		
	</footer>
</body>
</html>