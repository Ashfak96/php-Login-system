<?php
	include 'connect_to_db.php';
	include 'logs.php';
	$conn = OpenCon();
?>
<html>
	<head>
		<style>
			p {
				font-style:italic;
			}
		</style>
		<body>
			<h2>Login</h2>
			<h5>Type in your credentials</h5>
			<br>
				<form action = 'getinfo.php' method = 'POST'>
				<label for = 'username'>Username</label>
				<input type = 'text' name = 'username' id = 'username'>
				</br>
				<label for = 'password'>Password</label>
				<input type = 'text' name = 'password' id = 'username'>
				</br>
				<input type = 'submit'>
			</form>
		</body>
	</head>
</html>

<?php
	$sql = 'SELECT * FROM login';
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		
		while($row = mysqli_fetch_assoc($result)){
			echo $row["username"]." ". $row["pass"]. '<br>'; 
		}

		
	} else {
		echo 'echo 0 results';
	}
?>