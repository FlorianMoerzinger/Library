<?php
 $hostName= "localhost:3306";
 $userName= "FloPortfolio";
 $password= "flo!41344-Flo";
 $dbName= "Portfolio";

 $conn = mysqli_connect($hostName, $userName, $password, $dbName);

 if(!$conn){
 	echo "error";}
?>