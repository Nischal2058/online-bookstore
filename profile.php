<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Profile</title>
</head>
<body>
    <?php
        include "header.php";
        if (!isset($_SESSION["email"])) {
            header("location: index.php?error=alreadyloggedin");
            exit();
        }
        else {
            echo '<main>';
            echo '<h1>' . $_SESSION["name"] . '</h1>';
            
            echo '</main>';
        }
    ?>
</body>
</html>