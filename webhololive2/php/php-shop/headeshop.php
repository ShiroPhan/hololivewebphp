<div class="icon-shop">
  <a href="http://localhost/webhololive2/php/hololiveproductionshop.php"><img src="../anh/hololiveshop.png" alt=""></a>
  <i class="fa-solid fa-magnifying-glass"></i>
  <div class="input-container">
    <input type="text" id="username" name="username" placeholder="Search... ">
  </div>
  <ul class="icon-shop-ul">
    <?php
    session_start();
    require '../db/connect.php';

    // Các phần khác của trang

    if (isset($_SESSION['iduser'])) {
      $logged_in_iduser = $_SESSION['iduser'];
      $logged_in_username = $_SESSION['username'];

      // Hiển thị thông tin người dùng và liên kết để đăng xuất
      echo '<li><span>ID:' . $logged_in_iduser . '</span>         Username:<span>' . $logged_in_username . '</span><a href="http://localhost/webhololive2/php/sign.php">  Đăng xuất</a></li>';
    } else {
      // Hiển thị nếu chưa đăng nhập
      echo '<li><a href="http://localhost/webhololive2/php/sign.php"><i class="fa-regular fa-user"></i></a></li>';
    }
    ?>


    <li><a href="http://localhost/webhololive2/php/shop_cart.php"><i class="fa-solid fa-store"></i></a></li>
    <li><i class="fa-solid fa-language"></i></li>
  </ul>
</div>
</div>
<div class="slider-container">
  <div class="slides">
    <div class="slide"><img src="../anh/nene.png" alt="Slide 1"></div>
    <div class="slide"><img src="../anh/marine.png" alt="Slide 1"></div>
    <div class="slide"><img src="../anh/ze.png" alt="Slide 2"></div>
    <div class="slide"><img src="../anh/lamy.png" alt="Slide 2"></div>
    <div class="slide"><img src="../anh/unknow.png" alt="Slide 3"></div>
    <div class="slide"><img src="../anh/polka.png" alt="Slide 3"></div>
    <div class="slide"><img src="../anh/unknow2.png" alt="Slide 4"></div>
    <div class="slide"><img src="../anh/unknow3.png" alt="Slide 4"></div>
    <div class="slide"><img src="../anh/cu.png" alt="Slide 5"></div>
    <div class="slide"><img src="../anh/maythangducrua.png" alt="Slide 5"></div>

  </div>
  <div class="controls">
    <button class="control-btn" onclick="prevSlide()">❮</button>
    <button class="control-btn" onclick="nextSlide()">❯</button>
  </div>
  <ul class="pagination"></ul>
</div>

<script>
  let currentSlide = 0;
  const slides = document.querySelector('.slides');
  const pagination = document.querySelector('.pagination');

  function showSlide() {
    slides.style.transform = `translateX(${-100 * currentSlide}%)`;
    updatePagination();
  }

  function nextSlide() {
    if (currentSlide < slides.children.length - 1) {
      currentSlide++;
    } else {
      currentSlide = 0;
    }
    showSlide();
  }

  function prevSlide() {
    if (currentSlide > 0) {
      currentSlide--;
    } else {
      currentSlide = slides.children.length - 1;
    }
    showSlide();
  }

  function updatePagination() {
    const items = pagination.querySelectorAll('.pagination-item');
    items.forEach((item, index) => {
      if (index === currentSlide) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });
  }

  for (let i = 0; i < slides.children.length; i++) {
    const item = document.createElement('li');
    item.className = 'pagination-item';
    item.setAttribute('data-index', i);
    item.addEventListener('click', () => {
      currentSlide = i;
      showSlide();
    });
    pagination.appendChild(item);
  }

  updatePagination();

  document.addEventListener('keydown', function(e) {
    if (e.key === 'ArrowLeft') {
      prevSlide();
    } else if (e.key === 'ArrowRight') {
      nextSlide();
    }
  });

  window.onload = function() {
    const middleSlide = document.querySelector('.slides .slide:nth-child(2) img');
    middleSlide.style.transform = 'scale(1.2)';
  };
</script>