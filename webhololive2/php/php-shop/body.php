<div class="new-arrival">
  <div class="img-info">
    <img src="../anh/info.png" alt="">
  </div>
</div>
<div class="hidden-img">
  <ul>
    <li><a href="http://localhost/webhololive1/php/profile-shop.php"><img class="animate__animated animate__fadeInUp" src="../anh/lamyshop.png" alt="Fading In Image">雪花ラミィ 誕生日記念2023 <br>
        <p>¥1,650~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/unknowshop.png" alt="Floating Image">AZKi 活動5周年記念 <br>
        <p>¥880~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/unknowshop2.png" alt="">hololive closet ロボ子さん ドレス衣装 <br>
        <p>¥1,650</p></br>
      </a></li>
    <li><a href=""><img src="../anh/mikoshop.png" alt="">hololive closet さくらみこ 私服衣装 <br>
        <p>¥1,650</p></br>
      </a></li>
  </ul>
  <ul>
    <li><a href=""><img src="../anh/chuotshop.png" alt="">hololive closet ときのそら 私服衣装 <br>
        <p>¥1,650</p></br>
      </a></li>
    <li><a href=""><img src="../anh/neneshop.png" alt="">桃鈴ねね 3Dライブ開催記念 <br>
        <p>¥1,100~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/thangdauboishop.png" alt="">アルランディス 誕生日記念2023 <br>
        <p>¥550~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/marineshop.png" alt="">宝鐘マリン 活動4周年記念 <br>
        <p>¥2,750~</p></br>
      </a></li>
  </ul>
</div>
<div class="titile-img">
  <img src="../anh/tiltleshop.png" alt="">
</div>
</div>
<div class="new-arrival">
  <div class="img-info">
    <img src="../anh/ending.png" alt="">
  </div>
</div>
<div class="hidden-img">
  <form action="manager_cart.php" method="post">
    <div class="hidden2-img" style="display : flex;">

      <?php
      $query = "SELECT * FROM `product`";
      $result = mysqli_query($conn, $query);
      $fetch_src = FETCH_SRC;

      while ($fetch = mysqli_fetch_assoc($result)) {
        echo <<<product
                          <ul>
                            <Li>
                              <tr>
                                 <a href=""><td><img src="$fetch_src$fetch[image]"></td><br style="">
                                  <td>$fetch[name]</td></br> 
                                  <td>$fetch[content]</td>
                                  <br><p><td>¥$fetch[price]</td></p></br></a>
                                  </a>
                                  <button type="submit" class="preorder-button" style="margin-left: 0px;" name="ADD_To_Cart">ADD To Cart</button>
                                  <input type="hidden" name="image" value="$fetch[image]">
                                  <input type="hidden" name="name" value="$fetch[name]">
                                  <input type="hidden" name="content" value="$fetch[content]">
                                  <input type="hidden" name="price" value="$fetch[price]">
                              </Li>
                              </tr>
                            </Li>
                          </ul>
                        product;
      }
      ?>
    </div>
    </form>
</div>
<div class="titile-img">
  <img src="../anh/tiltleshop.png" alt="">
</div>
</div>
<div class="new-arrival">
  <div class="img-info">
    <img src="../anh/digital.png" alt="">
  </div>
</div>
<div class="hidden-img">
  <ul>
    <li><a href="http://127.0.0.1:5500/html/profile-shop.html#"><img src="../anh/lamyshop.png" alt="">雪花ラミィ 誕生日記念2023 <br>
        <p>¥1,650~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/unknowshop.png" alt="">AZKi 活動5周年記念 <br>
        <p>¥880~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/neneshop.png" alt="">桃鈴ねね 3Dライブ開催記念 <br>
        <p>¥1,100~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/azkishop.png" alt="">AZKi「癒やしの膝枕と音をキミに」ASMRボ <br>
        <p>¥2,500</p></br>
      </a></li>
  </ul>
  <div class="titile-img">
    <img src="../anh/tiltleshop.png" alt="">
  </div>
</div>
<div class="new-arrival">
  <div class="img-info">
    <img src="../anh/regular.png" alt="">
  </div>
</div>
<div class="hidden-img">
  <ul>
    <li><a href=""><img src="../anh/q.png" alt="">ホロライブインドネシア 3Dアクリルスタンド <br>
        <p>¥2,200</p></br>
      </a></li>
    <li><a href=""><img src="../anh/w.png" alt="">ホロライブEnglish 3Dアクリルスタンド <br>
        <p>¥2,200</p></br>
      </a></li>
    <li><a href=""><img src="../anh/e.png" alt="">ホロスターズ スターターグッズ <br>
        <p>¥495~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/r.png" alt="">hololive friends with u アユンダ・リス<br>
        <p>¥3,300</p></br>
      </a></li>
  </ul>
  <ul>
    <li><a href=""><img src="../anh/t.png" alt="">hololive friends with u アイラニ・イオフィ<br>
        <p>¥3,300</p></br>
      </a></li>
    <li><a href=""><img src="../anh/y.png" alt="">hololive friends with u ムーナ・ホシノヴァ<br>
        <p>¥3,300</p></br>
      </a></li>
    <li><a href=""><img src="../anh/u.png" alt="">hololive friends with u クレイジー・オリー <br>
        <p>¥3,300</p></br>
      </a></li>
    <li><a href=""><img src="../anh/i.png" alt="">hololive friends with u アーニャ・メル <br>
        <p>¥3,300</p></br>
      </a></li>
  </ul>
  <div class="titile-img">
    <img src="../anh/tiltleshop.png" alt="">
  </div>
</div>
<div class="new-arrival">
  <div class="img-info">
    <img src="../anh/event.png" alt="">
  </div>
</div>
<div class="hidden-img">
  <ul>
    <li><a href=""><img src="../anh/suiseishop.png" alt="">Hoshimachi Suisei 2nd Solo Live <br>
        <p>¥1,650~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/sorashop.png" alt="">hololive production Art Collection sora album <br>
        <p>¥880~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/sonicshop.png" alt="">『ソニころ2022 ピキピキ音速コラボカフェ』 <br>
        <p>¥1,100~</p></br>
      </a></li>
    <li><a href=""><img src="../anh/aquashop.png" alt="">「あくあ色 in わんだ～☆らんど♪」 <br>
        <p>¥2,500</p></br>
      </a></li>
  </ul>
  <div class="titile-img">
    <img src="../anh/tiltleshop.png" alt="">
  </div>
</div>
<div class="new-arrival">
  <div class="img-info">
    <img src="../anh/event0.png" alt="">
  </div>
</div>
<div class="event-img">
  <ul>
    <li><a href=""><img src="../anh/watamemusic.png" alt=""></a></li>
    <li><a href="">「⾓巻わため」活動初となる全国流通フルアルバムのリリース ＆2ndソロライブ開催決定！</a></li>
    <li class="cham-ngang"></li>
    <li>カバー株式会社（本社：東京都港区、代表取締役社⻑：⾕郷元昭）は、弊社が運営する⼥性VTuberグループ「ホロライブ」所属の「⾓巻わため」において、2024年1⽉10⽇（⽔）に初となる全国流通フルアルバムのリリース、⾓巻わため 2nd Live「わためぇ Night Fever!! in TOK...</li>
    <div class="a-super">
      <a href="">もっと読む</a>
    </div>
  </ul>
  <ul>
    <li><a href=""><img src="../anh/pekoramusic.png" alt=""></a></li>
    <li><a href="">「兎田ぺこら」初となる1stソロライブが有明アリーナにて開催決定！会場・配信チケット受付開始！</a></li>
    <li class="cham-ngang"></li>
    <li>カバー株式会社（本社：東京都港区、代表取締役社長：谷郷元昭）は、弊社が運営する女性VTuberグループ「ホロライブ」所属の「兎田ぺこら」において、1st兎田ぺこらいぶ「うさぎ the MEGAMI!!」 が2023年12月6日（水）に「有明アリーナ」での開催が決定したことをお知らせいたします。...
    </li>
    <div class="a-super">
      <a href="">もっと読む</a>
    </div>
  </ul>
  <ul>
    <li><a href=""><img src="../anh/towamusic.png" alt=""></a></li>
    <li><a href="">「常闇トワ」初となる1stアルバムリリース＆1stソロライブ開催決定！ライブグッズ販売開始！</a></li>
    <li class="cham-ngang"></li>
    <li>カバー株式会社（本社：東京都港区、代表取締役社長：谷郷元昭）は、弊社が運営する女性VTuberグループ「ホロライブ」所属の「常闇トワ」において、2023年9月27日（水）に1stフルアルバム『Aster』がリリース、常闇トワ 1stソロライブ “Break your ×××“ が2023年10...</li>
    <div class="a-super">
      <a href="">もっと読む</a>
    </div>
  </ul>
</div>
<div class="titile-img">
  <img src="../anh/tiltleshop.png" alt="">
</div>
<div class="new-arrival">
  <div class="img-info">
    <img src="../anh/group-1.png" alt="">
  </div>
</div>
<br></br>