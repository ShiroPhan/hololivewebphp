<?php
session_start();
$login_success = false;
require '../db/connect.php';

if (isset($_POST['bth-login'])) { 
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Đăng nhập thành công";
            $login_success = true; // Đặt biến thành true sau khi đăng nhập thành công
            $user_data = $result->fetch_assoc();
            $_SESSION['iduser'] = $user_data['iduser'];
            $_SESSION['username'] = $user_data['username']; // Lưu tên người dùng vào phiên làm việc
        } else {
            echo "Sai tên đăng nhập hoặc mật khẩu";
        }
    } else {
        echo "Insert Form";
    }

    if ($login_success) {
        header('Location: http://localhost/webhololive2/php/hololiveproductionshop.php');
        exit();
    }
}
?>
