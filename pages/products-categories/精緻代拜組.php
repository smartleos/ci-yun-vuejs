<?php include('../../function.php'); ?>
<?php include('../../components/header.php'); ?>
<?php include('../../components/bg.php'); ?>
<div class="page-products-categories">
<div class="page-products-categories__select">
        <select name="products_categories">
            <option value="精緻代拜組">精緻代拜組</option>
            <option value="精緻代拜組2">精緻代拜組2</option>
        </select>
        <?php get_svg('down') ?>
    </div>
    <div class="container grid">
        <div class="page-products-categories__products col-3-11-teblet col-1-5-mobile">
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