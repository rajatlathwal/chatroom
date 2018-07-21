<?php

session_start();
include 'dbh.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>
<body>
<div class="container">
<h1 class="section-heading text-uppercase col-lg-12 text-center"><i class="fa fa-user-circle-o fa-spin" aria-hidden="true"></i><?php echo $_SESSION['name']; ?>-online</h1>
<div class="container">
	<div class="output">
		<div class="container">

		<?php
		
		$sql="SELECT *FROM posts";
		$result=$conn->query($sql);
		
		if ($result->num_rows>0) {
			//output data of each row
			while($row=$result->fetch_assoc()){
				
				echo "  ".$row["name"]."".": ".$row["msg"]." --".$row["date"]."<br>";
				echo "<br>";
			}
			   }
   else {
		echo "0 results";	
		}
		
	$conn->close();
		?>
	</div>	
	</div>	
	</div>
	<div class="container">
<form action="send.php" method="post">
	<textarea name="msg" placeholder="type to send message..." class="form-control"></textarea><br />
	<input type="submit" value="send" />	
</form>	
<br />
<form action="logout.php" method="post">

	<input style="width: 100%; background-color: #6495ed;color: white; font-size: 20px" type="submit" value="logout"  />
	
</form>	
</div>	
</div>
</body>
</html>