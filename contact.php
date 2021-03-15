<?php
ini_set('display_errors', 1);
require_once('config.php');
//Check for form submission - Is the form empty? 
if (!empty($_POST)) {
	//Connect and escape
	$mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);



	//Submit to database
	//$query = "INSERT INTO users (name,email) VALUES ('$name','$email')";
	//$insert = $mysql->query($query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
</head>

<body>
	<div class="container">
		<div name="form">
			<?php
			$newReader = "";
			$email = "";
			$nameErr = "";
			$emailErr = "";
			$error = array();

			//$bError = false;



			function test_input($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}


			if (isset($_POST['submit-btn'])) {
				if (!empty(trim($_POST["name"]))) {
					//$newReader->name = trim($_POST['name']);
				}
			} else {
				$bError = true;
				$error["name"] = 'Name cannot be empty.';
			}

			if (!empty(trim($_POST["email"]))) {
				//$student->setEmail(trim($_POST['email']));
			} else {
				$bError = true;
				$error["email"] = 'Email is needed for submission!';
			}

			?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-title-row">
					<h1>Sign up for our movie pass newsletter!</h1>
				</div>
				<div class="form-field">
					<input type="text" name="name" placeholder="Your Name Here" value="">
					<span class="error"><?= $nameErr ?></span>
				</div>
				<div class="form-field">
					<input type="email" name="email" placeholder="Email" value="">
					<span class="error"><?= $emailErr ?></span>
				</div>
				<div class="form-field">
					<button type="submit">Sign Up</button>
				</div>
			</form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>