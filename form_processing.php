
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>
<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];
   	$submit = $_POST['submit']; 


    /*echo "<pre>";
      print_r($_POST);?> 
      <?php echo "Tere {$username}! Teie parool on {$password}" ;?> 
		?>
<?php 
  if (isset($_POST["username"])) {
    $username = $_POST["username"];
  } else {
    $username = "puudub";
  }
		?>
<?php

  if (isset($_POST["password"])) {
    $password = $_POST["password"];
  } else {
    $password = "puudub";
  }
  */ 
?>
<?php $username = isset($_POST['username']) ? ($_POST['username']) : "puudub"; ?>
<?php $username = isset($_POST['password']) ? ($_POST['password']) : "puudub"; ?>
<!-- if username and parool == username/parool echo stuff
-->

<?php 



  if ($username = $_POST["username"] && $password = $_POST["password"]) {
  	
		echo "Tere {$username}! Teie parool on {$password}";} 
			else {echo "Kasutajanimi või parool on puudu.";};
		

?>
 </pre>
</body>
</html>