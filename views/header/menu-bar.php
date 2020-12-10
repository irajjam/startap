<!-- Start Preloader Area -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- End Preloader Area -->

<!-- Start Navbar Area -->
<header id="header" class="headroom">
    <div class="startp-responsive-nav">
        <div class="container">
            <div class="startp-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="<?php echo Asset::image('logo.png') ?>" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="startp-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html"><img src="<?php echo Asset::image('logo.png') ?>" alt="logo"></a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                    <ul class="navbar-nav nav ml-auto">
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'header',
                                'container' => 'div',
                                'container_id' => 'navbarSupportedContent',
                                'container_class' => 'collapse navbar-collapse mean-menu',
                                'ul_class'=>'dropdown-menu-item',
                                'after' => '',
                                'link_after' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>',
                                'theme_location' => 'Header',
                                'items_wrap' => '<ul id="%1$s" class="%2$s" role="menu" >%3$s</ul>',
                                'depth' => 10,
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()

                            )
                        )
                        ?>

                    </ul>
                </div>

                <div class="others-option">
                    <a href="cart.html" class="cart-wrapper-btn"><i data-feather="shopping-cart"></i><span>0</span></a>
                    <a href="#" class="btn btn-light">پشتیبانی</a>
                    <a href="#" class="btn btn-primary">ورود</a>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <a href="cart.html" class="cart-wrapper-btn"><i data-feather="shopping-cart"></i><span>0</span></a>
                        <a href="#" class="btn btn-light">پشتیبانی</a>
                        <a href="#" class="btn btn-primary">ورود</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Navbar Area -->
