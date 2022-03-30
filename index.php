<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        input{
            width: 235px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Form Submission</h1>
        <form action="setup.php" method="post">
            <input type="text" name="name" placeholder="Enter your name">
            <br>
            <br>
            <input type="text" name="address" placeholder="Enter your address">
            <br>
            <br>
            <input type="text" name="email" placeholder="Enter your email">
            <br>
            <br>
            <textarea name="comment" id="" cols="30" rows="10" placeholder="Leave a comment" style="resize:none"></textarea>
            <br>
            <br>
            <input type="submit" name="adduser">
            <?php
            if(isset($_SESSION['status']))
            {
                echo "<h2>".$_SESSION['status']."</h2>";
                unset($_SESSION ['status']);
                
            }
            ?>
        </form>
    </center>
</body>
</html>