<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css//hololiveproductionshop.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/profile-shop.css">
</head>

<body>
    <?php
    include("../php/php-shop/headeshop.php");
    ?>
    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="col-lg-12 text-center border rounded bg-light my-5">
                    <h1>MY CART</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Content</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM `cart_product`";
                            $result = mysqli_query($conn, $query);
                            $i = 1;
                            $fetch_src = FETCH_SRC;
                            $totalPrice = 0;

                            while ($fetch = mysqli_fetch_assoc($result)) {
                                $products[] = $fetch;
                                $quantity = 1; // Giả sử mỗi sản phẩm có số lượng mặc định là 1
                                $subtotal = $fetch['price'] * $quantity;
                                $totalPrice += $subtotal;

                                echo <<<product
                
        <tr>
            <th scope="row">$i</th>
            <td><img src="$fetch_src$fetch[image]" width="90px"></td>
            <td>$fetch[name]</td>
            <td>$fetch[content]</td>
            <td id='price_$i'>$fetch[price]</td>
            <td>
                <input type='number' id='quantity_$i' value='$quantity' min='1' max='10'>
                <button onclick='updateTotalPrice($i); return false;'>Update</button>
        <button onclick="confirm_rem($fetch[idcartproduct]); return false;" class="btn btn-danger"><i class="bi bi-trash"></i></button>
            </td>
            <input type="hidden" name="image" value="$fetch[image]">
            <input type="hidden" name="name" value="$fetch[name]">
            <input type="hidden" name="content" value="$fetch[content]">
            <input type="hidden" name="price" value="$fetch[price]">
            <input type="hidden" name="quantity" value="$quantity">
            <input type="hidden" name="totalPrice" value="$totalPrice">
        </tr>
    product;
                                $i++;
                            }

                            echo "<tr>
                            <td colspan='3' style='text-align: center; padding-right:430px'></td>
                            <td style='text-align: center; font-weight: bold; border: 2px solid #000; padding: 10px; '>¥Total:</td>
                            <td style='text-align: center; font-weight: bold; border: 2px solid #000; padding: 10px;' id='totalPrice'>$totalPrice</td>
                            </tr>";
                            ?>
                            <script>
                                var initialQuantities = []; // Mảng để lưu trữ số lượng ban đầu của từng sản phẩm

                                // Lưu trữ số lượng ban đầu khi trang được tải
                                document.addEventListener('DOMContentLoaded', function() {
                                    for (var i = 1; i <= <?php echo $i - 1; ?>; i++) {
                                        var initialQuantity = parseInt(document.getElementById('quantity_' + i).value);
                                        initialQuantities.push(initialQuantity);
                                    }
                                });

                                function updateTotalPrice(index) {
                                    var inputElement = document.getElementById('quantity_' + index);
                                    var quantity = parseInt(inputElement.value);
                                    var initialQuantity = initialQuantities[index - 1]; // Lấy số lượng ban đầu

                                    var price = parseFloat(document.getElementById('price_' + index).innerText);

                                    // Cập nhật tổng giá trị
                                    var subtotalChange = (quantity - initialQuantity) * price; // Tính sự thay đổi của tổng giá trị
                                    var totalPriceElement = document.getElementById('totalPrice');
                                    var currentTotal = parseFloat(totalPriceElement.innerText);
                                    var newTotal = currentTotal + subtotalChange;

                                    // Lưu trữ số lượng mới
                                    initialQuantities[index - 1] = quantity;

                                    // Cập nhật tổng giá trị
                                    totalPriceElement.innerText = newTotal.toFixed(2);
                                }
                            </script>
                        </tbody>
                    </table>
                    <button type="submit" class="preorder-button" style="margin-left: 0px;" name="ORDER">ORDER</button>
            </form>
        </div>
    </div>
    </div>
    </form>
    <div class="footer">
        <ul><img src="../anh/FooterIcon.png" alt="">インフォメーション
            <li><a href="">特定商取引法に基づく表記</a></li>
            <li><a href="">プライバシーポリシー</a></li>
            <li><a href="">利用規約</a></li>
            <li><a href="">Privacy Policy for US Residents</a></li>
            <li><a href="">Q&A</a></li>
            <li><a href="">国際配送</a></li>
        </ul>
        <ul><img src="../anh/FooterIcon.png" alt="">関連サイト
            <li><a href="">カバー株式会社 公式サイト</a></li>
            <li><a href="">ホロライブプロダクション 公式サイト</a></li>
            <li><a href="">ホロライブ 公式サイト</a></li>
            <li><a href="">ホロスターズ 公式サイト</a></li>
        </ul>
        <ul><img src="../anh/FooterIcon.png" alt="">SNS
            <li><a href="">TWITTER</a></li>
            <li><a href="">YOUTUBE</a></li>
        </ul>
    </div>
    <div class="footer-bank">
        <ul>
            <li><a href=""><img src="../anh/amazonpay.png" alt=""></a></li>
            <li><a href=""><img src="../anh/amex.png" alt=""></a></li>
            <li><a href=""><img src="../anh/google.png" alt=""></a></li>
            <li><a href=""><img src="../anh/jcb.png" alt=""></a></li>
            <li><a href=""><img src="../anh/visashop.png" alt=""></a></li>
            <li><a href=""><img src="../anh/paypal.png" alt=""></a></li>
            <li><a href=""><img src="../anh/shop.png" alt=""></a></li>
            <li><a href=""><img src="../anh/visa.png" alt=""></a></li>
        </ul>
        <script>
            function confirm_rem(idcartproduct) {
                if (confirm("Are You Sure, Want delete this item ?")) {
                    window.location.href = "manager_cart.php?rem=" + idcartproduct;
                }
            }
        </script>
</body>

</html>