<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>

		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "ITSG");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$firstname = $_REQUEST['firstname'];
		$lastname = $_REQUEST['lastname'];
		$idNo = $_REQUEST['idNo'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO register VALUES ('$firstname',
			'$lastname','$idNo','$username','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Registration Complete</h3>";
            echo "<p><a href=\"loginform.php\">Login</p>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

</body>

</html>
