<!-- Start Page Title -->
<?php  View::render('header/header-top') ?>

<!-- End Page Title -->

<!-- Start Shop Area -->
<section class="shop-area ptb-80">
    <div class="container">
        <div class="woocommerce-topbar">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-7 col-sm-7">
                    <div class="woocommerce-result-count">
                        <p>نمایش 1-8 از 14 نتیجه</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="woocommerce-topbar-ordering">
                        <select class="form-control">
                            <option value="1">بر اساس محبوبیت</option>
                            <option value="2">بر اساس میانگین امتیاز</option>
                            <option value="0">بر اساس آخرین محصولات</option>
                            <option value="3">بر اساس قیمت: ارزان تا گران</option>
                            <option value="4">بر اساس قیمت: گران تا ارزان</option>
                            <option value="5">بر اساس جدیدترین ها</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $ourCurrentPage = get_query_var('paged');
            $new_product = new WP_Query(array(
                //برای پیدا کردن مصولات به کار میرود یا به نوعی ای دی هست
                'post_type' => 'product',
                'posts_per_page' => 8,
                'paged' => $ourCurrentPage
            )) ?>

            <?php if ($new_product->have_posts()): ?>
                <?php while ($new_product->have_posts()): $new_product->the_post(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products">
                            <div class="products-image">
                                <?php the_post_thumbnail(); ?>


                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#productsModalCenter"><i
                                                    data-feather="search"></i></a></li>
                                    <li><a href="#"><i data-feather="heart"></i></a></li>
                                    <li><a href="#"><i data-feather="link"></i></a></li>
                                </ul>
                            </div>

                            <div class="products-content">
                                <h3><a href="<?php echo get_the_permalink();  ?>"><?php echo get_the_title() ?></a></h3>
                                <span><?php echo Product::price(get_the_ID()) ?></span>
                                <ul>

                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                    <li><i class="flaticon-star-1"></i></li>
                                </ul>
                                <a href="<?php echo get_the_permalink()?>" class="add-to-cart-btn">افزودن سبد خرید</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile;

                ?>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">

                                        <?php
                                        echo paginate_links(array(
                                            'total' => $new_product->max_num_pages,

                                        ))
                                        ?>
                                    </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            <?php else: ?>
            <?php endif; ?>


        </div>
    </div>
</section>
<!-- End Shop Area -->
