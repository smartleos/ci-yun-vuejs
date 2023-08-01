<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<style>
    <?php include('../../assets/scss/main.css'); ?>
</style>
<?php include('../../components/bg.php'); ?>
<div class="page-products-categories">
<div class="page-products-categories__select">
        <select name="products_categories">
            <option value="精緻代拜組">精緻代拜組</option>
            <option value="精緻代拜組2">精緻代拜組2</option>
        </select>
        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 8"><path d="M1.41.59 6 5.17 10.59.59 12 2 6 8 0 2 1.41.59Z" fill="#9A7412"/></svg>
    </div>
    <div class="container grid">
        <div class="page-products-categories__products col-3-11-medium">
            <section class="page-products-categories__products-section">
                <div class="page-products-categories__products-section-title">
                    <?php 
                        $title="精緻代拜組";
                        include ("../../components/title.php");
                    ?>
                </div>
                <div class="page-products-categories__products-section-list">
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                    <div class="page-products-categories__products-section-list-card">
                        <?php
                            include ("../../components/products/card.php");
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php include('../../components/dev.php'); ?>
<?php include('../../components/footer.php'); ?>