<?php
session_start();

//Credentials
$username = "Pauleen";
$password = "1234";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUser = $_POST["username"] ?? "";
    $inputPass = $_POST["password"] ?? "";

    if ($inputUser === $username && $inputPass === $password) {
        $_SESSION["loggedin"] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Incorrect username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">
    <div class="login-box">
        <h2>Welcome!</h2>

        <?php if ($error): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
