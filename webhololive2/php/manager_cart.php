<?php
session_start();

require '../db/connect.php';

// Kiểm tra xem đã có session và username hay chưa
if (isset($_SESSION['iduser'])) {
    $logged_in_username = $_SESSION['iduser'];

    if (isset($_POST['ADD_To_Cart'])) {
        $image = $_POST['image'];
        $name = $_POST['name'];
        $content = $_POST['content'];
        $price = $_POST['price'];

        if (!empty($image) && !empty($name)) {
            echo "<pre>";
            $sql = "INSERT INTO `cart_product` (`image`,`name`,`content`,`price`)
            VALUES ('$image','$name','$content','$price') ";

            if ($conn->query($sql) === true) {
                echo "<script>
                    alert('Item Added Success');
                    window.location.href='hololiveproductionshop.php';
                </script>";
                $registration_success = true;
            } else {
                echo "Lỗi {$sql}" . $conn->error;
            }
        }
    }


    if (isset($_GET['rem']) && $_GET['rem'] > 0) {
        $query = "SELECT * FROM `cart_product` WHERE `idcartproduct`='$_GET[rem]'";
        $result = mysqli_query($conn, $query);
        $fetch = mysqli_fetch_assoc($result);


        $query = "DELETE  FROM `cart_product` WHERE `idcartproduct`='$_GET[rem]'";
        if (mysqli_query($conn, $query)) {
            header("location: shop_cart.php?success=removed");
        } else {
            header("location: shop_cart.php?alert=removed_failed");
        }
    }
} else {
    echo "Người dùng chưa đăng nhập";
}
?>
