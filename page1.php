<?php 
session_start();
$user_name="AKWADIT";
$_SESSION['user_name']=$user_name;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page1</h1>
    <h3><a href="page2.php">page2</a></h3>
</body>
</html>