<!DOCTYPE html>
<html lang="de">
<head>
	<meta charstet="utf_8">
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
				<div class="col-sm-2">

					<script src="/javascripts/application.js" type="text/javascript">
						alert("success");
					</script>

					
				</div>
				<div class="col-sm-8 welcome p-4">
					<form  action="create.php" method="post">
					  <div class="form-group ">
					    	<label class="text-light" for="exampleFormControlInput1">Title</label>
						    <input class="form-control" name="title" type="text" placeholder="Title" value="">
						    <label class="text-light" for="exampleFormControlInput1">Image</label>
						    <input class="form-control" name="image" type="text" placeholder="Image" value="">
						    <label class="text-light" for="exampleFormControlInput1">ISBN-Code</label>
						    <input class="form-control" name="ISBN_Code" type="text" placeholder="ISBN-Code" value="">
					  	
						    <label class="text-light" for="exampleFormControlTextarea1">Description</label>
						    <textarea class="form-control" name="discription" id="exampleFormControlTextarea1" placeholder="Description" rows="3" value=""></textarea>
					  	
						    <label class="text-light" for="exampleFormControlSelect1">Type</label>
						    <select class="form-control" name="type" id="exampleFormControlSelect1" value="">
						      <option>Book</option>
						      <option>DVD</option>
						      <option>CD</option>
						    </select>
						    
						    <label class="text-light" for="exampleFormControlSelect1">Media Status</label>
						    <select class="form-control" name="media_status" id="exampleFormControlSelect1" value="">
						      <option>Available</option>
						      <option>Lent</option>
						    </select>

							
					  	</div>
					  		<input onclick="myFunction()" type="submit" class="btn btn-light btn-lg" name="submit">					  
				</form>
				</div>
				<div class="col-sm-2">
					 <?php
						require_once'actions/db_connect.php';

					if($_POST){
						$title =$_POST["title"];
						$image =$_POST["image"];
						$ISBN_Code =$_POST["ISBN_Code"];
						$discription =$_POST["discription"];
						$type =$_POST["type"];
						$media_status =$_POST["media_status"];
						

						$sql = "INSERT INTO `media`(`title`, `image`, `ISBN_Code`, `discription`,`type`, `media_status`) VALUES ('$title', '$image', '$ISBN_Code', '$discription','$type', '$media_status')";

						if(mysqli_query($conn, $sql)){
							 "myFunction();";								
							
						}else{
							echo "error";
						}

					}

					?> 
				</div>
				
			</div>
			
			
		</div>
		<div class="comtainer-fluid welcome">
			
			
		</div>
	</main>
	<footer>
		<div class="container-fluid  footer">
			<div>
				<ul class="nav nav-pills justify-content-center">
					<li class="nav-item ">
				
						<a class="nav-link text-light" href="index.php"><h2>Home</h2></a>
					</li>
					<li class="nav-item ">
					
						<a class="nav-link text-light" href="create.php"><h2>Create</h2></a>
					</li>
				</ul>
			</div>			
		</div>		
	</footer>
 	<script  type="text/javascript">
					
		function myFunction() {
		  alert("Succesfull transmitted");
		}
		
	</script> 


</body>
</html>