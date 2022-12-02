<?php
	include "connect.php";
	
	if(isset($_POST['submit'])){

		$a = $_POST['uname'];
		$b = $_POST['password'];
		
		$sq = "SELECT * from aflah_s1_mca WHERE username='$a' and password='$b'";
		$r = mysqli_query($cn, $sq);

		if(mysqli_num_rows($r)>0){
			header("Location:home.php");
		}
		else{
			echo "Username or Password Incorrect";
		}
	}
	
?>

<html>
	<body>
		<form method="post" acton="login.php">
			Username:
			<input type="text" name="uname">
			Password:
			<input type="password" name="password">
			<input type="submit" name="submit" value="LOGIN">
		</form>
	</body>
</html>
