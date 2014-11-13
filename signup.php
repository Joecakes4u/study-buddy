<!DOCTYPE html>
<html>
	<head>
		<link href= "bootstrap.css" type = "text/css" rel = "stylesheet">
		<title class="text-center">
      		Study Buddy | Sign Up
    	</title>
	</head>
	<body>
		<?php
			// define variables and set to empty values
			$name = $email = $gender = $comment = $website = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = test_input($_POST["name"]);
				$email = test_input($_POST["email"]);
				$website = test_input($_POST["website"]);
				$comment = test_input($_POST["comment"]);
				$gender = test_input($_POST["gender"]);
			}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>

	 <!--form-->
	 	<h1  class="text-center">Sign Up</h1>
  		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="text-center">
  			Name: <input type="text" name="name"><br>
  			Email: <input type="text" name="email"><br>
  			Gender:
  				<input type="radio" name="gender" value="female">Female
  				<input type="radio" name="gender" value"male">Male
  				<br><br>
  			  	<input type="submit" name="submit" value="Submit" href="welcome.php">
  		</form>

	</body>
</html>