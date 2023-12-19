<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/sing.css">
</head>
<body>
    <div class="icon-shop">
        <a href="http://localhost/webhololive2/html/hololiveproductionshop.php"><img src="../anh/hololiveshop.png" alt=""></a>
        <i class="fa-solid fa-magnifying-glass"></i>  
        <div class="input-container">
            <input type="text" id="username" name="username" placeholder="Search... ">
        </div>  
        <ul class="icon-shop-ul">
            <li><i class="fa-regular fa-user"></i></li>
            <li><i class="fa-solid fa-store"></i></li>
            <li><i class="fa-solid fa-language"></i></li>
        </ul>
        </div>
    </div>
    <div class="login-container">
        <form class="login-form" action="reg.php" method="post">
            <h2>Create Account</h2>
            <label for="username">Please enter your email and password</label>
            <input type="text" id="username" name="username" placeholder="E-mail-Address">

            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Passowrd">

            <button type="submit" name="bth-reg"> Create</button>
            <p>Do Your Have Account ? <a href="http://localhost/webhololive1/html/sign.php"> Login Here</a></p>
        </form>
    </div>
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
      </div> 
</body>
</html>