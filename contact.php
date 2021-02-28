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
  <form class="form-horizontal" roles="form" method="post">
    <div class="form-row">
      
      <div class="form-group col-md-6">
        <label for="name">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" placeholder="Full Name Here" value="<?php echo htmlspecialchars($name);?>"/>
        </div>
        <?php echo "<p class='text-danger'>$errName</p>";?>
      </div>
      
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value="<?php echo htmlspecialchars($name);?>"/>
        <?php echo "<p class='text-danger'>$errEmail</p>";?>
      </div>

      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" value="<?php echo htmlspecialchars($name);?>"/>
      </div>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" value="<?php echo htmlspecialchars($name);?>"/>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" value="<?php echo htmlspecialchars($name);?>" />
      </div>
      <div class="form-group">
      <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
        <?php echo "<p class='text-danger'>$errHUman</p>";?>
      </div>
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
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>
</div  
    
    <?php
       $fullName = $_POST["fullName"];
       $email = $_POST['email'];

      if (!$_POST['Name']) {
        $errName = 'Please enter your name';
      }

      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
      }

      if ($human !==5) {
        $errHuman = 'Your anti-spam is incorrect';
      }

    ?>
    
    
    <br>
    <br>
    <br>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
  </body>
  

</html>