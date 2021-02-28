<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"/>

</head>

<body>
    
<h1>Sign up for our movie pass!</h1>
<div class="container">
  <form class="form-horizontal" roles="form" method="post" action="contact.php">
    <div class="form-row">
      
      <div class="form-group col-md-6">
        <label for="name" class="col-sm-2 control-label">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" placeholder="Full Name Here" value="<?php echo htmlspecialchars($_POST['name']); ?>" >
          <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>" >
        <?php echo "<p class='text-danger'>$errEmail</p>";?>
      </div>

      <div class="form-group cold-md-6">
		    <label for="message" class="col-sm-2 control-label">Message</label>
		    <div class="col-sm-10">
			  <textarea class="form-control" rows="4" name="message"></textarea>
		  </div>
	  </div>

      <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" value="">
        <?php echo "<p class='text-danger'>$errHUman</p>";?>
        </div>
      </div>
    
    
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Click for personalized access!
        </label>
      </div>
    </div>
    
    <div class="form-group">
		  <div class="col-sm-10 col-sm-offset-2">
			  <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		  </div>
	  </div>
	  
    <div class="form-group">
		  <div class="col-sm-10 col-sm-offset-2">
			  <! Will be used to display an alert to the user>
		  </div>
	  </div>
  </form>
</div  
    
    <?php 
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $human = intval($_POST['human']);
      
      $from = 'Demo Contact Form'; 
      $to = 'example@domain.com'; 
      $subject = 'Message from Contact Demo';

      $body = "From: $name\n E-Mail: $email\n Message:\n $message";

      if (!$_POST['name']) {
        $errName = 'Please enter your name';
      }

      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
      }

      if (!$_POST['message']) {
        $errName = 'Please enter your name';
      }

      if ($human !==5) {
        $errHuman = 'Your anti-spam is incorrect';
      }
     
      if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'contact form';
        $to = 'example@domain.com';
        $subject = 'movie pass signup';

        $body = "From: $name E-Mail: $email Message: $message";


      }

        //Check if name has been entered
        if (!$_POST['name']) {
          $errName = 'Please enter your name';
        }

        // Check if email has been entered and is valid 
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $errEmail = 'Please enter your name';
        }

        // Check if simple anti-bot test is correct
        if ($human !==5) {
          $errHuman = 'Your anti-spam is correct';
        }

        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errHuman)  {
          if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
          } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
      }
    ?>

    <br>
    <br>
    <br>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>