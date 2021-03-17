<?php
ini_set('display_errors', 1);
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
			$name;
			$email;
			$nameErr;
			$emailErr;

			if (isset(trim($_POST['submit']))) {
				//Check if name was submitted
				if (empty($_POST['name'])) {
					$nameErr = "Name is required.";
				} else {
					$name = trim($_POST['name']);
				}
				//Check if email is submitted
				if (empty($_POST['email'])) {
					$emailErr = "Email is required";
				} else {
					$email = trim($_POST['email']);
				}
			}
			?>
			<form action="" method="post">
				<div class="form-title-row">
					<h1>Sign up for our movie pass newsletter!</h1>
				</div>
				<div class="form-field">
					<label for="name">Your Name</label>
					<input type="text" name="name" placeholder="Your Name Here" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
					<span class="error">* <?= $nameErr ?? "" ?></span>
				</div>
				<div class="form-field">
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="Email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
					<span class="error">* <?= $emailErr ?? "" ?></span>
				</div>
				<div class="form-field">
					<button name="submit" type="submit">Sign Up</button>
				</div>
			</form>
			<?= $name ?>
			<?= $email ?>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>