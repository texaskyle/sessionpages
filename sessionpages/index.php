<?php
include ("nav.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>index page</h1>
    <?php
//    echo $_SESSION["username"];
if(!isset($_SESSION["username"])) {
    echo "you are not logged in!";
} else{
    echo "you are logged in!";
}
    ?>
</body>
</html>