<?php
$login_success = false;
require '../db/connect.php';

if (isset($_POST['bth-login-admin'])) { 
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        echo "<pre>";
        $sql = "SELECT * FROM `admin-hololive-data` WHERE `username` = '$username' AND `password` = '$password'"; //  INSERT 

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Đăng nhập thành công";
            $login_success = true; // Đặt biến thành true sau khi đăng nhập thành công
        } else {
            echo "Sai tên đăng nhập hoặc mật khẩu";
        }
    } else {
        echo "Insert Form";
    }

    if ($login_success) {
        header('Location: http://localhost/webhololive1/phpadmin/admincr.php'); // Chuyển hướng đến trang sau khi đăng nhập thành công
        exit();
    }
}
?>