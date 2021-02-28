					<?php
						require_once 'db_connect.php';

					if($_POST){
						$title =$_POST["title"];
						$image =$_POST["image"];
						$ISBN_Code =$_POST["ISBN_Code"];
						$discription =$_POST["discription"];
						$publish_date =$_POST["publish_date"];
						$type =$_POST["type"];
						$media_status =$_POST["media_status"];
						

						echo $sql = "INSERT INTO `media`(`title`, `image`, `ISBN_Code`, `discription`, `publish_date`, `type`, `media_status`) VALUES ('$title', '$image', '$ISBN_Code', '$discription', '$publish_date', '$type', '$media_status')";

						if(mysqli_query($conn, $sql)){
							echo "success
							<a href=../'index.php'>Back to the Home Page</a>
							";
						}else{
							echo "error";
						}

					}

				?>