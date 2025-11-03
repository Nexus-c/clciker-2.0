<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="login.php">
        Username:<br>
        <input type="text" name="username">
        Password:<br>
        <input type="password" name="password">
    </form>
</body>
</html>
<?php
    $_SESSION['username'] = $_POST['username'];
?>