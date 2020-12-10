<?php /* Template Name: Cart */ ?>
<?php get_header() ?>
<?php View::render('header/menu-bar'); ?>
<!-- Start Page Title -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <h2>سبد خرید</h2>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="<?php echo Asset::image('shape1.png')?>" alt="shape"></div>
    <div class="shape2 rotateme"><img src="<?php echo Asset::image('shape2.svg')?>" alt="shape"></div>
    <div class="shape3"><img src="<?php echo Asset::image('shape3.svg')?>" alt="shape"></div>
    <div class="shape4"><img src="<?php echo Asset::image('shape4.svg')?>" alt="shape"></div>
    <div class="shape5"><img src="<?php echo Asset::image('shape5.png')?>" alt="shape"></div>
    <div class="shape6 rotateme"><img src="<?php echo Asset::image('shape4.svg')?>" alt="shape"></div>
    <div class="shape7"><img src="<?php echo Asset::image('shape4.svg')?>" alt="shape"></div>
    <div class="shape8 rotateme"><img src="<?php echo Asset::image('shape2.svg')?>" alt="shape"></div>
</div>
<!-- End Page Title -->

<!-- Start Cart Area -->
<section class="cart-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">محصول</th>
                                <th scope="col">نام محصول</th>
                                <th scope="col">قیمت واحد</th>
                                <th scope="col">تعداد</th>
                                <th scope="col">مجموع</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                           // $ourCurrentPage = get_query_var('paged');
                            $new_product = new WP_Query(array(
                                //برای پیدا کردن مصولات به کار میرود یا به نوعی ای دی هست
                                'post_type' => 'product',
                                'posts_per_page' => 8,
                                'paged' => $ourCurrentPage
                            )) ?>
                            <?php if ($new_product->have_posts()): ?>
                            <?php while ($new_product->have_posts()): $new_product->the_post(); ?>
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <?php the_post_thumbnail(array(75,75)); ?>
                                    </a>
                                </td>

                                <td class="product-name">
                                    <a href="#">مداد چوبی</a>
                                </td>

                                <td class="product-price">
                                    <span class="unit-amount">19100 تومان</span>
                                </td>

                                <td class="product-quantity">
                                    <div class="input-counter">
                                        <span class="minus-btn"><i data-feather="minus"></i></span>
                                        <input type="text" min="1" value="1">
                                        <span class="plus-btn"><i data-feather="plus"></i></span>
                                    </div>
                                </td>

                                <td class="product-subtotal">
                                    <span class="subtotal-amount">19100 تومان</span>

                                    <a href="#" class="remove"><i data-feather="trash-2"></i></a>
                                </td>
                            </tr>
                            <?php endwhile;

                            ?>
                            <?php else: ?>
                            <?php endif; ?>

                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="continue-shopping-box">
                                    <a href="#" class="btn btn-light">ادامه خرید</a>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-5 text-right">
                                <a href="#" class="btn btn-light">به روزرسانی سبد خرید</a>
                            </div>
                        </div>
                    </div>

                    <div class="cart-totals">
                        <h3>مجموع سبد خرید</h3>

                        <ul>
                            <li>زیرمجموعه <span>25000 تومان</span></li>
                            <li>کرایه <span>3000 تومان</span></li>
                            <li>مجموع <span><b>28000 تومان</b></span></li>
                        </ul>
                        <a href="#" class="btn btn-primary">ادامه پرداخت</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Cart Area -->

<?php get_footer();?>
