<?php include('../function.php'); ?>
<?php include('../components/header.php'); ?>
<?php include('../components/bg.php'); ?>
<main class="page-products">
    <?php
        $img_url="testimg/01.jpg";
        $title="商品列表";
        include ("../components/banner.php");
    ?>
    <div class="page-products__select">
        <select name="products_categories">
            <option value="all">所有商品</option>
            <option value="精緻代拜組">精緻代拜組</option>
            <option value="精緻代拜組2">精緻代拜組2</option>
        </select>
        <?php get_svg('down') ?>
    </div>
    <div class="container grid">
        <div class="page-products__products col-3-11-tablet col-1-5-mobile">
            <section class="page-products__products-section -show" data-category="精緻代拜組">
                <div class="page-products__products-section-title">
                    <?php 
                        $title="精緻代拜組";
                        include ("../components/title.php");
                    ?>
                </div>
                <div class="page-products__products-section-list swiper">
                    <div class="page-products__products-section-list-wrapper swiper-wrapper">
                        <div class="page-products__products-section-list-card swiper-slide">
                            <?php
                                include ("../components/products/card.php");
                            ?>
                        </div>
                        <div class="page-products__products-section-list-card swiper-slide">
                            <?php
                                include ("../components/products/card.php");
                            ?>
                        </div>
                        <div class="page-products__products-section-list-card swiper-slide">
                            <?php
                                include ("../components/products/card.php");
                            ?>
                        </div>
                        <div class="page-products__products-section-list-card swiper-slide">
                            <?php
                                include ("../components/products/card.php");
                            ?>
                        </div>
                        <div class="page-products__products-section-list-card swiper-slide">
                            <?php
                                include ("../components/products/card.php");
                            ?>
                        </div>
                        <div class="page-products__products-section-list-card swiper-slide">
                            <?php
                                include ("../components/products/card.php");
                            ?>
                        </div>
                    </div>
                    <div class="page-products__products-section-list-btn -prev">
                        <?php get_svg('arrow_left') ?>
                    </div>
                    <div class="page-products__products-section-list-btn -next">
                        <?php get_svg('arrow_right') ?>
                    </div>
                </div>
                <a
                    class="page-products__products-section-btn"
                    href="<?php site_url() ?>products-categories/精緻代拜組"
                >
                    <span>
                        <?php get_svg('arrow_right') ?>
                    </span>
                    <p>查看商品分類</p>
                </a>
            </section>
            <section class="page-products__products-section -show" data-category="精緻代拜組2">
                <div class="page-products__products-section-title">
                    <?php 
                        $title="精緻代拜組2";
                        include ("../components/title.php");
                    ?>
                </div>
                <div class="page-products__products-section-list swiper">
                    <div class="page-products__products-section-list-wrapper swiper-wrapper">
                        <div class="page-products__products-section-list-card swiper-slide">
                            <?php
                                include ("../components/products/card.php");
                            ?>
                        </div>
                        <div class="page-products__products-section-list-card swiper-slide">
                            <?php
                                include ("../components/products/card.php");
                            ?>
                        </div>
                        <div class="page-products__products-section-list-card swiper-slide">
                            <?php
                                include ("../components/products/card.php");
                            ?>
                        </div>
                    </div>
                    <div class="page-products__products-section-list-btn -prev">
                        <?php get_svg('arrow_left') ?>
                    </div>
                    <div class="page-products__products-section-list-btn -next">
                        <?php get_svg('arrow_right') ?>
                    </div>
                </div>
                <a
                    class="page-products__products-section-btn"
                    href="<?php site_url() ?>products-categories/精緻代拜組2"
                >
                    <span>
                        <?php get_svg('arrow_right') ?>
                    </span>
                    <p>查看商品分類</p>
                </a>
            </section>
        </div>
    </div>
</main>
<?php include('../components/dev.php'); ?>
<?php include('../components/footer.php'); ?>