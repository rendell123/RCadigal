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
		$date = $_REQUEST['date'];
		$checkout_date = $_REQUEST['checkout_date'];
		$checkout_time = $_REQUEST['checkout_time'];
		$items = $_REQUEST['items'];
		$quantity = $_REQUEST['quantity'];
        $name = $_REQUEST['name'];
        $released = $_REQUEST['released'];
        $approved = $_REQUEST['approved'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$date',
			'$checkout_date','$checkout_time','$items','$quantity','$name','$released','$approved')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$date\n $checkout_date\n "
				. "$checkout_time\n $items\n $quantity\n $name\n $released\n $approved");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

</body>

</html>
