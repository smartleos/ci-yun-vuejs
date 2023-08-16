<?php include('../function.php'); ?>
<?php include('../components/header.php'); ?>
<?php include('../components/bg.php'); ?>
<main class="page-search">
    <div class="container grid">
        <div class="page-search__wrapper col-3-11-tablet col-1-5-mobile">
            <h1>關於「<span>法會</span>」的搜尋資料：</h1>
            <section class="page-search__section" id="products">
                <h2>共 <span>3</span> 項產品</h2>
                <div class="page-search__section-products">
                    <?php
                        include ("../components/products/card.php");
                    ?>
                    <?php
                        include ("../components/products/card.php");
                    ?>
                    <?php
                        include ("../components/products/card.php");
                    ?>
                </div>
            </section>
            <section class="page-search__section" id="news">
                <h2>共 <span>3</span> 則消息</h2>
                <div class="page-search__section-news">
                    <?php 
                        $size="large";
                        include ("../components/news/card.php");
                    ?>
                    <?php 
                        $size="large";
                        include ("../components/news/card.php");
                    ?>
                    <?php 
                        $size="large";
                        include ("../components/news/card.php");
                    ?>
                </div>
            </section>
            <section class="page-search__section" id="no_result">
                <h2>抱歉，您輸入的關鍵字查無資料，請使用不同關鍵字再試一次。</h2>
                <div class="grid -cols-8-tablet -cols-4-mobile">
                    <form class="form col-3-7-tablet col-1-5-mobile">
                        <div class="form__input">
                            <label for="search">全站搜尋</label>
                            <div>
                                <input type="text" id="search" placeholder="請輸入...">
                            </div>
                            <span>
                                <?php get_svg('notice') ?>您尚未輸入...
                            </span>
                        </div>
                        <div class="form__btns">
                            <div class="form__btns-item">
                                <?php 
                                    $tag="a";
                                    $url="/";
                                    $text="送出";
                                    $style="";
                                    include ("../components/button.php");
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</main>
<!-- <?php include('../components/dev.php'); ?> -->
<?php include('../components/footer.php'); ?>