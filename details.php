	<?php
		require_once 'actions/db_connect.php';
		if($_GET["id_media"]){
		
			$id_media = $_GET["id_media"];
        
			$sql = "SELECT * FROM media WHERE id_media = $id_media";
			$result = mysqli_query($conn, $sql);

			$row =  $result->fetch_assoc();

		}
	?>



<!DOCTYPE html>
<html lang="de">
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
		<div class="comtainer-fluid welcome">

			
		</div>
		
		<div class="comtainer-fluid ">
		<div class="row">
		<div class=" col-sm-4">
			
		</div>
		<div class=" col-sm-4  text-center">
			
			<?php echo '
			<form  action="actions/a_update.php" method="post">
					  	<div class="form-group ">
						<div class="card mb-3">
					  	<img src='.$row['image'].' class="card-img-top " alt="...">
					  	<div class="card-body">
					    <h1 class="card-title">Title: '.$row['title'].'</h1>
					    <hr>
					    <h1 class="card-text">Discription: '.$row['discription'].'</h1>
					    <hr>
					    <h1 class="card-text">ID-Media: '.$row['id_media'].'</h1>
					    <hr>
					    <h1 class="card-text"> Type: '.$row['type'].'</h1>
					    <hr>
					    <h1 class="card-text">Media-Status: '.$row['media_status'].'</h1>

				 		 </div>

					  		
					  </div>
					  						  
				</form>'

			?>
		</div>
		<div class=" col-sm-4">
			
		</div>
		</div>

			
			
			
	

			
			
		</div>
		<div class="comtainer-fluid welcome">
			
			
		</div>
	</main>
	<footer>
		<div class="container-fluid fixed-bottom footer">
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