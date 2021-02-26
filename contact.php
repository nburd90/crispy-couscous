<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"/>

</head>

<body>
    
<h1>Sign up for our movie pass!</h1>
<form class="form-horizontal" roles="form" method="post">
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Full Name</label>
      <input type="text" class="form-control" name="fullName" id="inputEmail4" placeholder="Full Name Here">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
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
      <input type="text" class="form-control" id="inputZip">
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
    
    
    <?php
       $fullName = $_POST["fullName"];
       $email = $_POST['name'];

       ?>
    
    
    
    
    
    
    <div name="form">
        <form method="post" name="your-message">
            Full Name: <input type="text" name="fullName"/><br>
            Email: <input type="email" name="email"/><br>
            Your Message: <textarea name="yourMessage">type here</textarea><br>
            <input type="submit" value="send message"/>
        </form>
    </div>

    <?php 
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $yourMessage = $_POST["yourMessage"];

        echo "Hello $fullName <br>";
        echo "We will respond to your message @ $email <br>";
        
    ?>
    
</body>
</html>