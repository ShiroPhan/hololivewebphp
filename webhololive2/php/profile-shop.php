<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/profile-shop.css">
    <script src="../javascript/javascript-detail.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="icon-shop">
        <a href="http://localhost/webhololive/html/hololiveproductionshop.php"><img src="../anh/hololiveshop.png" alt=""></a>
        <i class="fa-solid fa-magnifying-glass"></i>  
        <div class="input-container">
            <input type="text" id="username" name="username" placeholder="Search... ">
        </div>  
        <ul class="icon-shop-ul">
            <li><a href="http://localhost/webhololive/html/sign.php"><i class="fa-regular fa-user"></i></a></li>
            <li><i class="fa-solid fa-store"></i></li>
            <li><i class="fa-solid fa-language"></i></li>
        </ul>
        </div>
    <div class="detail-tong">
            <div class="product-container">
                <div class="detail-imglamy">
                    <div class="product-images">
                        <img src="../anh/lamy-icon-shop.png" alt="Product Image 1" id="mainImage">
                    </div>
                    <div class="product-thumbnails" onclick="changeImage(event)">
                        <img src="../anh/lamy-icon-shop.png" alt="Detail Image 1">
                        <img src="../anh/lamy-icon1.png" alt="Detail Image 2">
                        <img src="../anh/lamy-icon2.png" alt="Detail Image 3">
                        <img src="../anh/lamy-icon3.png" alt="Detail Image 4">
                        <img src="../anh/lamy-icon4.png" alt="Detail Image 5">
                        <img src="../anh/lamy-icon5.png" alt="Detail Image 6">
                        <img src="../anh/lamy-icon6.png" alt="Detail Image 7">
                     </div>
                     </div>
                     <div class="toggle-container collapsed" onclick="toggleContent(this)">
                        Set Purchase
                        <div class="hidden-content">
                          <p>◇Birthday Merch Complete Set Limited Edition <br>〈Set Details〉 
                            <br>
                            This is the limited edition of the complete set of merch items to celebrate the birthday of Yukihana Lamy. 
                        </br>
                    </br></p>
                          <p>〈Content〉
                            <br>4 Birthday Merch Items 
                            <br>1 Birthday Voice Pack 
                            <br>Bonus: Postcard with a handwritten autograph and duplicated foil-stamped message from Yukihana Lamy. (Illustration: リン☆ユウ)
                            <br>Bonus Voice Pack: "You Can Do It, Right?"
                            <br>The purchase limit for this item is set to a maximum of 1 pc per purchase.
                        </br>
                        </br>
                        </br>
                         </br>
                        </br> 
                        </p>
                          <p>◇Birthday Merch Complete Se
                            <br>4 Birthday Merch Items
                            <br>1 Birthday Voice Pack
                            <br>Bonus: Postcard with a duplicated foil-stamped autograph and message from Yukihana Lamy. (Illustration: リン☆ユウ)
                            <br>・Bonus Voice Pack: "You Can Do It, Right?"
                        </br>
                        </br>
                        </br>
                    </br>
                          </p>
                        </div>
                      </div>
    
                      <div class="toggle-container collapsed" onclick="toggleContent(this)">
                        Product Detail
                        <div class="hidden-content">
                          <p>◇Birthday Merch Items <br>Visual Towel <br>
                            Illustration: リン☆ユウ 
                            <br>Size: Approx. H87×W34cm 
                            <br>Material: Polyester</br>
                        </br>
                        </br></br>
                            </p>
                          <p>Yamenaa Sports T-Shirt
                            <br>Size: One-size-fits-all (Approx. Length 79cm / Width 59cm / Shoulder Width 54cm / Sleeve Length 24.5cm)
                            <br>1 Birthday Voice Pack 
                            <br>Material: Polyester
                            <br>Yamenaa Shakey-Shaker
                            <br>Size: Approx. ⌀85×H156mm
                            　Volume: Approx. 450mL
                            　Material: Polypropylene, Polyethylene
                        </br>
                        </br>
                        </br>
                         </br>
                        </br> 
                        </p>
                          <p>◇Digital Contents
                            <br>・Situation Voice Pack "Let's Work Out Together at the Gym! </br>
                          </p>
                        </div>
                      </div>
    
    
                      <div class="toggle-container collapsed" onclick="toggleContent(this)">
                        For overseas customers
                        <div class="hidden-content">
                          <p>For the precautions and the list of currently available areas for international delivery, please refer to the link below. </p>
                          <p>For customers residing outside of available areas for international delivery, our products are available at GeekJack as well.
                        </p>
                          </p>
                        </div>
                      </div>
    
                      <div class="toggle-container collapsed" onclick="toggleContent(this)">
                        Please read before you buy
                        <div class="hidden-content">
                          <p>In case you purchased a product together with the made-to-order products or other products with the specified shipping period, your parcel will be shipped once all the purchased products are ready to be shipped. </p>
                          <p>Product image for illustration purposes only. Actual product may vary.
                        </p>
                          </p>
                          <p>Actual product color may vary depending on your display of use.</p>
                          <p>If the product quota is reached, the sales may end without any prior notice.</p>
                          <p>Please contact us here for the inquiries regarding exchanges and damaged products.</p>
                          <p>We do not accept any cancel request once the transaction has been made.</p>
                          <p>For further details, please refer to the「Notation based on the Specified Commercial Transactions Law」</p>
                          <p>※If you live in the US, our services are intended for general audiences and are not targeted at children under the age of 13</p>
                        </div>
                      </div>
                      
                      <script>
                        function toggleContent(element) {
                          // Đảo ngược trạng thái mở rộng/thu gọn
                          element.classList.toggle('expanded');
                          element.classList.toggle('collapsed');
                      
                          // Đảo ngược trạng thái hiển thị của nội dung
                          var hiddenContent = element.querySelector('.hidden-content');
                          hiddenContent.style.display = (hiddenContent.style.display === 'none' || hiddenContent.style.display === '') ? 'block' : 'none';
                        }
                      </script>
                </div>
                <div class="lamy-detail1">
                    <h2>Yukihana Lamy Birthday Celebration 2023</h2>
                    <div class="horizontal-gradient-line">
                    </div>
                    <div class="reprot" >
                        <p>Order Period : 2023/11/15 22:10 ~ 2023/12/18 18:00 (JST)</p>
                    </div>
                    <p>The merchandise sales for the birthday celebration of Yukihana Lamy from hololive.</p>
                    <p>These products are made to order.</p>
                    <p>〈Shipping Schedule〉
                        <br>Estimated around late April to late May 2024.
                        <br>* Voice packs can be purchased and downloaded even after the sales period.
                    </br>However, please note that product sales may end without any prior notice.<br><br>〈Purchase Limitation 
                    <br>Birthday Merch Complete Set Limited Edition: Maximum of 1 pc per purchase.</br></br></br></br> 
                    </p>
                    <div class="ul-lamy">
                        <p>Category:</p>
                        <ul>
                            <li><a href="">SET</a></li>
                            <li><a href="">MERCH</a></li>
                            <li><a href="">Digital Content</a></li>
                        </ul>
                        <p>Product:</p>
                        <ul>
                            <li><a href="">Birthday Merch Complete Set Limited Edition ¥12,210</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Birthday Merch Complete Set ¥12,210</a></li>
                        </ul>
                         <p>Qty.</p>
                    </div>
                    <div class="quantity-container">
                        <!-- Nút giảm số lượng -->
                        <button class="quantity-button" onclick="decreaseQuantity()">-</button>
                      
                        <!-- Ô hiển thị số lượng -->
                        <span class="quantity-display" id="quantity">1</span>
                      
                        <!-- Nút tăng số lượng -->
                        <button class="quantity-button increment" onclick="increaseQuantity()">+</button>
                      </div>
                      <script>
                        // JavaScript để giảm số lượng
                        function decreaseQuantity() {
                          var quantityDisplay = document.getElementById('quantity');
                          var currentQuantity = parseInt(quantityDisplay.innerText, 10);
                          if (currentQuantity > 1) {
                            quantityDisplay.innerText = currentQuantity - 1;
                          }
                        }
                      
                        // JavaScript để tăng số lượng
                        function increaseQuantity() {
                          var quantityDisplay = document.getElementById('quantity');
                          var currentQuantity = parseInt(quantityDisplay.innerText, 10);
                          quantityDisplay.innerText = currentQuantity + 1;
                        }
                      </script>
                      <div class="pre-oder">
                        <a href="#" class="preorder-button">PRE-ORDER</a>
                      </div>
                      </div>
                </div>
        </div>
    </div>
    <div class="new-arrival">
        <div class="img-info">
            <img src="../anh/Recoment.png" alt="">
        </div>
      </div>
      <div class="hidden-img">
        <ul style="width: 92%;">
          <li><a href=""><img class="animate__animated animate__fadeInUp" src="../anh/shion.png" alt="Fading In Image">雪花ラミィ 誕生日記念2023 <br><p>¥1,650~</p></br></a></li>
          <li><a href=""><img src="../anh/towa.png" alt="Floating Image">AZKi 活動5周年記念 <br><p>¥880~</p></br></a></li>
          <li><a href=""><img src="../anh/3d.png" alt="">hololive closet ロボ子さん ドレス衣装 <br><p>¥1,650</p></br></a></li>
          <li><a href=""><img src="../anh/5on.png" alt="">hololive closet さくらみこ 私服衣装 <br><p>¥1,650</p></br></a></li>
        </ul>
      </div>
        <div class="new-arrival">
            <div class="img-info">
                <img src="../anh/history.png" alt="">
            </div>
          </div>
          <div class="hidden-img">
            <ul style="width: 95%;">
              <li><a href=""><img class="animate__animated animate__fadeInUp" src="../anh/sorashop.png" alt="Fading In Image">雪花ラミィ 誕生日記念2023 <br><p>¥1,650~</p></br></a></li>
              <li><a href=""><img src="../anh/me.png" alt="Floating Image">AZKi 活動5周年記念 <br><p>¥880~</p></br></a></li>
              <li><a href=""><img src="../anh/nene`.png" alt="">hololive closet ロボ子さん ドレス衣装 <br><p>¥1,650</p></br></a></li>
              <li><a href=""><img src="../anh/ayame.png" alt="">hololive closet さくらみこ 私服衣装 <br><p>¥1,650</p></br></a></li>
            </ul>
            </div>
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
<br></br>