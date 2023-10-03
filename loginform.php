<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $welcomeMessage = "Welcome to the members area, " . $_SESSiON['username'] . "!";
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>INFOMATION TECHNOLOGY SUPPORT GROUP</title>
</head>
<body>
        <h1 align="center">INFOMATION TECHNOLOGY SUPPORT GROUP</h1>
		<h1 align="center">BORROWER'S FORM</h1>
		<form action="index.php" method="post">
<p>
			<label for="username">Username:</label>
			<input type="text" name="name" id="Username" placeholder="username">
			</p>

			
<p>
			<label for="password">Password:</label>
			<input type="password" name="passwword" id="Password" placeholder="password">
			</p>
			<input type="submit" value="Login">
			</form>
            <p><a href="registration.php">Register Here!</a></p>
<?
if(!empty($welcomeMessage)) echo $welcomeMessage;
?>
</body>
</html>
