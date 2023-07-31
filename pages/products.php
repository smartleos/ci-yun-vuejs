<?php include('../function.php'); ?>
<?php include('../components/header.php'); ?>
<style>
    <?php include('../assets/scss/main.css'); ?>
</style>
<?php include('../components/bg.php'); ?>
<main class="page-products">
    <div class="page-products__top">
        <figure>
            <img src="../assets/imgs/testimg/01.jpg" alt="">
        </figure>
        <h2>商品列表</h2>
    </div>
    <div class="page-products__select">
        <select name="products_categories">
            <option value="all">所有商品</option>
            <option value="精緻代拜組">精緻代拜組</option>
            <option value="精緻代拜組2">精緻代拜組2</option>
        </select>
        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8"><path d="M1.41.59 6 5.17 10.59.59 12 2 6 8 0 2 1.41.59Z" fill="#9A7412"/></svg>
    </div>
    <div class="container grid">
        <div class="page-products__products col-3-11-medium">
            <section class="page-products__products-section -show" data-category="精緻代拜組">
                <div class="page-products__products-section-title">
                    <?php 
                        $title="精緻代拜組";
                        include ("../components/title.php");
                    ?>
                </div>
                <div class="page-products__products-section-list">
                    <div class="page-products__products-section-list-card">
                        <?php
                            $img_url="testimg/08.jpeg";
                            $category="精緻代拜組";
                            $promote="限時特價";
                            $title="對年第二、第三年精緻代拜組";
                            $original_price="5,000";
                            $price="4,000";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products__products-section-list-card">
                        <?php
                            $img_url="testimg/08.jpeg";
                            $category="精緻代拜組";
                            $promote="限時特價";
                            $title="對年第二、第三年精緻代拜組";
                            $original_price="5,000";
                            $price="4,000";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products__products-section-list-card">
                        <?php
                            $img_url="testimg/08.jpeg";
                            $category="精緻代拜組";
                            $promote="限時特價";
                            $title="對年第二、第三年精緻代拜組";
                            $original_price="5,000";
                            $price="4,000";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products__products-section-list-card">
                        <?php
                            $img_url="testimg/08.jpeg";
                            $category="精緻代拜組";
                            $promote="限時特價";
                            $title="對年第二、第三年精緻代拜組";
                            $original_price="5,000";
                            $price="4,000";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products__products-section-list-card">
                        <?php
                            $img_url="testimg/08.jpeg";
                            $category="精緻代拜組";
                            $promote="限時特價";
                            $title="對年第二、第三年精緻代拜組";
                            $original_price="5,000";
                            $price="4,000";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products__products-section-list-card">
                        <?php
                            $img_url="testimg/08.jpeg";
                            $category="精緻代拜組";
                            $promote="限時特價";
                            $title="對年第二、第三年精緻代拜組";
                            $original_price="5,000";
                            $price="4,000";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("../components/products/card.php");
                        ?>
                    </div>
                </div>
                <div class="page-products__products-section-btn">
                    <span>
                        <?php get_svg('arrow_right') ?>
                    </span>
                    <p>查看商品分類</p>
                </div>
            </section>
            <section class="page-products__products-section -show" data-category="精緻代拜組2">
                <div class="page-products__products-section-title">
                    <?php 
                        $title="精緻代拜組2";
                        include ("../components/title.php");
                    ?>
                </div>
                <div class="page-products__products-section-list">
                    <div class="page-products__products-section-list-card">
                        <?php
                            $img_url="testimg/08.jpeg";
                            $category="精緻代拜組";
                            $promote="限時特價";
                            $title="對年第二、第三年精緻代拜組";
                            $original_price="5,000";
                            $price="4,000";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products__products-section-list-card">
                        <?php
                            $img_url="testimg/08.jpeg";
                            $category="精緻代拜組";
                            $promote="限時特價";
                            $title="對年第二、第三年精緻代拜組";
                            $original_price="5,000";
                            $price="4,000";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products__products-section-list-card">
                        <?php
                            $img_url="testimg/08.jpeg";
                            $category="精緻代拜組";
                            $promote="限時特價";
                            $title="對年第二、第三年精緻代拜組";
                            $original_price="5,000";
                            $price="4,000";
                            $description="我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。";
                            include ("../components/products/card.php");
                        ?>
                    </div>
                </div>
                <div class="page-products__products-section-btn">
                    <span>
                        <?php get_svg('arrow_right') ?>
                    </span>
                    <p>查看商品分類</p>
                </div>
            </section>
        </div>
    </div>
</main>
<?php include('../components/dev.php'); ?>
<?php include('../components/footer.php'); ?>