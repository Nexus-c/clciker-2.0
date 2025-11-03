<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="login-container">
            <form method="post" action="login.php" class=>
            Username:<br>
            <input type="text" name="username"><br>
            Password:<br>
            <input type="password" name="password"><br>
            <input type="submit" value="login"><br>
        </form>
    </div>
</body>
</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // For demonstration purposes, we use hardcoded credentials.
        // In a real application, you should verify against a database.
        $valid_username = 'user';
        $valid_password = 'pass';

        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['loggedin'] = true;
            header('Location: index.php');
            exit();
        } else {
            echo "Invalid username or password.";
        }
        header('Location: index.php');
    }
?>