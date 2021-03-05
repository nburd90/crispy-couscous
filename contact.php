<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    
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
    
</body>
</html>