<?php
session_start();

require '../db/connect.php';

// Kiểm tra xem đã có session và username hay chưa
if (isset($_SESSION['iduser'])) {
    $logged_in_username = $_SESSION['iduser'];

    if (isset($_POST['ORDER'])) {
        $image = $_POST['image'];
        $name = $_POST['name'];
        $content = $_POST['content'];
        $price = $_POST['price'];
        $quantity=$_POST['quantity'];
        $TotalPrice = $_POST['TotalPrice'];

        if (!empty($image) && !empty($name)) {
            echo "<pre>";
            $sql = "INSERT INTO `oder_product` (`image`,`name`,`content`,`price`,`quantity`,`TotalPrice`)
            VALUES ('$image','$name','$content','$price','quantity','$totalPrice') ";

            if ($conn->query($sql) === true) {
                echo "<script>
                    alert('Order Success');
                    window.location.href='shop_cart.php';
                </script>";
                $registration_success = true;
            } else {
                echo "Lỗi {$sql}" . $conn->error;
            }
        }
    }
} else {
    echo "Người dùng chưa đăng nhập";
}
?>
