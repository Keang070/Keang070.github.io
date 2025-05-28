<?php
require_once "template/header.php";
require_once "template/menu.php";
?>
<div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ml-auto">
                <h1 class="text-white">Promotion เดือนมิถุนายน</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
                <div id="date-countdown"></div>
                <p>
                    <a href="#" class="btn btn-primary py-3 px-4 mr-3">สนใจผลิตภัณฑ์</a>
                    <a href="#" class="more light">บทความที่น่าสนใจ</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex team-vs">
                <!--span class="score">Flash Sale!</span-->
                <div class="team-1 w-50" style="background-image: url(images/pic1.jpg);background-size: cover;">
                    <div class="team-details w-100 text-left" data-aos="fade-down" data-aos-delay="00">
                        <h3>FUJIFILM 1234</h3>
                        <ul class="list-unstyled">
                            <li>ความเร็วในการพิมพ์ 50 แผ่น/นาที</li>
                            <li>ขนาดกระดาษ A3</li>
                            <li>ความละเอียด 1200x4800</li>
                            <li>2,000 บาท/เดือน</li>
                        </ul>
                    </div>
                </div>
                <div class="team-2 w-50" style="background-image: url(images/pic2.jpg);background-size: cover;">
                    <div class="team-details w-100 text-right" data-aos="fade-up" data-aos-delay="00">
                        <h3>FUJIFILM 5678</h3>
                        <ul class="list-unstyled">
                            <li>ความเร็วในการพิมพ์ 60 แผ่น/นาที</li>
                            <li>ขนาดกระดาษ A3</li>
                            <li>ความละเอียด 1200x4800</li>
                            <li>2,500 บาท/เดือน</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-12 title-section">
                <h2 class="heading">New Printer</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <?php
            $i = 0;
            $f = array(1, 2, 3);
            foreach ($f as $pro_item) {
                $i++;
                $delay = ($i * 100) - 100;
            ?>
                <div class="col-sm-3 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                    <div class="post-entry" onmouseover="show_item_detail('item_detail<?= $pro_item ?>');" onmouseout="hide_item_detail('item_detail<?= $pro_item ?>');">
                        <a href="#">
                            <img src="images/img_<?= $pro_item ?>.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="caption">
                            <div data-aos="flip-up" style="color:white;padding: 20px;display: none;font-size: 14px;" id="item_detail<?= $pro_item ?>">
                                <h4><u>Product Header</u></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsummolestias rep</p>
                            </div>
                            <div class="caption-inner">

                                <h3 class="mb-3">Product <?= $pro_item ?></h3>
                                <div class="author d-flex align-items-center">
                                    <div class="img mb-2 mr-3">
                                        <img src="images/Fujifilm-logo.jpg" alt="">
                                    </div>
                                    <div class="text">
                                        <h4>Fujifilm 1234</h4>
                                        <span>May 19, 2025 &bullet; Digital Printer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<div class="site-section" style="background-image: url(images/section_bg.jpg);background-size: cover;" data-aos="fade-left" data-aos-delay="00">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <h3>Wording section 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsummolestias r Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsummolestias rLorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur. m ipsummolestias r</p>
            </div>
            <div class="col-lg-6">

            </div>
        </div>
    </div>
</div> <!-- .site-section -->

<div class="site-section">
    <div class="container">
        <div class="row" data-aos="fade-right" data-aos-delay="00">
            <div class="col-6 title-section">
                <h2 class="heading">Videos & Reviews</h2>
            </div>
            <div class="col-6 text-right">
                <div class="custom-nav">
                    <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
                    <span></span>
                    <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
                </div>
            </div>
        </div>
        <div class="owl-4-slider owl-carousel">
            <div class="item" data-aos="fade-down" data-aos-delay="00">
                <div class="video-media">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                        <span class="icon mr-3">
                            <span class="icon-play"></span>
                        </span>
                        <div class="caption">
                            <h3 class="m-0">Fujifilm 1234</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item" data-aos="fade-down" data-aos-delay="100">
                <div class="video-media">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                        <span class="icon mr-3">
                            <span class="icon-play"></span>
                        </span>
                        <div class="caption">
                            <h3 class="m-0">Fujifilm 1234</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item" data-aos="fade-down" data-aos-delay="200">
                <div class="video-media">
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                        <span class="icon mr-3">
                            <span class="icon-play"></span>
                        </span>
                        <div class="caption">
                            <h3 class="m-0">Fujifilm 1234</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="item" data-aos="fade-down" data-aos-delay="300">
                <div class="video-media">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                        <span class="icon mr-3">
                            <span class="icon-play"></span>
                        </span>
                        <div class="caption">
                            <h3 class="m-0">Fujifilm 1234</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item" data-aos="fade-down" data-aos-delay="400">
                <div class="video-media">
                    <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                        <span class="icon mr-3">
                            <span class="icon-play"></span>
                        </span>
                        <div class="caption">
                            <h3 class="m-0">Fujifilm 1234</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item" data-aos="fade-down" data-aos-delay="500">
                <div class="video-media">
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                        <span class="icon mr-3">
                            <span class="icon-play"></span>
                        </span>
                        <div class="caption">
                            <h3 class="m-0">Fujifilm 1234</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="container site-section">
    <div class="row" data-aos="fade-right" data-aos-delay="00">
        <div class="col-6 title-section">
            <h2 class="heading">Our Blog</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6" data-aos="fade-down" data-aos-delay="00">
            <div class="custom-media d-flex">
                <div class="img mr-4">
                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="text" style="color: #666;">
                    <span class="meta">May 20, 2025</span>
                    <h3 class="mb-4"><a href="#">Fujifilm 1234</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
                    <p><a href="#">Read more</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="00">
            <div class="custom-media d-flex">
                <div class="img mr-4">
                    <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="text" style="color: #666;">
                    <span class="meta">May 20, 2025</span>
                    <h3 class="mb-4"><a href="#">Fujifilm 1234</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
                    <p><a href="#">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once "template/footer.php";
?>
<script>
    function show_item_detail(id) {
        document.getElementById(id).style.display = 'block';
    }

    function hide_item_detail(id) {
        document.getElementById(id).style.display = 'none';
    }
</script>