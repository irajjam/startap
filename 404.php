<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Startap
 * @since Startap 1.0
 */

get_header(); ?>


<body>
<!-- Start Preloader Area -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- End Preloader Area -->

<!-- Start 404 Error Area -->
<section class="error-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="error-content">
                    <div class="notfound-404">
                        <h1>متاسفیم!</h1>
                    </div>
                    <h3>404 - صفحه یافت نشد</h3>
                    <p>ممکن است صفحه مورد نظر حذف شده باشد اگر نام آن تغییر نکرده ممکن است موقتاً در دسترس نباشد.</p>
                    <a href="index.html" class="btn btn-primary">رفتن به صفحه اصلی</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End 404 Error Area -->

<!-- All JS Link -->
<script src="<?php echo Asset::js('jquery.min.js') ?>"></script>
<script src="<?php echo Asset::js('popper.min.js') ?>"></script>
<script src="<?php echo Asset::js('bootstartp.min.css') ?>"></script>
<script src="<?php echo Asset::js('meanmenu.min.js') ?>"></script>
<script src="<?php echo Asset::js('wow.min.js') ?>"></script>
<script src="<?php echo Asset::js('magnific-popup.min.js') ?>"></script>
<script src="<?php echo Asset::js('appear.min.js') ?>"></script>
<script src="<?php echo Asset::js('odometer.min.js') ?>"></script>
<script src="<?php echo Asset::js('slick.min.js') ?>"></script>
<script src="<?php echo Asset::js('imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?php echo Asset::js('isotope.pkgd.min.js') ?>"></script>
<script src="<?php echo Asset::js('owl.carousel.min.js') ?>"></script>
<script src="<?php echo Asset::js('feather.min.js') ?>"></script>
<script src="<?php echo Asset::js('form-validator.min.js') ?>"></script>
<script src="<?php echo Asset::js('contact-form-script.js') ?>"></script>
<script src="<?php echo Asset::js('startp-map.js') ?>"></script>
<script src="<?php echo Asset::js('main.js') ?>"></script>
</body>
</html>