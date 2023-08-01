<div class="products-card">
    <figure>
        <img src="<?php echo image_dir();?>testimg/08.jpeg" alt="">
    </figure>
    <div class="products-card__row">
        <span class="products-card__row-category">精緻代拜組</span>
        <span class="products-card__row-promote">限時特價</span>
    </div>
    <h4>對年第二、第三年精緻代拜組</h4>
    <div class="products-card__price">
        <span class="products-card__price-original">$5,000</span>
        <span class="products-card__price-now">$4,000</span>
    </div>
    <p>我們積極期望能與各界不同高手領域的設計師、工程師合作，我們能提供多元不同層面的技術支援。</p>
    <?php 
        $url="";
        $target="";
        $text="加入購物車";
        $color="red";
        file_exists('../components/button.php') ? include ("../components/button.php") : include ("../../components/button.php");
    ?>
</div>