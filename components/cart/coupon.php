<div class="cart-coupon <?php echo $selected ? "-selected" : "";?>">
    <figure>
        <img src="<?php echo image_dir();?>testimg/08.jpeg" alt="">
    </figure>
    <div class="cart-coupon__information">
        <h4>老顧客專屬季末回饋 - 全館商品 85 折券</h4>
        <p>滿 $9999 可使用，最高折抵 $3000 元</p>
        <span>使用期限：即日起至 2024/09/07</span>
    </div>
    <div class="cart-coupon__btn">
        <?php 
            $tag="button";
            $url="";
            $target="";
            $text=$selected ? "已選" : "選擇";
            $style=$selected ? "-gray" : "-red";
            include ("../../components/button.php");
        ?>
    </div>
</div>