<?php

//Show errors for debugging purposes
ini_set('display_errors', 1);

$errors = array();
$sent = false;

//Check for form submission - Is the form empty? 
if ( ! empty( $_POST)) {
  //Process the form - Will refer to process_form function. 
  $process = process_form( $_POST );
}

//Check for errors - Determines whether it sends back blanket message or array of diff errors.
if (!empty($process['message'])) {
  $errors[] $process['message'];
} else if (!empty($process['errors'])) {
  $errors = $process['errors'];
} else {
  $sent = true;
}



?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"/>

</head>

<body>
    

<div class="container">
  <div name="form"> 
  
    <form class="form-validation" roles="form" method="post" action="contact.php">
      <div class="form-title-row">
        <h1>Sign up for our movie pass newsletter!</h1>
      </div>
      <?php if ( ! empty ($errors)) : ?>
        <div class="errors">
          <p class="bg-danger"><?php echo implode('.</p><p class="bg-danger">', $errors); ?> .</p>
        </div>
      <?php elseif ( $sent ) : ?>
        <div class="success">
        <p class="bg-success">Your message was sent!</p>
        </div>  
      <?php endif; ?>
      
      <div class="form-row form-input-name-row">
          <label>
            <span>Your name</span>
              <input id="name" type="text" name="name"  placeholder="Your Name Here" value="<?= validate_input('name');?> ">
          </label>  
        </div>
        
        <div class="form-row form-input-email-row">
          <label>
            <span>Email</span>  
            <input id="email" type="email" name="email"  placeholder="Email" value="<?= validate_input('email');?> ">
          </label>
        </div>

       <div class="form-row form-input-message-row">
          <label>
            <span>Your Message</span>
            <textarea id="message" rows="4" name="message" ><?= validate_input('message');?></textarea>
          </label> 
        </div>

        <div class="form-row form-input-human-row">
          <label>
            <span>2 + 3 = ?</span>
            <input id="human" type="text" name="human" placeholder="Your Answer">
          </label>
        </div> 
      
      
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Click for personalized access!
          </label>
        </div>
      </div>
      
      <div class="form-row">
        <button type="submit">Submit Form</button>
      </div>
    </form>
  </div>
</div>
    
    

    <br>
    <br>
    <br>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>