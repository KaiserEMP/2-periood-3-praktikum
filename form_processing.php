<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>
<?php 
//$username = $_POST["username"];
//$password = $_POST["password"];
	
//print_r($_POST);
//echo "Tere " . $username . "! Teie parool on" . $password;

 ?>


 <?php
  

			
			
	
if (isset($_POST["password"])) 

		$username = isset($_POST["username"]) ? $_POST["username"]) : "Puudub";

  if ($username == "puudub" || $username == "" || $password == "puudub" ||  $password == "") {

  		echo "Kasutajanimi või parool on puudu.";
  	} else {
		echo "Tere {$username}!" . "Teie parool on {$password}.";
  }
?>
 </pre>
</body>
</html>