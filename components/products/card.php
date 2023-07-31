<div class="products-card">
    <figure>
        <img src="<?php echo image_dir().$img_url;?>" alt="">
    </figure>
    <div class="products-card__row">
        <span class="products-card__row-category"><?php echo $category;?></span>
        <span class="products-card__row-promote <?php echo $promote ? '-show' : '' ?>"><?php echo $promote;?></span>
    </div>
    <h4><?php echo $title;?></h4>
    <div class="products-card__price">
        <span class="products-card__price-original <?php echo $original_price ? '-show' : '' ?>"><?php echo '＄'.$original_price;?></span>
        <span class="products-card__price-now"><?php echo '＄'.$price;?></span>
    </div>
    <p><?php echo $description;?></p>
    <?php 
        $url="";
        $target="";
        $text="加入購物車";
        $color="red";
        include ("../components/button.php");
    ?>
</div>