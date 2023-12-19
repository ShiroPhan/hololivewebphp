<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/hololive.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?php
       $frame0 = "../anh/1.png";
        $frame25 = "../anh/2.png";
        $frame50 = "../anh/3.png";
        $frame75 = "../anh/5.png";
    ?>
      <style>
        @keyframes changeBackground {
            0% {
                background-image: url('<?php echo $frame0; ?>');
            }
            25% {
                background-image: url('<?php echo $frame25; ?>');
            }
            50% {
                background-image: url('<?php echo $frame50; ?>');
            }
            75% {
                background-image: url('<?php echo $frame75; ?>');
            }
            100% {
                background-image: url('<?php echo $frame0; ?>');
            }
        }
    </style>
    
</head>
<body>
    
    <div class="overlay">
        <div class="background-container"></div>
        <div class="overlay-first">
           <a href="http://127.0.0.1:5500/html/hololive.html"><img src="../anh/385501409_753751056592502_5428555459183944931_n.png" alt=""></a>
            <nav class="nav-first">
                <ul class="head">
                    <li><a href="http://localhost/webhololive/html/hololiveabout.php">ABOUT</a></li>
                    <li><a href="">TALENT</a></li>
                    <li><a href="">NEWS</a></li>
                    <li><a href="">AUDITION</a></li>
                </ul>
                <ul class="official">
                    <li><a href="http://localhost/webhololive2/php/hololiveproductionshop.php">OFFICIAL SHOP</a></li>
                </ul>
                <ul class="lauguage">
                    <li><a href="">JP</a></li>
                    <li class="color2"><a  href="">EN</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="body-container">
        <div class="text-decoration">
            <h1>ABOUT</h1>
            <P>hololive production is one of the biggest Vtuber agencies in the world</P>
            <h2>Here we introduce our challenges to deliver excitement to fans all around the world.</h2>
            <div class="text-decoration2">
                <a href="">View More</a>
            </div>
        </div>
    </div>
    <div class="talent-container">
        <h1>TALENT</h1>
        <ul class="img1">
            <li><img src="../anh/SORA1.png" alt=""></li>
            <li><img class="img-1" src="../anh/HOLOLIVE.png" alt=""></li>
            <li class="text-1" >OPEN</li>
        </ul>
        <ul class="img2">
            <li><img src="../anh/jiru.png" alt=""></li>
            <li><img class="img-2" src="../anh/hololiveindo.png" alt=""></li>
            <li class="text-2" >OPEN</li>
        </ul>
        <ul class="img3">
            <li><img src="../anh/gura.png" alt=""></li>
            <li><img class="img-3" src="../anh/holoeng.png" alt=""></li>
            <li class="text-3" >OPEN</li>
        </ul>
        <ul class="img4">
            <li><img src="../anh/tomboy.png" alt=""></li>
            <li><img class="img-4" src="../anh/delis].png" alt=""></li>
            <li class="text-4" >OPEN</li>
        </ul>
        <ul class="img5">
            <li><img src="../anh/tomboystart.png" alt=""></li>
            <li><img class="img-5" src="../anh/holostart.png" alt=""></li>
            <li class="text-5" >OPEN</li>
        </ul>
        <ul class="img6">
            <li><img src="../anh/top_talents_holostars_en.png" alt=""></li>
            <li><img class="img-6" src="../anh/top_talents_holostars_logo.png" alt=""></li>
            <li class="text-6" >OPEN</li>
        </ul>
    </div>
    <div class="news-container">
        <h1>NEWS</h1>
        <div id="slideshow-container">
            <div class="slides">
                <div class="slide">
                    <img src="../anh/cover_2016.png" alt="Slide 1">
                    <h2>2023.11.10</h2>
                    <p>COVER Corporation Announces Ghost X Ghost and HOLOSTARS English -TEMPUS- Banzoin Hakka Collaboration Merch</p>
                </div>
                <div class="slide">
                    <img src="../anh/Hololivearoduction.png" alt="Slide 2">
                    <h2>2023.11.06</h2>
                    <p>COVER Corporation Announces “hololive production Pop-Up Store at Tokyo Character Street”</p>
                </div>
                <div class="slide">
                    <img src="../anh/hololivelive.png" alt="Slide 3">
                    <h2>2023.11.02</h2>
                    <p>COVER Corporation Announces hololive production COUNTDOWN LIVE 2023▷2024　-65 hololive production talents will be participating in the Countdown Event!-</p>
                </div>
            </div>
            <button class="arrow" id="prev" onclick="prevSlide('prev')">&#9664;</button>
            <button class="arrow" id="next" onclick="nextSlide('next')">&#9654;</button>
        </div>
    
        <script>
            let currentIndex = 0;
            const images = ['image1.jpg', 'image2.jpg', 'image3.jpg', /* thêm các đường dẫn ảnh khác */];
    
            function showSlide(index) {
                const slides = document.querySelector('.slides');
                const totalSlides = images.length;
    
                if (index >= totalSlides) {
                    currentIndex = 0;
                } else if (index < 0) {
                    currentIndex = totalSlides - 1;
                } else {
                    currentIndex = index;
                }
    
                const translateValue = -currentIndex * 100 + '%';
                slides.style.transform = 'translateX(' + translateValue + ')';
            }
    
            function prevSlide() {
                showSlide(currentIndex - 1);
            }
    
            function nextSlide() {
                showSlide(currentIndex + 1);
            }
        </script>
         <div class="text-decoration">
            <div class="text-decoration2">
                <a href="">View More</a>
            </div>
        </div>
        <div class="AUDITION" >
            <h1>AUDITION</h1>
            <div class="AUDITION-img">
                <img src="../anh/hololivepro.png" alt="">
                <ul> We at hololive production host auditions to spot new talents with a wide array of outstanding characteristics.
                    <br>We will create a culture that is loved all around the world.</br>
                    <li>Japanese Talent</li>
                    <li>Indonesia Talent</li>
                    <li>English Talent</li>
                </ul>
            </div>
        </div>
        <div class="ex-footer">
            <div class="ex-footer-1">
            <ul>
                <li><img src="../anh/hololive1.png" alt=""></li>
                <li><img src="../anh/hololive2.png" alt=""></li>
                <li><img src="../anh/hololive 3.png" alt=""></li>
                <li><img src="../anh/hololive4.png" alt=""></li>
            </ul>
            <ul>
                <li><img src="../anh/hololive5.png" alt=""></li>
                <li><img src="../anh/hololive6.png" alt=""></li>
                <li><img src="../anh/hololive7.png" alt=""></li>
                <li><img src="../anh/hololive8.png" alt=""></li>
            </ul>
            </div>
        </div>
        <div class="text-footer">
            <h1>SHARE</h1>
            <h2><img src="../anh/holox.png" alt=""></h2>
        </div>
        <div class="text-footer1" >
            <ul>
                <li><img src="../anh/line.png" alt=""></li>
                <li><img src="../anh/redit.png" alt=""></li>
                <li><img src="../anh/face.png" alt=""></li>
            </ul>
        </div>
        <div class="footer">
            <div class="footer-1" >
                <div class="footer-img" >
                    <img src="../anh/hololivewhite.png" alt="">
                </div> 
                <ul class="footer-ul" >
                    <li>ABOUT</li>
                    <li>TALENT</li>
                    <li>NEWS</li>
                    <li>AUDITION</li>
                </ul>
                <ul class="footer-ul">
                    <li>COLLABORATION</li>
                    <li>OFFICIAL SHOP</li>
                </ul>
                <ul class="footer-ul" >
                    <li>COMPANY</li>
                    <li>PRIVACY POLICY</li>
                    <li>Request To Minors</li>
                </ul>
                <ul class="footer-ul" >
                    <li>Derivative Works Guidelines</li>
                    <li>FAQ</li>
                    <li>Supporter Guideline</li>
                </ul>
            </div>
            <div class="footer-2" >
                <p>hololive</p>
                <ul class="footer-ul1" >
                    <li>Youtube</li>
                    <li>X</li>
                    <li>Tiktok</li>
                </ul>
                <div class="horizontal-line"></div>
                <p>hololive Indonesia</p>
                <ul class="footer-ul1" >
                    <li>Youtube</li>
                    <li>X</li>
                    <li>Facebook</li>
                    <li>Tik Tok</li>
                    <li>Instagram</li>
                </ul>
                <div class="horizontal-line"></div>
                <p>hololive English</p>
                <ul class="footer-ul1" >
                    <li>Youtube</li>
                    <li>X</li>
                    <li>FAcebook</li>
                    <li>Tik Tok</li>
                    <li>Reddit</li>
                </ul>
                <div class="horizontal-line"></div>
                <p>hololive Dev_IS</p>
                <ul class="footer-ul1" >
                    <li>Youtube</li>
                </ul>
                <div class="horizontal-line"></div>
                <p>HOLOSTARS</p>
                <ul class="footer-ul1" >
                    <li>Youtube</li>
                    <li>X</li>
                </ul>
                <div class="horizontal-line"></div>
                <p>HLOSTARS ENGLISH</p>
                <ul class="footer-ul1" >
                    <li>Youtube</li>
                    <li>X</li>
                    <li>TikTok</li>
                    
                </ul>
                <div class="horizontal-line"></div>
            </div>
        </div>
        <div class="text-final">
            <p>@2016 COVER Corp</p>
        </div>
</body>
</html>