<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<div class="products-single">
    <div class="container grid">
        <div class="col-1-6-medium col-1-9-tablet col-1-5-mobile">
            <div class="products-single__swiper">
                <div class="products-single__swiper-wrapper swiper-wrapper">
                    <figure class="swiper-slide">
                        <img src="<?php image_dir() ?>testimg/01.jpg" alt="">
                    </figure>
                    <figure class="swiper-slide">
                        <img src="<?php image_dir() ?>testimg/02.jpg" alt="">
                    </figure>
                    <figure class="swiper-slide">
                        <img src="<?php image_dir() ?>testimg/03.jpg" alt="">
                    </figure>
                </div>
                <div class="products-single__swiper-bottom">
                    <span class="products-single__swiper-bottom-prev">
                        <?php get_svg('arrow_left'); ?>
                    </span>
                    <div class="products-single__swiper-bottom-pagination"></div>
                    <span class="products-single__swiper-bottom-next">
                        <?php get_svg('arrow_right'); ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-7-13-medium col-1-9-tablet col-1-5-mobile">
            <div class="products-single__information">
                <h1>忌日精緻代拜組忌日精緻代拜組</h1>
                <div class="products-single__information-tags">
                    <span class="products-single__information-tags-category">精緻代拜組</span>
                    <span class="products-single__information-tags-promote">限時特價</span>
                </div>
                <div class="products-single__information-specification">
                    <h3>規格</h3>
                    <p>飯菜一組（大）／紅圓發粿一份／水果一組／LV保險箱一箱／大箱庫錢一箱／贈送蛋糕（共同祭拜）【此圖為示意圖，菜飯水果內容以現場為主】</p>
                </div>
                <hr class="-first">
                <div class="products-single__information-payment">
                    <h3>付款方式</h3>
                    <p>現場取貨 0 元</p>
                </div>
                <hr class="-second">
                <div class="products-single__information-price">
                    <span class="products-single__information-price-original">＄5,000</span>
                    <span class="products-single__information-price-now">＄4,000</span>
                </div>
                <div class="products-single__information-btns" id="cart-bottom">
                    <div class="products-single__information-btns-wrapper">
                        <div class="products-single__information-btns-item">
                            <?php 
                                $tag="button";
                                $url="";
                                $target="";
                                $text="加入購物車";
                                $style="-red -outline -head";
                                include ("../../components/button.php");
                            ?>
                        </div>
                        <div class="products-single__information-btns-item">
                            <?php 
                                $tag="button";
                                $url="";
                                $target="";
                                $text="立即結帳";
                                $style="-red -head";
                                include ("../../components/button.php");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-single__description col-3-11-medium col-1-9-tablet grid -cols-8-medium col-1-5-mobile -cols-4-mobile">
            <div class="products-single__description-wrapper col-2-8-medium col-1-5-mobile">
                <span>詳細介紹</span>
                <div class="products-single__description-wrapper-text">
                    <h1>對年第二年、第三年代拜 (H1)</h1>
                    <h2>對年第二年、第三年代拜 (H2)</h2>
                    <h3>對年第二年、第三年代拜 (H3)</h3>
                    <p>祭拜時間為每個月<b>農曆初二</b>，如需訂購，請提早三天下單點選查看整年度法會時間表請提早三天下單點選查看整年度法會時間表：<a>超連結樣式</a>

                        PS. 祭品均需要時間準備，請提早下訂，逾期將無法受理，敬請見諒請務必填先寫《精緻代拜》訂購表單後再點選【加入購物車】
                    </p>
                </div>
                <div class="products-single__description-wrapper-quote">
                    祭拜時間為每個月農曆初二。如需訂購，請提早三天下單。祭拜時間為每個月農曆初二。如需訂購，請提早三天下單
                </div>
                <ol>
                    <li>祭拜時間為每個月農曆初二，如需訂購，請提早三天下單</li>
                    <li>點選查看整年度法會時間表</li>
                    <li> 祭品均需要時間準備，請提早下訂</li>
                    <li>請務必填先寫《精緻代拜》訂購表單後再點選【加入購物車】</li>
                </ol>
                <ul>
                    <li>祭拜時間為每個月農曆初二，如需訂購，請提早三天下單</li>
                    <li>點選查看整年度法會時間表</li>
                    <li> 祭品均需要時間準備，請提早下訂</li>
                    <li>請務必填先寫《精緻代拜》訂購表單後再點選【加入購物車】</li>
                </ul>
            </div>
            <figure class="col-1-10-medium col-1-9-tablet col-1-5-mobile">
                <img src="<?php image_dir() ?>testimg/01.jpg" alt="">
            </figure>
            <div class="products-single__description-video col-1-10-medium col-1-9-tablet col-1-5-mobile">
                <div class="plyr__video-embed" id="products-player" data-plyr-provider="youtube" data-plyr-embed-id="pXi2vI-OSow"></div>
            </div>
        </div>
        <div class="products-single__recommend col-3-11-medium col-1-9-tablet col-1-5-mobile">
            <div class="products-single__recommend-title">
                <?php 
                    $title="推薦商品";
                    include ("../../components/title.php");
                ?>
            </div>
            <div class="products-single__recommend-wrapper">
                <div class="products-single__recommend-swiper">
                    <div class="products-single__recommend-swiper-wrapper swiper-wrapper">
                        <div class="products-single__recommend-swiper-slide swiper-slide">
                            <?php
                                include ("../../components/products/card.php");
                            ?>
                        </div>
                        <div class="products-single__recommend-swiper-slide swiper-slide">
                            <?php
                                include ("../../components/products/card.php");
                            ?>
                        </div>
                        <div class="products-single__recommend-swiper-slide swiper-slide">
                            <?php
                                include ("../../components/products/card.php");
                            ?>
                        </div>
                        <div class="products-single__recommend-swiper-slide swiper-slide">
                            <?php
                                include ("../../components/products/card.php");
                            ?>
                        </div>
                        <div class="products-single__recommend-swiper-slide swiper-slide">
                            <?php
                                include ("../../components/products/card.php");
                            ?>
                        </div>
                        <div class="products-single__recommend-swiper-slide swiper-slide">
                            <?php
                                include ("../../components/products/card.php");
                            ?>
                        </div>
                    </div>
                    <button class="products-single__recommend-swiper-navigation-prev">
                        <?php get_svg('arrow_left'); ?>
                    </button>
                    <button class="products-single__recommend-swiper-navigation-next">
                        <?php get_svg('arrow_right'); ?>
                    </button>
                </div>
            </div>
            <div class="products-single__recommend-btn">
                <?php 
                    $tag="a";
                    $url="/products";
                    $target="";
                    $text="回商品列表";
                    $style="";
                    include ("../../components/button.php");
                ?>
            </div>
        </div>
    </div>
    <?php include('../../components/products/addCart.php'); ?>
</div>
<!-- <?php include('../../components/dev.php'); ?> -->
<?php include('../../components/footer.php'); ?>