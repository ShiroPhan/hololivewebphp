<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hololive Admin Login</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="hololive-login-container">
    <img src="../anh/zxc.png" alt="Hololive Logo" class="hololive-logo">
    <h1>Hololive Admin</h1>
    <form action="adminlogin.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="bth-login-admin">Login</button>
    </form>
</div>

</body>
</html>