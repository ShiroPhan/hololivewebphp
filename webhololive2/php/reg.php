
<?php
$registration_success = false;
require '../db/connect.php';

if (isset($_POST['bth-reg'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        echo "<pre>";
        $sql = "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password') ";

        if ($conn->query($sql) === true) {
            echo "Đăng ký thành công";
            $registration_success = true; // Đặt biến thành true sau khi đăng ký thành công
        } else {
            echo "Lỗi {$sql}" . $conn->error;
        }
    } else {
        echo "Insert Form";
    }

    if ($registration_success) {
        header('Location: http://localhost/webhololive2/php/sign.php'); // Chuyển hướng đến trang đăng nhập sau khi đăng ký thành công
        exit();
    }
}
?>

