<!-- Start Page Title -->
<?php  View::render('header/header-top') ?>
<!-- End Page Title -->

<!-- Start Shop Details Area -->
<?php if (have_posts()): ?>


    <?php while (have_posts()): the_post(); ?>
        <section class="shop-details-area ptb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="products-details-image products-details-image-slides owl-carousel owl-theme">
                            <?php $product_slider_images = Product::get_slider_images(get_the_ID()); ?>
                            <?php if ($product_slider_images && count($product_slider_images)) : ?>
                                <?php foreach ($product_slider_images as $image): ?>
                                    <div class="single-image-box">
                                        <img src="<?php echo $image; ?>" alt="img">
                                    </div>

                                <?php endforeach; ?>
                            <?php endif; ?>

                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="products-details">
                            <h3<?php the_title(); ?>م</h3>

                            <div class="price">
                                <span><?php echo $product_price=Product::price_sale(get_the_ID()) ?>تومان</span>
                                <?php echo $product_price=Product::price(get_the_ID()) ?>تومان

                            </div>
                            <ul class="rating">
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                            </ul>

                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم
                                ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="availability">
                                وضعیت موجود: <span>در انبار</span>
                            </div>

                            <form>
                                <div class="quantity">
                                    <span>تعداد:</span>
                                    <div class="input-counter">
                                        <span class="minus-btn"><i data-feather="minus"></i></span>
                                        <input type="text" min="1" value="1">
                                        <span class="plus-btn"><i data-feather="plus"></i></span>
                                    </div>
                                </div>
                                <button type="submit">افزودن سبد خرید</button>
                                <a href="#" class="add-to-wishlist-btn" title="افزودن به مقایسه بندی"><i
                                            data-feather="heart"></i></a>

                                <div class="buy-btn">
                                    <a href="#" class="btn btn-primary">الان خرید کن</a>
                                </div>
                            </form>

                            <div class="custom-payment-options">
                                <span>پرداخت مطمئن تضمین شده:</span>

                                <div class="payment-methods">
                                    <img src="assets/img/payment-image/1.svg" alt="image">
                                    <img src="assets/img/payment-image/2.svg" alt="image">
                                    <img src="assets/img/payment-image/3.svg" alt="image">
                                    <img src="assets/img/payment-image/4.svg" alt="image">
                                    <img src="assets/img/payment-image/5.svg" alt="image">
                                    <img src="assets/img/payment-image/6.svg" alt="image">
                                    <img src="assets/img/payment-image/7.svg" alt="image">
                                </div>
                            </div>

                            <div class="products-share-social">
                                <span>اشتراک گذاری:</span>

                                <ul>
                                    <li><a href="#" class="facebook"><i data-feather="facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i data-feather="twitter"></i></a></li>
                                    <li><a href="#" class="linkedin"><i data-feather="linkedin"></i></a></li>
                                    <li><a href="#" class="instagram"><i data-feather="instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="products-details-tabs">
                            <ul id="tabs">
                                <li class="active" id="tab_1">شرح</li>
                                <li class="inactive" id="tab_2">اطلاعات اضافی</li>
                                <li class="inactive" id="tab_3">بازدیدها</li>
                            </ul>

                            <div class="content show" id="tab_1_content">
                                <div class="products-description">
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال
                                        استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.
                                        لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار
                                        چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                                        لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40
                                        سال استاندارد صنعت بوده است.</p>
                                </div>
                            </div>

                            <div class="content" id="tab_2_content">
                                <div class="products-description">
                                    <ul class="additional-information">
                                        <li><span>برند</span> تم فارست</li>
                                        <li><span>رنگ</span> قهوه ای</li>
                                        <li><span>اندازه</span> بزرگ ، متوسط</li>
                                        <li><span>وزن</span> 27 کیلوگرم</li>
                                        <li><span>ابعاد</span> 16 x 22 x 123 سانتی متر</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="content" id="tab_3_content">
                                <div class="products-reviews">
                                    <h3>نظرات مشتری</h3>
                                    <p>هنوز نظری وجود ندارد.</p>

                                    <form class="review-form">
                                        <p>این مورد را ارزیابی کنید</p>

                                        <div class="star-source">
                                            <svg>
                                                <linearGradient x1="50%" y1="5.41294643%" x2="87.5527344%"
                                                                y2="65.4921875%" id="grad">
                                                    <stop stop-color="#f2b01e" offset="0%"></stop>
                                                    <stop stop-color="#f2b01e" offset="60%"></stop>
                                                    <stop stop-color="#f2b01e" offset="100%"></stop>
                                                </linearGradient>
                                                <symbol id="star" viewBox="153 89 106 108">
                                                    <polygon id="star-shape" stroke="url(#grad)" stroke-width="5"
                                                             fill="currentColor"
                                                             points="206 162.5 176.610737 185.45085 189.356511 150.407797 158.447174 129.54915 195.713758 130.842203 206 95 216.286242 130.842203 253.552826 129.54915 222.643489 150.407797 235.389263 185.45085"></polygon>
                                                </symbol>
                                            </svg>
                                        </div>

                                        <div class="star-rating">
                                            <input type="radio" name="star" id="five">
                                            <label for="five">
                                                <svg class="star">
                                                    <use xlink:href="#star"/>
                                                </svg>
                                            </label>

                                            <input type="radio" name="star" id="four">
                                            <label for="four">
                                                <svg class="star">
                                                    <use xlink:href="#star"/>
                                                </svg>
                                            </label>

                                            <input type="radio" name="star" id="three">
                                            <label for="three">
                                                <svg class="star">
                                                    <use xlink:href="#star"/>
                                                </svg>
                                            </label>

                                            <input type="radio" name="star" id="two">
                                            <label for="two">
                                                <svg class="star">
                                                    <use xlink:href="#star"/>
                                                </svg>
                                            </label>

                                            <input type="radio" name="star" id="one">
                                            <label for="one">
                                                <svg class="star">
                                                    <use xlink:href="#star"/>
                                                </svg>
                                            </label>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea name="review-message" id="message" cols="30" rows="4"
                                                              placeholder="نظر خود را بنویسید *"
                                                              class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="نام*" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" placeholder="ایمیل*" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="btn btn-primary">ارسال</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!-- End Shop Details Area -->
<?php endif; ?>

