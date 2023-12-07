<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page2 <span>User name :<?php echo $_SESSION['user_name'] ?></span></h1> 
    <h3><a href="page1.php">page1</a></h3>
</body>
</html>