<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">"/>
    
</head>

<body>
<?php include('nav-bar.php'); ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>