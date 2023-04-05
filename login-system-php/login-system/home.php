<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="Q1-v2.php" id="Q1">Commencer</a>
     <a href="logout.php" id="logout" >Fuir !</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>